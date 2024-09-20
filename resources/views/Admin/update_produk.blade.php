@extends('layouts.navbar_admin')

@section('title')
    Update
@endsection

<link rel="stylesheet" href="{{ asset('assets/css/admin/tambah_product.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pt-5 ps-3 fs-4" style="margin-top: 7%">
                    <a href="/product/admin"><i class="icon fa-solid fa-angle-left"></i></a>
                </div>
                <div class="teks text-center">
                    <h2>Update Product</h2>
                </div>
            </div>

            @if ($errors->any())
                <div class="col-12 position-fixed"
                    style="bottom: 16px; right: 16px; width: 100%; max-width: 400px; z-index:10">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $error }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="col-12 position-fixed"
                    style="bottom: 16px; right: 16px; width: 100%; max-width: 400px; z-index:10">
                    <ul class="list-unstyled">
                        <li>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </li>
                    </ul>
                </div>
            @endif

            <div class="col-lg-8 col-md-10 col-sm-12 mx-auto mt-4">
                <form action="{{ route('update_product', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label fw-bold">Jenis Produk</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="masukkan jenis" name="jenis" value="{{ $product->jenis }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput2" class="form-label fw-bold">Merk Produk</label>
                        <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="masukkan merk"
                            name="merek" value="{{ $product->merek }}">
                    </div>
                    @php
                        $fotoArray = is_string($product->foto) ? json_decode($product->foto, true) : $product->foto;
                    @endphp
                    <div id="image-inputs">
                        @foreach ($fotoArray as $index => $foto)
                            <div class="mb-3" id="image-group-{{ $index }}">
                                <label for="inputGambar{{ $index }}" class="form-label"><b>Gambar
                                        {{ $index + 1 }}</b></label>
                                <div class="input-group">
                                    <input type="file" class="form-control" id="inputGambar{{ $index }}"
                                        accept="image/*" name="foto[]" onchange="previewImage(this, {{ $index }})">
                                    <button type="button" class="btn btn-outline-secondary ms-2" onclick="addImageInput()">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                    @if ($index > 0)
                                        <button type="button" class="btn btn-outline-secondary ms-2"
                                            onclick="removeImageInput({{ $index }})">
                                            <i class="bi bi-dash"></i>
                                        </button>
                                    @endif
                                </div>
                                <!-- Preview Image dan Remove Button -->
                                <div class="mt-2 d-flex align-items-center">
                                    <img id="preview-{{ $index }}" src="{{ asset('storage/foto/' . $foto) }}"
                                        alt="Preview Gambar"
                                        style="max-width: 200px; max-height: 200px; display: {{ $foto ? 'block' : 'none' }};">
                                    <button type="button" class="btn btn-outline-danger ms-2"
                                        id="removePreviewBtn-{{ $index }}"
                                        style="display: {{ $foto ? 'block' : 'none' }};"
                                        onclick="removePreviewImage({{ $index }})">
                                        <i class="bi bi-x-circle"></i> Remove
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    @php
                        $keunggulanArray = is_string($product->keunggulan)
                            ? json_decode($product->keunggulan, true)
                            : $product->keunggulan;
                    @endphp
                    <div id="description-inputs">
                        @foreach ($keunggulanArray as $index => $keunggulan)
                            <div class="mb-3" id="description-group-{{ $index }}">
                                <label for="inputDeskripsi{{ $index }}" class="form-label"><b>Keunggulan Produk
                                        {{ $index + 1 }}</b></label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="inputDeskripsi{{ $index }}"
                                        placeholder="masukkan keunggulan produk" name="keunggulan[]"
                                        value="{{ $keunggulan }}">
                                    <button type="button" class="btn btn-outline-secondary ms-2"
                                        onclick="addDescriptionInput()">
                                        <i class="bi bi-plus"></i>
                                    </button>
                                    @if ($index > 0)
                                        <button type="button" class="btn btn-outline-secondary ms-2"
                                            onclick="removeDescriptionInput({{ $index }})">
                                            <i class="bi bi-dash"></i>
                                        </button>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary" style="border-radius: 30px;">Simpan</button>
                    </div>
                    <div class="text-center mt-5">
                        <p class="fw-bold fs-4" style="color: black">Our Customer</p>
                        <img src="{{ asset('assets/image/Product/pepsoden.png') }}" class="img-fluid" alt="Pepsoden">
                    </div>
                </form>
            </div>
        </div>
    </div>


    @include('layouts.footer')

    <script>
        let imageInputCount = {{ count($fotoArray) }};
        let descriptionInputCount = {{ count($keunggulanArray) }};

        function addImageInput() {
            imageInputCount++;
            const imageInputsDiv = document.getElementById('image-inputs');
            const newInputDiv = document.createElement('div');
            newInputDiv.classList.add('mb-3');
            newInputDiv.id = `image-group-${imageInputCount}`;
            newInputDiv.innerHTML = `
            <label for="inputGambar${imageInputCount}" style="color: black" class="form-label"><b>Gambar</b></label>
            <div class="input-group">
                <input type="file" class="form-control" id="inputGambar${imageInputCount}" accept="image/*" style="border: black solid 1px;" name="foto[]" >
                <button type="button" style="margin-left: 10px; border-radius: 0;" class="btn btn-outline-secondary" onclick="removeImageInput(${imageInputCount})">
                    <i class="bi bi-dash"></i>
                </button>
                <button type="button" style="margin-left: 10px; border-radius: 0;" class="btn btn-outline-secondary" onclick="addImageInput()">
                    <i class="bi bi-plus"></i>
                </button>
            </div>
        `;
            imageInputsDiv.appendChild(newInputDiv);
        }

        function removeImageInput(index) {
            const inputDiv = document.getElementById(`image-group-${index}`);
            if (inputDiv) {
                inputDiv.remove();
            }
        }

        function addDescriptionInput() {
            descriptionInputCount++;
            const descriptionInputsDiv = document.getElementById('description-inputs');
            const newInputDiv = document.createElement('div');
            newInputDiv.classList.add('mb-3');
            newInputDiv.id = `description-group-${descriptionInputCount}`;
            newInputDiv.innerHTML = `
            <label for="inputDeskripsi${descriptionInputCount}" style="color: black" class="form-label"><b>Keunggulan Produk</b></label>
            <div class="input-group">
                <input type="text" class="form-control" id="inputDeskripsi${descriptionInputCount}" placeholder="masukkan keunggulan produk" style="border: black solid 1px;" name="keunggulan[]" >
                
                <button type="button" style="margin-left: 10px; border-radius: 0;" class="btn btn-outline-secondary" onclick="removeDescriptionInput(${descriptionInputCount})">
                    <i class="bi bi-dash"></i>
                </button>
                <button type="button" style="margin-left: 10px; border-radius: 0;" class="btn btn-outline-secondary" onclick="addDescriptionInput()">
                    <i class="bi bi-plus"></i>
                </button>
            </div>
        `;
            descriptionInputsDiv.appendChild(newInputDiv);
        }

        function removeDescriptionInput(index) {
            const inputDiv = document.getElementById(`description-group-${index}`);
            if (inputDiv) {
                inputDiv.remove();
            }
        }

        function previewImage(input, index) {
            const file = input.files[0]; // Ambil file gambar
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    // Tampilkan gambar ke elemen img dengan ID preview-INDEX
                    const preview = document.getElementById('preview-' + index);
                    const removeBtn = document.getElementById('removePreviewBtn-' + index);
                    preview.src = e.target.result;
                    preview.style.display = 'block'; // Tampilkan gambar
                    removeBtn.style.display = 'block'; // Tampilkan tombol remove
                };
                reader.readAsDataURL(file); // Baca file sebagai URL data
            }
        }

        function removePreviewImage(index) {
            // Hapus preview image
            const preview = document.getElementById('preview-' + index);
            const removeBtn = document.getElementById('removePreviewBtn-' + index);
            const fileInput = document.getElementById('inputGambar' + index);

            preview.src = ''; // Kosongkan gambar
            preview.style.display = 'none'; // Sembunyikan gambar
            removeBtn.style.display = 'none'; // Sembunyikan tombol remove
            fileInput.value = ''; // Kosongkan input file
        }
        setTimeout(function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                alert.classList.remove('show');
                alert.classList.add('fade');
            });
        }, 5000);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endsection
