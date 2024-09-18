@include('layouts.navbar')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">

    <div id="preloader">
        <img src="{{ '/assets/image/logo.png' }}" alt="Loading...">
    </div>

    <img class="hero-img" src="{{ asset('assets/image/home/home.png') }}" alt="Home">
    <div class="hero-section">
        <div class="text-box">
            <h2 class="px-2">How We Work</h2>
            <p class="px-2">At our core, we prioritize excellence and adherence to the highest standards. Our Domestic
                Medical Devices
                production is aligned with the best practices, ensuring top-tier quality and compliance. We strictly follow
                the...</p>
        </div>
    </div>

    <div class="quality-promise">
        <div class="container">
            <div class="d-flex flex-md-row flex-column">
                <div class="column">
                    <div>
                        <h2 style="padding-top: 10%; font-size: 35px; color: #524A4E">QUALITY PROMISE</h2>
                        <h4>With us, Quality is guaranteed, not just controlled.</h4>
                        <br>
                        <p>Jewel Consumer Care is committed to global excellence. We are ISO 9001 and Halal “A” certified,
                            adhere to
                            BRC Global standards with Grade A,
                            and implement responsible procurement audits. Our focus includes domestic medical devices and
                            occupational safety.
                        </p>

                        <p>Our quality is end-to-end - from raw materials to final products. With modern equipment and
                            advanced
                            traceability systems, we guarantee product excellence.
                            Our commitment goes beyond compliance, creating consumer trust around the world.
                        </p>
                    </div>
                </div>
                <div class="column d-flex align-items-center">
                    <div class="certifications">
                        <div class="container d-flex text-center align-items-center">
                            <div class="d-flex flex-wrap">
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/image/home/kemenkes.png') }}" alt="Kemenkes" class="img-fluid" style="width: 100px; height: auto">
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/image/home/sedex.png') }}" alt="Sedex" class="img-fluid" style="width: 100px; height: auto">
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/image/home/halal.png') }}" alt="Halal" class="img-fluid" style="width: 100px; height: auto">
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/image/home/quality.png') }}" alt="Quality" class="img-fluid" style="width: 100px; height: auto">
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/image/home/brc.png') }}" alt="BRC" class="img-fluid" style="width: 100px; height: auto">
                                </div>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('assets/image/home/k3.png') }}" alt="K3" class="img-fluid" style="width: 100px; height: auto">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="manufacturing-capability" style="margin-top: 20px">
        <div class="container">
            <h2 style="font-size: 35px; color: #524A4E">MANUFACTURING CAPABILITY</h2>
            <div class="d-flex justify-content-center flex-wrap">
                <!-- Kolom untuk teks -->
                <div class="col-md-6 col-12 order-md-1 order-2">
                    <h4>WHO WE ARE</h4>
                    <p>Layanan konsumen Jewel adalah produsen terkemuka produk perawatan mulut
                        dan solusi kebersihan rumah tangga, dengan jangkauan di 50 negara dan jangkauan lebih dari 50
                        merek label.</p>
                </div>
                <!-- Kolom untuk gambar -->
                <div class="col-md-6 col-12 order-md-2 order-1 mb-4">
                    <img src="{{ asset('assets/image/home/india.png') }}" alt="India" class="img-fluid">
                </div>
            </div>
            <div class="d-flex justify-content-center flex-wrap mt-4">
                <!-- Kolom untuk gambar -->
                <div class="col-md-6 col-12 order-md-1 order-1 mb-4">
                    <img src="{{ asset('assets/image/home/ilmuan.png') }}" alt="Ilmuan" class="img-fluid">
                </div>
                <!-- Kolom untuk teks -->
                <div class="col-md-6 col-12 order-md-2 order-2">
                    <h4>WHAT WE MAKE</h4>
                    <p>Memanfaatkan yang terbaik dari alam untuk memberikan hasil terbaik adalah misi pribadi kami. Kami
                        menggabungkan bahan kandungan yang bermanfaat dengan ilmu pengetahuan dan teknologi yang inovatif.
                        Hasilnya? Produk-produk kelas dunia yang memberikan manfaat nyata.</p>
                </div>
            </div>
        </div>
    </div>





    <div class="company-profile">
        <div class="container">
            <h2 style="font-size: 35px; color:#524A4E; margin-top: 7%;">COMPANY PROFILE JDO</h2>
            <iframe src="https://drive.google.com/file/d/1F8Qonw4pU3NcsqQDFNsaQ4-siYjLFody/preview" style="max-width: 100%; width: 900px; height: 500px; max-height: 100%;" allow="autoplay; fullscreen" allowfullscreen></iframe>
        </div>
    </div>

    <div class="operational-excellence">
        <div class="container">
            <h2 style="font-size: 35px; color:#524A4E;">OPERATIONAL EXCELLENCE</h2>
            <div class="icons d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/image/home/otak.png') }}" alt="Otak" style="max-width: 8dvw;">
                </div>
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/image/home/jempol.png') }}" alt="Jempol" style="max-width: 8dvw;">
                </div>
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/image/home/daur.png') }}" alt="Daur" style="max-width: 8dvw;">
                </div>
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/image/home/grafik.png') }}" alt="Grafik" style="max-width: 8dvw;">
                </div>
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/image/home/berlian.png') }}" alt="Berlian" style="max-width: 8dvw;">
                </div>
            </div>
        </div>
    </div>
    <p>cobaa</p>

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


    @include('layouts.footer')
