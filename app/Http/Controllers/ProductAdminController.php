<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductAdminController extends Controller
{
    public function index()
    {
        return view('Admin.product_admin');
    }

    public function create()
    {
        return view('Admin.tambah_product');
    }
    public function update()
    {
        return view('Admin.update_produk');
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
            'foto' => json_encode($photos),
            'keunggulan' => json_encode($keunggulan),
            // 'keunggulan' => $request->input('keunggulan'),
            
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
            'foto.*' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048',
            'keunggulan' => 'required|array',
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('foto')) {
            $photos = [];
            foreach ($request->file('foto') as $photo) {
                $path = $photo->store('public/photos');
                $photos[] = $path;
            }
            $product->foto = json_encode($photos);
        }

        $product->jenis = $request->jenis;
        $product->merek = $request->merek;
        $product->keunggulan = json_encode($request->keunggulan);
        $product->save();

        return redirect()->route('update')->with('success', 'Product updated successfully.');
    }


}
