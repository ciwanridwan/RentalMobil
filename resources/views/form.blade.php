@extends('layout.app')

@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>	
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-7 col-md-6 ">
                <h1 class="text-white text-uppercase">
                    Silahkan Daftar Untuk Merental Mobil Yang Sudah Disediakan				
                </h1>
                <a href="{{ route('home')}}" class="primary-btn text-uppercase">Lihat Rental</a>
            </div>
            <div class="col-lg-5  col-md-6 header-right">
                <h4 class="text-white pb-30">Booking Sekarang</h4>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br/>
                @endif
                <form class="form" role="form" autocomplete="off" method="post" action="{{ route('store')}}">
                    @csrf
                    <div class="from-group">
                        <input class="form-control txt-field" type="text" name="nama" placeholder="Nama anda">
                        <input class="form-control txt-field" type="email" name="email" placeholder="Email anda">
                        <input class="form-control txt-field" type="numeric;" name="nomor_hp" placeholder="Nomor Handphone">
                    </div>
                    <div class="form-group">
                        <!-- <div class="col-md-6 wrap-right"> -->
                            <div class="input-group dates-wrap">                                          
                                <input id="datepicker" class="dates form-control" name="mulai_sewa" id="exampleAmount" placeholder="Mulai Sewa">                        
                                <div class="input-group-prepend">
                                    <span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
                                </div>											
                            </div>
                            <!-- </div> -->
                        </div>
                        <div class="form-group">
                            <div class="input-group dates-wrap">                                              
                                <input id="datepicker2" class="dates form-control" name="akhir_sewa" id="exampleAmount" placeholder="Akhir Sewa" >                        
                                <div class="input-group-prepend">
                                    <span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
                                </div>											
                            </div>
                        </div>
                        <div class="from-group">
                            <input class="form-control txt-field" type="text" name="mobil" placeholder="Mobil rental">
                        </div>							    
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase">Confirm Car Booking</button>
                            </div>
                        </div>
                    </form>
                </div>											
            </div>
        </div>					
    </section>
    <!-- End banner Area -->		
@endsection
   



