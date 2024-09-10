<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductAdminController extends Controller
{
    public function index(Request $request)
    {
        $cari = $request->input('cari');

        $product = Product::when($cari, function ($query, $cari) {
            return $query->where('jenis', 'like', "%$cari%")
            ->orWhere('merek', 'like', "%$cari%");
        })->get();

        return view('Admin.product_admin', compact('product', 'cari'));
    }

    public function create()
    {
        return view('Admin.tambah_product');
    }
    public function update($id)
    {
        $product = Product::find($id);
        return view('Admin.update_produk', compact('product'));
    }

    public function createProduct(Request $request)
    {
        
        $validator = Validator::make($request->all(), [
            'jenis' => 'required|string|max:255',
            'merek' => 'required|string|max:255',
            'foto' => 'required|array', 
            'foto.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
            'keunggulan' => 'required|array',
            'keunggulan.*' => 'required|string|max:255',
        ], [
            'foto.max' => 'Gambar tidak boleh lebih dari 10 MB.',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $photos = [];
        foreach ($request->file('foto') as $photo) {
            $filename = uniqid() . '.' . $photo->getClientOriginalExtension();
            $photo->storeAs('foto', $filename, 'public');
            $photos[] = $filename;
        }
        $keunggulan = $request->input('keunggulan');
        $product = new Product([
            'jenis' => $request->input('jenis'),
            'merek' => $request->input('merek'),
            'foto' => $photos,
            'keunggulan' => $keunggulan,            
        ]);
        $product->save();
        session()->flash('success', 'Product created successfully.');

        return redirect()->route('tambah')->with('success', 'Product created successfully.');
    }

    public function updateProduct(Request $request, $id)
    {
        $request->validate([
            'jenis' => 'required|string|max:255',
            'merek' => 'required|string|max:255',
            'foto' => 'sometimes|array',
            'foto.*' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:10240',
            'keunggulan' => 'required|array',
        ],[
            'foto.max' => 'Gambar tidak boleh lebih dari 10 MB.',
        ]);

        $product = Product::findOrFail($id);

        // Pengecekan apakah ada file gambar yang diunggah
        if ($request->hasFile('foto')) {
            $photos = [];
            foreach ($request->file('foto') as $photo) {
                $filename = uniqid() . '.' . $photo->getClientOriginalExtension();
                $photo->storeAs('foto', $filename, 'public');
                $photos[] = $filename;
            }
            // Jika ada file baru, update kolom foto di database
            $product->foto = $photos;
        }


        $product->jenis = $request->jenis;
        $product->merek = $request->merek;
        $product->keunggulan = ($request->keunggulan);
        $product->save();
        session()->flash('success', 'Product created successfully.');

        return redirect()->back()->with('success', 'Product updated successfully.');
    }

    public function delete(Request $request, $id){
        try {
            $product = Product::findOrFail($id); 
            $product->delete();
            // Add a success message to the session
            return redirect()->back()->with('success', 'Data berhasil dihapus.');
        } catch (\Exception $e) {
            // Add an error message to the session
            return redirect()->back()->with('error', 'Gagal menghapus data.');
        }
    }
}
