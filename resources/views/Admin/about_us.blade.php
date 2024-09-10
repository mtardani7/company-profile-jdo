@include('layouts.navbar_admin')

@section('title')
    About Us
@endsection

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/admin/about_us_admin.css') }}">

<div id="preloader">
    <img src="{{ '/assets/image/logo.png' }}" alt="Loading...">
</div>

<img src="{{ asset('assets/image/AboutUs/about_us.png') }}" alt="background" style="width: 100%; padding-top: 65px;">

<div class="teks fade-in-up">
    <h1>Our Story</h1>
    <img src="{{ asset('assets/image/AboutUs/kerja_sama.jpeg')}}" alt="kerja_sama" class="img-fluid mx-auto d-block" style="max-width: 100%; width: 845px;">
</div>

<div class="card-about container text-center fade-in-up">
    <div class="row align-items-center">
        <div class="col-12 col-md-6 mb-4">
            <div class="card text-start" style="border-radius: 10px; overflow: hidden;">
                <div class="card-body">
                    <p class="card-text" style="word-wrap: break-word; overflow-wrap: break-word; hyphens: auto; font-size: 22px;">
                        Established in 2019, PT Jewel Dyna Oralcare (“JDO”) is a joint venture company of Dynapack Asia Pte Ltd (Singapore) (“Dynapack”) and Jewel Consumer Care Co. Ltd (India) (“JCC”)
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 mb-4 fade-in-up">
            <div class="card text-start" style="border-radius: 10px; overflow: hidden;">
                <div class="card-body">
                    <h4 class="card-title">Mission:</h4>
                    <p class="card-text" style="word-wrap: break-word; overflow-wrap: break-word; hyphens: auto;">
                        “To become the leading partner in providing plastic oral care solutions for our customers in Indonesia”
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="teks fade-in-up">
    <h1>Our Shareholders</h1>
</div>

<div class="jawel-da container text-center fade-in-up">
    <div class="row align-items-center">
      <div class="col">
        <img src="{{ asset('assets/image/AboutUs/jawel.png')}}" alt="kerja_sama" style="margin-right: 70px; width: 260px; height: 160">
      </div>
      <div class="col">
        <div class="card text-start" style="border-radius: 10px">
            <div class="card-jawel">
                <p class="card-text">
                    <ul>
                        <li>
                            Established in 1993, JCC has grown to become one of the largest oral care manufacturers in Asia with over 3 billion products sold
                        </li>
                        <li>
                            Headquartered in Baroda, Gujarat, India with 5 global offices in India, United Kingdom, United States, Australia, and Indonesia
                        </li>
                        <li>
                            Trusted partners for oral care and hygiene solutions for multi-national brands
                        </li>
                    </ul>
                </p>
            </div>
        </div>
      </div>
    </div>
</div>

<div class="jawel-da container text-center fade-in-up">
    <div class="row align-items-center">
      <div class="col">
        <div class="card text-start">
            <div class="card-jawel">
                <p class="card-text">
                    <ul>
                        <li>
                            Established in 1993, JCC has grown to become one of the largest oral care manufacturers in Asia with over 3 billion products sold
                        </li>
                        <li>
                            Headquartered in Baroda, Gujarat, India with 5 global offices in India, United Kingdom, United States, Australia, and Indonesia
                        </li>
                        <li>
                            Trusted partners for oral care and hygiene solutions for multi-national brands
                        </li>
                    </ul>
                </p>
            </div>
        </div>
      </div>
      <div class="col fade-in-up">
        <img src="{{ asset('assets/image/AboutUs/dynapack_asia.png')}}" alt="kerja_sama" style="margin-left: 70px; width: 260px; height: 160">
      </div>
    </div>
</div>

<div class="teks fade-in-up">
    <h1>Management Team</h1>
</div>
<div class="card-body-profile fade-in-up">
    <div class="card-body2">
        <div class="profile-1 container text-center" style="margin-top: 250px"> 
            <ul class="horizontal-list">
                <li>
                    <div class="img-container">
                        <img src="{{ asset('assets/image/AboutUs/dynapack_asia.png') }}" alt="kerja_sama" class="img-circle">
                        <h4 class="img-caption">Loe Leo</h4>
                        <p style="color: black; margin-bottom: 0;">Posisi</p>
                        <p style="color: black; margin-top: -5px;">Pengalaman</p>
                    </div>
                </li>
                <li>
                    <div class="img-container">
                        <img src="{{ asset('assets/image/AboutUs/dynapack_asia.png') }}" alt="kerja_sama" class="img-circle">
                        <h4 class="img-caption">Rusher</h4>
                        <p style="color: black; margin-bottom: 0;">Posisi</p>
                        <p style="color: black; margin-top: -5px;">Pengalaman</p>
                    </div>
                </li>
                <li>
                    <div class="img-container">
                        <img src="{{ asset('assets/image/AboutUs/dynapack_asia.png') }}" alt="kerja_sama" class="img-circle">
                        <h4 class="img-caption">Lorem Ipsum</h4>
                        <p style="color: black; margin-bottom: 0;">Posisi</p>
                        <p style="color: black; margin-top: -5px;">Pengalaman</p>
                    </div>
                </li>
            </ul>
        </div> 
        <div class="profile-2 container text-center"> 
            <ul class="horizontal-list" style="margin-top: 20px">
                <li>
                    <div class="img-container">
                        <img src="{{ asset('assets/image/AboutUs/dynapack_asia.png') }}" alt="kerja_sama" class="img-circle">
                        <h4 class="img-caption">Smith Storng</h4>
                        <p style="color: black; margin-bottom: 0;">Posisi</p>
                        <p style="color: black; margin-top: -5px;">Pengalaman</p>
                    </div>
                </li>
                <li>
                    <div class="img-container">
                        <img src="{{ asset('assets/image/AboutUs/dynapack_asia.png') }}" alt="kerja_sama" class="img-circle">
                        <h4 class="img-caption">King Rose</h4>
                        <p style="color: black; margin-bottom: 0;">Posisi</p>
                        <p style="color: black; margin-top: -5px;">Pengalaman</p>
                    </div>
                </li>
                <li>
                    <div class="img-container">
                        <img src="{{ asset('assets/image/AboutUs/dynapack_asia.png') }}" alt="kerja_sama" class="img-circle">
                        <h4 class="img-caption">Jhon Smith</h4>
                        <p style="color: black; margin-bottom: 0;">Posisi</p>
                        <p style="color: black; margin-top: -5px;">Pengalaman</p>
                    </div>
                </li>
            </ul>
        </div>                       
    </div>
</div>

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