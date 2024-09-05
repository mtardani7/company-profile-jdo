@include('layouts.navbar')

@section('title')
    Product
@endsection

@section('content')

    <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <div id="preloader">
        <img src="{{ '/assets/image/logo.png' }}" alt="Loading...">
    </div>

    <img src="{{ asset('assets/image/Product/product.png') }}" alt="background" style="width: 100%; height: auto;">

    <div class="text">
        <h1>Product</h1>
    </div>

    <!--Kids -->
    @foreach ($product as $pd)
        <div class="container-fluid text-start">
            <div class="row align-items-start">
                <div class="col">
                    <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel"
                        data-bs-interval="3000">
                        <h3 style="padding-bottom: 20px; padding-left: 40px; font-weight: bold">{{ $pd->jenis }}</h3>
                        <div class="carousel-inner">
                            <!-- Calon e nggo nambah gambar -->
                            <div class="carousel-item active" id="image1">
                                <img src="/assets/image/Product/PP WHITE 1.jpg" class="d-block w-100" alt="..."
                                    onclick="openModal(this)">
                            </div>
                            <div class="carousel-item" id="image2">
                                <img src="/assets/image/Product/PP WHITE 2.jpg" class="d-block w-100" alt="..."
                                    onclick="openModal(this)">
                            </div>

                            <!-- Modal kanggo memperbesar gambar -->
                            <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog custom-modal">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <img id="modalImage" src="" class="img-fluid" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col" style="padding-left: 60px; padding-top: 60px">
                    <p>Keunggulan Produk</p>
                    <h3 id="product-title">{{ $pd->merek }}</h3>
                    <ul id="product-description">
                        <li>Pegangan ibu jari untuk kontrol yang lebih baik</li>
                        <li>Pegangan 2 komponen - PP + TPE</li>
                        <li>Profil bulu berpotongan datar</li>
                    </ul>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Manual -->
    {{-- <div class="container-fluid text-start">
    <div class="row align-items-start">
        <div class="col">
            <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                <h3 style="padding-bottom: 20px; padding-left: 40px; font-weight: bold">Manual</h3>
                <div class="carousel-inner">
                    <!-- Calon e nggo nambah gambar -->
                    <div class="carousel-item active" id="image9">
                        <img src="/assets/image/Product/PP WHITE 1.jpg" class="d-block w-100" alt="..." onclick="openModal(this)">
                    </div>
                    <div class="carousel-item" id="image10">
                        <img src="/assets/image/Product/PP WHITE 2.jpg" class="d-block w-100" alt="..." onclick="openModal(this)">
                    </div>

                    <!-- Modal kanggo memperbesar gambar -->
                    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
                        <div class="modal-dialog custom-modal">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <img id="modalImage" src="" class="img-fluid" alt="Image">
                                </div>
                            </div>
                        </div>
                    </div>                  
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls2" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="col" style="padding-left: 60px; padding-top: 60px">
            <p>Keunggulan Produk</p>
            <h3 id="product-title2">T49</h3>    
            <ul id="product-description2">
                <li>Deskripsi lain untuk gambar sembilan</li>
                <li>Fitur tambahan untuk gambar sembilan</li>
                <li>Informasi tambahan untuk gambar sembilan</li>
            </ul>
        </div>
    </div>
</div> --}}

    <div class="text fade-in-up">
        <h1>Our Customer</h1>
        <div class="image-container">
            <img src="{{ asset('assets/image/Product/pepsoden.png') }}" class="d-block w-20 h-20" alt="Pepsoden">
        </div>
    </div>

    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    <script>
        const descriptionsKids = {
            'image1': {
                title: 'T41',
                description: [
                    'Pegangan ibu jari untuk kontrol yang lebih baik',
                    'Pegangan 2 komponen – PP + TPE',
                    'Profil bulu berpotongan datar'
                ]
            },
            'image2': {
                title: 'T42',
                description: [
                    'Deskripsi lain untuk gambar kedua',
                    'Fitur tambahan untuk gambar kedua',
                    'Informasi tambahan untuk gambar kedua'
                ]
            },
            'image3': {
                title: 'T43',
                description: [
                    'Deskripsi lain untuk gambar ketiga',
                    'Fitur tambahan untuk gambar ketiga',
                    'Informasi tambahan untuk gambar ketiga'
                ]
            },
            'image4': {
                title: 'T44',
                description: [
                    'Deskripsi lain untuk gambar empat',
                    'Fitur tambahan untuk gambar empat',
                    'Informasi tambahan untuk gambar empat'
                ]
            },
            'image5': {
                title: 'T45',
                description: [
                    'Deskripsi lain untuk gambar lima',
                    'Fitur tambahan untuk gambar lima',
                    'Informasi tambahan untuk gambar lima'
                ]
            },
            'image6': {
                title: 'T46',
                description: [
                    'Deskripsi lain untuk gambar enam',
                    'Fitur tambahan untuk gambar enam',
                    'Informasi tambahan untuk gambar enam'
                ]
            },
            'image7': {
                title: 'T47',
                description: [
                    'Deskripsi lain untuk gambar tujuh',
                    'Fitur tambahan untuk gambar tujuh',
                    'Informasi tambahan untuk gambar tujuh'
                ]
            },
            'image8': {
                title: 'T48',
                description: [
                    'Deskripsi lain untuk gambar delapan',
                    'Fitur tambahan untuk gambar delapan',
                    'Informasi tambahan untuk gambar delapan'
                ]
            }
        };

        document.getElementById('carouselExampleControls1').addEventListener('slid.bs.carousel', function() {
            const activeItem = document.querySelector('#carouselExampleControls1 .carousel-item.active');
            const id = activeItem.id;
            const desc = descriptionsKids[id] || {
                title: '',
                description: []
            };
            document.getElementById('product-title').innerText = desc.title;
            const descriptionList = document.getElementById('product-description');
            descriptionList.innerHTML = '';
            desc.description.forEach(function(item) {
                const li = document.createElement('li');
                li.textContent = item;
                descriptionList.appendChild(li);
            });
        });

        const descriptionsManual = {
            'image9': {
                title: 'T49',
                description: [
                    'Deskripsi lain untuk gambar sembilan',
                    'Fitur tambahan untuk gambar sembilan',
                    'Informasi tambahan untuk gambar sembilan'
                ]
            },
            'image10': {
                title: 'T410',
                description: [
                    'Deskripsi lain untuk gambar sepuluh',
                    'Fitur tambahan untuk gambar sepuluh',
                    'Informasi tambahan untuk gambar sepuluh'
                ]
            },
            'image11': {
                title: 'T411',
                description: [
                    'Deskripsi lain untuk gambar sebelas',
                    'Fitur tambahan untuk gambar sebelas',
                    'Informasi tambahan untuk gambar sebelas'
                ]
            },
            'image12': {
                title: 'T412',
                description: [
                    'Deskripsi lain untuk gambar dua belas',
                    'Fitur tambahan untuk gambar dua belas',
                    'Informasi tambahan untuk gambar dua belas'
                ]
            },
            'image13': {
                title: 'T413',
                description: [
                    'Deskripsi lain untuk gambar tiga belas',
                    'Fitur tambahan untuk gambar tiga belas',
                    'Informasi tambahan untuk gambar tiga belas'
                ]
            },
            'image14': {
                title: 'T414',
                description: [
                    'Deskripsi lain untuk gambar empat belas',
                    'Fitur tambahan untuk gambar emapat belas',
                    'Informasi tambahan untuk gambar empat belas'
                ]
            },
            'image15': {
                title: 'T415',
                description: [
                    'Deskripsi lain untuk gambar lima belas',
                    'Fitur tambahan untuk gambar lima belas',
                    'Informasi tambahan untuk gambar lima belas'
                ]
            },
            'image16': {
                title: 'T416',
                description: [
                    'Deskripsi lain untuk gambar enam belas',
                    'Fitur tambahan untuk gambar enam belas',
                    'Informasi tambahan untuk gambar enam belas'
                ]
            }
        };

        document.getElementById('carouselExampleControls2').addEventListener('slid.bs.carousel', function() {
            const activeItem = document.querySelector('#carouselExampleControls2 .carousel-item.active');
            const id = activeItem.id;
            const desc = descriptionsManual[id] || {
                title: '',
                description: []
            };
            document.getElementById('product-title2').innerText = desc.title;
            const descriptionList = document.getElementById('product-description2');
            descriptionList.innerHTML = '';
            desc.description.forEach(function(item) {
                const li = document.createElement('li');
                li.textContent = item;
                descriptionList.appendChild(li);
            });
        });
    </script>

    <script>
        function openModal(imgElement) {
            var modalImg = document.getElementById("modalImage");
            modalImg.src = imgElement.src;
            var modal = new bootstrap.Modal(document.getElementById('imageModal'));
            modal.show();
        }

        document.getElementById('imageModal').addEventListener('hidden.bs.modal', function() {
            var modalImg = document.getElementById("modalImage");
            modalImg.style.transform = "scale(1)";
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(() => {
                document.getElementById('preloader').style.display = 'none';
                document.getElementById('content').style.display = 'block';
            }, 300);

            const elements = document.querySelectorAll('.fade-in-up');

            function checkPosition() {
                elements.forEach(element => {
                    const position = element.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;

                    if (position < windowHeight - 50) {
                        element.classList.add('show');
                    }
                });
            }

            window.addEventListener('scroll', checkPosition);
            checkPosition();
        });
    </script>
