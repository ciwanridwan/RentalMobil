@extends('layout.app')

@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Tentang Kami				
                </h1>	
                <p class="text-white link-nav"><a href="{{ route('home')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ route('about')}}"> Tentang Kami</a></p>
            </div>											
        </div>
    </div>
</section>
<!-- End banner Area -->	

<!-- Start home-about Area -->
<section class="home-about-area" id="about">
    <div class="container-fluid">				
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 no-padding home-about-left">
                <img class="img-fluid" src="img/about-img.jpg" alt="">
            </div>
            <div class="col-lg-6 no-padding home-about-right">
                <h1>Website Informasi <br>
                Rental Mobil</h1>
                <p>
                    <span>We are here to listen from you deliver exellence</span>
                </p>
                <p>
                Website ini ialah website informasi tentang toko rental mobil yang tersedia di daerah Jabodetabek khususnya daerah Kota Jakarta Selatan.
                </p>
                <a class="text-uppercase primary-btn" href="{{ route('about')}}">Lebih Detail</a>
            </div>
        </div>
    </div>	
</section>
<!-- End home-about Area -->	

<!-- Start feature Area -->
<section class="feature-area section-gap" id="service">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 pb-40 header-text">
                <h1>Seputar Kami</h1>
                <!-- <p>
                    Who are in extremely love with eco friendly system.
                </p> -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <h4><span class="lnr lnr-user"></span>Toko Rental</h4>
                    <p>
                        Berbagai macam toko rental mobil yang kami sediakan informasinya.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <h4><span class="lnr lnr-license"></span>Mobil</h4>
                    <p>
                        Berbagai macam mobil yang terdapat di beberapa masing masing toko rental.
                    </p>								
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <h4><span class="lnr lnr-phone"></span>Support</h4>
                    <p>
                        Kami mensupport para client untuk berminat menyewa mobil di toko rental mobil yang telah informasikan di website ini.
                    </p>								
                </div>
            </div>

        </div>
    </div>	
</section>
<!-- End feature Area -->											
@endsection

