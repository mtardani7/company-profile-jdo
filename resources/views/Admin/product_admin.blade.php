@include('layouts.navbar_admin')

@section('title')
    Product
@endsection

@section('content')

    <link rel="stylesheet" href="{{ asset('assets/css/admin/product_admin.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <div id="preloader">
        <img src="{{ '/assets/image/logo.png' }}" alt="Loading...">
    </div>


    <img src="{{ asset('assets/image/product.png') }}" alt="background"
        style="width: 100%; max-width: 1280px; height: auto;">

    <img src="{{ asset('assets/image/Product/product.png') }}" alt="background" style="width: 100%; height: auto;">


    <div class="container-fluid text-center add_product">
        <div class="row align-items-start">
            <div class="col">
                <form action="{{ route('cari') }}" method="GET">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search..." aria-label="Search"
                            name="cari" value="{{ old('cari', $cari ?? '') }}">
                        <button type="submit" class="input-group-text">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
            </div>
            <div class="col">
                <h3 style="color: white; font-weight: bold;">Product</h3>
            </div>
            <div class="col">
                <button type="button" class="btn btn-secondary"><i class="bi bi-tools" style="margin-right: 5px;"></i><a
                        href="{{ url('/tambah_product') }}" style="text-decoration: none; color: white;">Create</a></button>
            </div>
        </div>
    </div>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" id="successAlert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="errorAlert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    @foreach ($product as $pd)
        <div class="container-fluid producttext-start"
            style="background-color: #b7a3a3; padding: 20px; border-radius: 10px; margin-bottom: 40px;">
            <div class="row align-items-start">
                <div class="col">
                    <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel"
                        data-bs-interval="3000">
                        <h3 style="padding-bottom: 20px; padding-left: 40px; font-weight: bold; color:black">
                            {{ $pd->jenis }}</h3>
                        <div class="position-absolute"
                            style="top: 0; right: -590px; display: flex; gap: 10px; padding-right: 20px;">
                            <form action="{{ route('delete', $pd->id) }}" method="get">
                                <button type="submit" class="btn btn-danger btn-sm" style="height: 36px;">
                                    <i class="bi bi-trash3-fill" style="margin-right: 5px;"></i>Delete
                                </button>
                            </form>
                            <a href="{{ route('update', $pd->id) }}" style="text-decoration: none;">
                                <button type="button" class="btn btn-primary" style="height: 36px;">
                                    <i class="bi bi-gear-fill" style="margin-right: 5px;"></i>Update
                                </button>
                            </a>
                        </div>

                        <!-- Carousel -->
                        <div class="carousel-inner">
                            @if (is_array($pd->foto) || is_object($pd->foto))
                                @foreach ($pd->foto as $index => $foto)
                                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}"
                                        id="carousel-item-{{ $index }}">
                                        <img src="{{ asset('storage/foto/' . $foto) }}" class="d-block w-100"
                                            alt="..." data-bs-toggle="modal" data-bs-target="#imageModal"
                                            data-src="{{ asset('storage/foto/' . $foto) }}">
                                    </div>
                                @endforeach
                            @endif
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
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
                </div>

                <div class="col" style="padding-left: 60px; padding-top: 60px">
                    <p style="color: black">Keunggulan Produk</p>
                    <h3 id="product-title" style="color: black">{{ $pd->merek }}</h3>
                    <ul id="product-description">
                        @if (is_array($pd->keunggulan) || is_object($pd->keunggulan))
                            @foreach ($pd->keunggulan as $keunggulan)
                                <li style="color: black">{{ $keunggulan }}</li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    @endforeach


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
        document.addEventListener("DOMContentLoaded", function() {
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const modalImage = document.getElementById('modalImage');
            document.querySelectorAll('.carousel-item img').forEach(image => {
                image.addEventListener('click', function() {
                    const src = this.getAttribute('data-src');
                    modalImage.setAttribute('src', src);
                });
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const modalImage = document.getElementById('modalImage');
            document.querySelectorAll('.carousel-item img').forEach(image => {
                image.addEventListener('click', function() {
                    const src = this.getAttribute('data-src');
                    modalImage.setAttribute('src', src);
                });
            });
            modalImage.addEventListener('mouseover', function() {
                this.style.transform = 'scale(1.2)';
            });

            modalImage.addEventListener('mouseout', function() {
                this.style.transform = 'scale(1)';
            });
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(() => {
                document.getElementById('preloader').style.display = 'none';
                document.getElementById('content').style.display = 'block';
            }, 500);

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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const modalImage = document.getElementById('modalImage');
            let scale = 1;
            let isDragging = false;
            let startX, startY, offsetX = 0,
                offsetY = 0;

            modalImage.addEventListener('wheel', function(event) {
                event.preventDefault();
                const zoomStep = 0.1;
                if (event.deltaY < 0) {
                    scale = Math.min(scale + zoomStep, 3);
                } else {
                    scale = Math.max(scale - zoomStep, 1);
                }
                modalImage.style.transform = `scale(${scale}) translate(${offsetX}px, ${offsetY}px)`;
                modalImage.style.cursor = scale > 1 ? 'move' : 'zoom-in';
            });

            modalImage.addEventListener('mousedown', function(event) {
                if (scale > 1) {
                    isDragging = true;
                    startX = event.clientX - offsetX;
                    startY = event.clientY - offsetY;
                    modalImage.style.cursor = 'grabbing';
                }
            });

            modalImage.addEventListener('mousemove', function(event) {
                if (isDragging) {
                    offsetX = event.clientX - startX;
                    offsetY = event.clientY - startY;
                    modalImage.style.transform = `scale(${scale}) translate(${offsetX}px, ${offsetY}px)`;
                }
            });

            document.addEventListener('mouseup', function() {
                if (isDragging) {
                    isDragging = false;
                    modalImage.style.cursor = 'move';
                }
            });

            const modal = document.getElementById('imageModal');
            modal.addEventListener('hidden.bs.modal', function() {
                scale = 1;
                offsetX = 0;
                offsetY = 0;
                modalImage.style.transform = `scale(${scale}) translate(0, 0)`;
                modalImage.style.cursor = 'zoom-in';
            });

            modalImage.addEventListener('click', function() {
                if (scale === 1) {
                    scale = 2;
                    modalImage.style.transform = `scale(${scale})`;
                    modalImage.style.cursor = 'move';
                } else {
                    scale = 1;
                    offsetX = 0;
                    offsetY = 0;
                    modalImage.style.transform = `scale(${scale}) translate(0, 0)`;
                    modalImage.style.cursor = 'zoom-in';
                }
            });
        });
        setTimeout(function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                alert.classList.remove('show');
                alert.classList.add('fade');
            });
        }, 5000);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
