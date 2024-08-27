@include('layouts.navbar')

@section('title')
 Address
@endsection

<!-- @push('styles')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
@endpush -->

@section('content')

<link rel="stylesheet" href="{{ asset('assets/css/adress.css') }}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">



<img src="{{asset('assets/image/Address/addrres.png')}}" alt="background" style="width: 1500px">

<!-- <div class="address-container">
    <img src="{{ asset('assets/image/address.png') }}" alt="background" class="address-background"> -->

   <div class="card-about container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="card p-4 d-flex justify-content-between align-items-start flex-md-row flex-column" style="background-color: #D9D9D9; width: 100%; height: 290px; padding: 30px; margin: 10 auto; max-width: 3000px;">
                <!-- REGISTERED OFFICE -->
                <div class="office-info d-flex align-items-start me-md-5 mb-3 mb-md-0" style="flex-grow: 1;">
                    <div class="icon-box p-2 me-3" style="background-color: #808000;">
                        <i class="bi bi-building-fill-gear" style="font-size: 2rem;"></i>
                    </div>
                    <div>
                    <h5>REGISTERED OFFICE</h5>
                    <p><i class="bi bi-geo-alt-fill"></i> 
                        <a href="https://www.google.com/maps?q=75M7+PPX,+Hira+Nagar,+Tandalja,+Vadodara,+Gujarat+390012,+India" 
                        style="color: black; text-decoration: none;"> 
                        SUBHAAG, B-15-16 Rahim Prak, Old Padra Road, Baroda - 390 105, Gujarat (INDIA)
                        </a>
                    </p>
                    <p><i class="bi bi-telephone-fill"></i> 
                        <a href="tel:+912652312803" style="color: black; text-decoration: none;">+91 265 2312803</a>
                    </p>
                    <p><i class="bi bi-envelope-fill"></i> 
                        <a href="mailto:info@jewelbrushes.com" style="color: black; text-decoration: none;">info@jewelbrushes.com</a>
                    </p>
                    <p><i class="bi bi-globe"></i> 
                        <a href="http://www.jewelbrushes.com" target="_blank" style="color: black; text-decoration: none;">www.jewelbrushes.com</a>
                    </p>
                </div>


                </div>

                <!-- FACTORY -->
                <div class="factory-info d-flex align-items-start" style="flex-grow: 1;">
                <div class="icon-box p-2 me-3" style="background-color: #808000;">
                    <i class="bi bi-ethernet" style="font-size: 2rem;"></i>
                </div>
                <div>
                    <h5>FACTORY</h5>
                    <p><i class="bi bi-geo-alt-fill"></i> 
                        <a href="https://www.google.com/maps?q=Jl.+Berbek+Industri+V+No.21,+Bebek,+Berbek,+Kec.+Waru,+Kabupaten+Sidoarjo,+Jawa+Timur+61256" 
                        style="color: black; text-decoration: none;">
                        JI. Berbek Industri V No.21, Bebek, Berbek, Kec. Waru, Kabupaten Sidoarjo, Jawa Timur 61256
                        </a>
                    </p>
                    <p><i class="bi bi-telephone-fill"></i> 
                        <a href="tel:+6282298115885" style="color: black; text-decoration: none;">+62 822 9811 5885</a>
                    </p>
                    <p><i class="bi bi-envelope-fill"></i> 
                        <a href="mailto:jeweldyna.oralcare@gmail.com" style="color: black; text-decoration: none;">jeweldyna.oralcare@gmail.com</a>
                    </p>
    </div>
</div>

            </div>
        </div>
    </div>
</div>


<div id="map-container" style="height: 600px; width: 100%; margin-top: 60px;">
    <iframe id="map-frame" src="" style=" width: 90%; height: 100%; margin-left: 60px" allowfullscreen="" loading="lazy"></iframe>
</div>

<script>
    
    function setActiveButton(buttonId, mapUrl) {     
        document.getElementById('map-frame').src = mapUrl;
    } 
    setActiveButton('plant1', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.082801903194!2d112.75893277404224!3d-7.344598672248897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb2a90c1d593%3A0xeca0a15f3daee527!2sPT.%20Rapid%20Plast%20Indonesia%20Plant%202!5e0!3m2!1sid!2sid!4v1724058391552!5m2!1sid!2sid');
</script>
@include('layouts.footer')