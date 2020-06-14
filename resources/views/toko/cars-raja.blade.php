@extends('layout.app')

@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Cars			
                </h1>	
                <p class="text-white link-nav"><a href="{{ route('home')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ route('cars-raja')}}"> Cars</a></p>
            </div>											
        </div>
    </div>
</section>
<!-- End banner Area -->	

<!-- Start model Area -->
<section class="model-area section-gap" id="cars">
    <div class="container">
        <div class="row d-flex justify-content-center pb-40">
            <div class="col-md-8 pb-40 header-text">
                @foreach ($nama as $name)
                <h1 class="text-center pb-10">{{$name->nama_toko}}</h1>
                @endforeach
                <p class="text-center">
                    Silahkan Pilih Mobil Yang Ingin Anda Rental 
                </p>
            </div>
        </div>				
        <div class="active-model-carusel">
            <div class="row align-items-center single-model item">
                <div class="col-lg-6 model-left">
                    <div class="title justify-content-between d-flex">
                        <h2 class="mt-20">Toyota Avanza</h2>
                    </div>
                    <h3>Rp 15juta/hari</h3>
                    <br>
                    <a class="text-uppercase primary-btn" href="{{ route('detail-avanza3')}}">Book This Car Now</a>
                </div>

                <div class="col-lg-6 model-right">
                    <img class="img-fluid" src="img//mobil/avanza3.jpg" alt="">
                </div>
            </div>
            <div class="row align-items-center single-model item">
                <div class="col-lg-6 model-left">
                    <div class="title justify-content-between d-flex">
                        <h2 class="mt-20">Suzuki Ertiga</h2>
                    </div>
                    <h3>Rp 20juta/hari</h3>
                    <br>
                    <a class="text-uppercase primary-btn" href="{{ route('detail-ertiga2')}}">Book This Car Now</a>
                </div>

                <div class="col-lg-6 model-right">
                    <img class="img-fluid" src="img/mobil/ertiga2.jpg" alt="">
                </div>
            </div>
            <div class="row align-items-center single-model item">
                <div class="col-lg-6 model-left">
                    <div class="title justify-content-between d-flex">
                        <h2 class="mt-20">Suzuki Expander</h2>
                    </div>
                    <h3>Rp 25juta/hari</h3>
                    <br>
                    <a class="text-uppercase primary-btn" href="{{ route('detail-expander2')}}">Book This Car Now</a>
                </div>

                <div class="col-lg-6 model-right">
                    <img class="img-fluid" src="img/mobil/expander2.jpg" alt="">
                </div>
            </div>												
        </div>
    </div>	
</section>
<!-- End model Area -->			

<!-- Start callaction Area -->
<section class="callaction-area relative section-gap">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h1 class="text-white">Experience Great Support</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                </p>
                <a class="callaction-btn text-uppercase" href="#">Reach Our Support Team</a>	
            </div>
        </div>
    </div>	
</section>
<!-- End callaction Area -->				
@endsection
