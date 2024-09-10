@include('layouts.navbar_admin');

@section('title')
    Update
@endsection

<link rel="stylesheet" href="{{ asset('assets/css/admin/tambah_product.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

@section('content')
    <div style="padding-top: 60px; padding-left: 30px ; font-size: 30px">
        <a href="/product/admin"><i class="icon fa-solid fa-angle-left"></i></a>
    </div>
    <div class="teks">
        <h2>Update Product</h2>
    </div>
    @if ($errors->any())
        <div class="position-fixed" style="bottom: 16px; right: 16px; width: 400px; z-index:10">
            <ul class="list-unstyled">
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ $error }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="position-fixed" style="bottom: 16px; right: 16px; width: 400px; z-index:10">
            <ul class="list-unstyled">
                <li>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </li>
            </ul>
        </div>
    @endif

    <div class="form" style="margin-left: 325px; margin-top: 30px;">
        <form action="{{ route('update_product', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Jenis Produk</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan jenis"
                    style="width: 645px; border: 1px black solid;" name="jenis" value="{{ $product->jenis }}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label" style="font-weight: bold;">Merk Produk</label>
                <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="masukkan merk"
                    style="width: 645px; border: 1px black solid;" name="merek" value="{{ $product->merek }}">
            </div>
            @php
                $fotoArray = is_string($product->foto)
                    ? json_decode($product->foto, true)
                    : $product->foto;
            @endphp
            <div id="image-inputs" style="width: 695px;">
                @foreach ($fotoArray as $index => $foto)
                    <div class="mb-3">
                        <label for="inputGambar{{ $index }}" style="color: black" class="form-label"><b>Gambar
                                {{ $index + 1 }}</b></label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="inputGambar{{ $index }}" accept="image/*"
                                style="border: black solid 1px;" name="foto[]" value="{{ $foto }}">
                            <button type="button" style="margin-left: 10px; border-radius: 0;"
                                class="btn btn-outline-secondary" onclick="addImageInput()">
                                <i class="bi bi-plus"></i>
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

            <div id="description-inputs" style="width: 695px;">
                @foreach ($keunggulanArray as $index => $keunggulan)
                    <div class="mb-3">
                        <label for="inputDeskripsi{{ $index }}" style="color: black"
                            class="form-label"><b>Keunggulan
                                Produk {{ $index + 1 }}</b></label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputDeskripsi{{ $index }}"
                                placeholder="masukkan keunggulan produk" style="border: black solid 1px;"
                                name="keunggulan[]" value="{{ $keunggulan }}">
                            <button type="button" style="margin-left: 10px; border-radius: 0;"
                                class="btn btn-outline-secondary" onclick="addDescriptionInput()">
                                <i class="bi bi-plus"></i>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>

            <button type="submit" class="btn_tambah">Simpan</button>
            <div class="text">
                <p style="padding-left: 220px; font-weight: bold; font-size: 30px; padding-top: 60px;">Our Customer</p>
                <img src="{{ asset('assets/image/Product/pepsoden.png') }}" class="d-block w-20 h-20" alt="Pepsoden">
            </div>
        </form>
    </div>

    @include('layouts.footer')

    <script>
        let imageInputCount = 1;
        let descriptionInputCount = 1;

        function addImageInput() {
            imageInputCount++;
            const imageInputsDiv = document.getElementById('image-inputs');
            const newInputDiv = document.createElement('div');
            newInputDiv.classList.add('mb-3');
            newInputDiv.innerHTML = `
            <label for="inputGambar${imageInputCount}" style="color: black" class="form-label"><b>Gambar</b></label>
            <div class="input-group">
                <input type="file" class="form-control" id="inputGambar${imageInputCount}" accept="image/*" style="border: black solid 1px;" name="foto[]" >
                <button type="button" style="margin-left: 10px; border-radius: 0;" class="btn btn-outline-secondary" onclick="removeImageInput(this)">
                    <i class="bi bi-dash"></i>
                </button>
                <button type="button" style="margin-left: 10px; border-radius: 0;" class="btn btn-outline-secondary" onclick="addImageInput()">
                    <i class="bi bi-plus"></i>
                </button>
            </div>
        `;
            imageInputsDiv.appendChild(newInputDiv);
        }

        function removeImageInput(button) {
            const inputGroup = button.parentElement;
            const inputDiv = inputGroup.parentElement;
            inputDiv.remove();
        }

        function addDescriptionInput() {
            descriptionInputCount++;
            const descriptionInputsDiv = document.getElementById('description-inputs');
            const newInputDiv = document.createElement('div');
            newInputDiv.classList.add('mb-3');
            newInputDiv.innerHTML = `
            <label for="inputDeskripsi${descriptionInputCount}" style="color: black" class="form-label"><b>Keunggulan Produk</b></label>
            <div class="input-group">
                <input type="text" class="form-control" id="inputDeskripsi${descriptionInputCount}" placeholder="masukkan keunggulan produk" style="border: black solid 1px;" name="keunggulan[]" >
                
                <button type="button" style="margin-left: 10px; border-radius: 0;" class="btn btn-outline-secondary" onclick="removeDescriptionInput(this)">
                    <i class="bi bi-dash"></i>
                </button>
                <button type="button" style="margin-left: 10px; border-radius: 0;" class="btn btn-outline-secondary" onclick="addDescriptionInput()">
                    <i class="bi bi-plus"></i>
                </button>
            </div>
        `;
            descriptionInputsDiv.appendChild(newInputDiv);
        }

        function removeDescriptionInput(button) {
            const inputGroup = button.parentElement;
            const inputDiv = inputGroup.parentElement;
            inputDiv.remove();
        }
    </script>
