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
                <p class="text-white link-nav"><a href="{{ route('home')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ route('cars-bintangmas')}}"> Cars</a></p>
            </div>                                          
        </div>
    </div>
</section>
<!-- End banner Area -->

<section class="reviews-area section-gap" id="review">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8 pb-40 header-text text-center">
                <h1>Daftar Mobil Yang Tersedia</h1>
                <p class="mb-10 text-center">
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-8">
                <div class="single-review">

                    <a href="{{ route('detail-alphard')}}">
                        <img src="img/mobil/alphard.jpg" alt="alphard" width="400px" class="img-fluid">
                        <h3>Rp 25juta/hari</h3> <br>

                        <h4>Toyota Alphard</h4>
                    </a>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>

                </div>
            </div>

            <div class="col-lg-6 col-md-8">
                <div class="single-review">

                    <a href="{{ route('detail-jazz2')}}">
                        <img src="img/mobil/jazz2.jpg" alt="jazz2" width="400px" class="img-fluid">
                        <h3>Rp 15juta/hari</h3> <br>
                        
                        <h4>Honda Jazz</h4>
                    </a>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-8">
                <div class="single-review">

                    <a href="{{ route('detail-ertiga3')}}">
                        <img src="img/mobil/ertiga3.jpg" alt="ertiga3" width="400px" class="img-fluid">
                        <h3>Rp 20juta/hari</h3> <br>
                        
                        <h4>Suzuki Ertiga</h4>

                    </a>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>

                </div>
            </div>              
        </div>
    </div>  
</section>               
@endsection

