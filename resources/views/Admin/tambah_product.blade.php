@include('layouts.navbar_admin');

@section('title')
    Create
@endsection

<link rel="stylesheet" href="{{ asset('assets/css/admin/tambah_product.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


@section('content')

<div class="container text-start">
    <div class="row align-items-start">
      <div class="col">
        <div style="padding-top: 60px; padding-left: 30px ; font-size: 30px">
            <a href="/product/admin"><i class="icon fa-solid fa-angle-left"></i></a>
        </div>
      </div>
      <div class="col">
        <div class="teks">
            <h2>Create Product</h2>
        </div>
      </div>
    </div>
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

    <div class="form" style="margin-left: 325px; margin-top: 20px;">
        <form action="{{ route('tambah_product') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label" style="font-weight: bold;">Jenis Produk</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="masukkan jenis"
                    style="width: 645px; border: 1px black solid;" name="jenis" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label" style="font-weight: bold;">Merk Produk</label>
                <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="masukkan merk"
                    style="width: 645px; border: 1px black solid;" name="merek" required>
            </div>
            <div id="image-inputs" style="width: 695px;">
                <div class="mb-3">
                    <label for="inputGambar1" style="color: black" class="form-label"><b>Gambar</b></label>
                    <div class="input-group">
                        <input type="file" class="form-control" id="inputGambar1" accept="image/*"
                            style="border: black solid 1px;" name="foto[]" required>
                        <button type="button" style="margin-left: 10px; border-radius: 0;"
                            class="btn btn-outline-secondary" onclick="addImageInput()">
                            <i class="bi bi-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div id="description-inputs" style="width: 695px;">
                <div class="mb-3">
                    <label for="inputDeskripsi1" style="color: black" class="form-label"><b>Keunggulan Produk</b></label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="inputDeskripsi1"
                            placeholder="masukkan keunggulan produk" style="border: black solid 1px;" name="keunggulan[]"
                             required>
                        <button type="button" style="margin-left: 10px; border-radius: 0;"
                            class="btn btn-outline-secondary" onclick="addDescriptionInput()">
                            <i class="bi bi-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn_tambah">Simpan</button>
            <div class="text">
                <p style="padding-left: 220px; font-weight: bold; font-size: 30px; padding-top: 60px;">Our Customer</p>
                <img src="{{ asset('assets/image/Product/pepsoden.png') }}" class="d-block w-20 h-20" style="margin-left: 200px;" alt="Pepsoden">
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
                <input type="file" class="form-control" id="inputGambar${imageInputCount}" accept="image/*" style="border: black solid 1px;" name="foto[]">
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
                <input type="text" class="form-control" id="inputDeskripsi${descriptionInputCount}" placeholder="masukkan keunggulan produk" style="border: black solid 1px;" name="keunggulan[]">
                
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
