@include('layouts.navbar')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">

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
            <div class="row">
                <div class="column">
                    <div>
                        <h2 style="padding-top: 50px; font-size: 35px; color: #524A4E">QUALITY PROMISE</h2>
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
                <div class="column">
                    <div class="certifications">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col">
                                    <img src="{{ asset('assets/image/home/kemenkes.png') }}" alt="Kemenkes">
                                </div>
                                <div class="col">
                                    <img src="{{ asset('assets/image/home/sedex.png') }}" alt="Sedex">
                                </div>
                                <div class="col">
                                    <img src="{{ asset('assets/image/home/halal.png') }}" style="padding-bottom: 20px"
                                        alt="Halal">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <img src="{{ asset('assets/image/home/quality.png') }}" alt="Quality">
                                </div>
                                <div class="col">
                                    <img src="{{ asset('assets/image/home/brc.png') }}" alt="BRC">
                                </div>
                                <div class="col">
                                    <img src="{{ asset('assets/image/home/k3.png') }}" style="width: 150px" alt="K3">
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
            <div class="row">
                <div class="column">
                    <h4>WHO WE ARE</h4>
                    <p>Layanan konsumen Jewel adalah produsen terkemuka produk perawatan mulut
                        dan solusi kebersihan rumah tangga, dengan jangkauan di 50 negara dan jangkauan lebih dari 50
                        merek
                        label.</p>
                </div>
                <div class="column">
                    <img src="{{ asset('assets/image/home/india.png') }}" alt="India">
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <img src="{{ asset('assets/image/home/ilmuan.png') }}" alt="Ilmuan">
                </div>
                <div class="column">
                    <h4>WHAT WE MAKE</h4>
                    <p>Memanfaatkan yang terbaik dari alam untuk memberikan hasil terbaik adalah misi pribadi kami. Kami
                        menggabungkan bahan kandungan yang bermanfaat dengan ilmu pengetahuan dan teknologi yang
                        inovatif.
                        Hasilnya? Produk-produk kelas dunia
                        yang memberikan manfaat nyata. </p>
                </div>
            </div>
        </div>
    </div>

    <div class="company-profile">
        <div class="container">
            <h2 style="font-size: 35px; color:#524A4E; margin-top: 7%;">COMPANY PROFILE JDO</h2>
            <iframe src="https://drive.google.com/file/d/1F8Qonw4pU3NcsqQDFNsaQ4-siYjLFody/preview" width="900"
                height="500" allow="autoplay; fullscreen" allowfullscreen>
            </iframe>
        </div>
    </div>

    <div class="operational-excellence">
        <div class="container">
            <h2 style="font-size: 35px; color:#524A4E;">OPERATIONAL EXCELLENCE</h2>
            <div class="icons d-flex justify-content-between flex-wrap">
                <img src="{{ asset('assets/image/home/otak.png') }}" alt="Otak">
                <img src="{{ asset('assets/image/home/jempol.png') }}" alt="Jempol">
                <img src="{{ asset('assets/image/home/daur.png') }}" alt="Daur">
                <img src="{{ asset('assets/image/home/grafik.png') }}" alt="Grafik">
                <img src="{{ asset('assets/image/home/berlian.png') }}" alt="Berlian">
            </div>
        </div>
    </div>
    <p>cobaa</p>


    @include('layouts.footer')
