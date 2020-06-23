@extends('layout.app')

@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>	
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-7 col-md-6 ">
                <!-- <h6 class="text-white ">the Royal Essence of Journey</h6> -->
                <h1 class="text-white text-uppercase">
                    Informasi Seputar Toko Rental Mobil Ada Disini				
                </h1> <br>
                        <!-- <p class="pt-20 pb-20 text-white">
                            Informasi Seputar Toko Rental Mbil Ada Disini
                        </p> -->
                        <a href="{{ route('about')}}" class="primary-btn text-uppercase">Tentang Kami</a>
                    </div>

                </div>
            </div>					
        </section>

        <!-- Start fact Area -->
        <section class="facts-area section-gap">
            <div class="container">
                <div class="row">

                    <div class="col single-fact">
                        <h1 class="counter">Silahkan Liat Toko Rental Mobil Dibawah Ini!</h1>
                    </div>

                </div>
            </div>	
        </section>
        <!-- end fact Area -->							

        <!-- Start reviews Area -->
        <section class="reviews-area section-gap" id="review">
            <div class="container">
                @if ($status == 1)
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 pb-40 header-text text-center">
                        <h1>Daftar Toko Rental Yang Tersedia.</h1>
                        <p class="mb-10 text-center">
                        </p>
                    </div>
                </div>
                                
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <div class="single-review">
                            @foreach ($data->where('id', 1) as $p)
                            <a href="{{ route('cars-raja')}}">
                                <img src="{{ asset('storage/toko/' . $p->logo_toko) }}" alt="{{ $p->nama_toko }}" width="400px" class="img-fluid">
                                <h4>{{$p->nama_toko}}</h4>
                                <p>
                                    Address :{{$p->alamat}} <br>
                                    Phone/Wa : {{$p->nomor_hp}} <br>
                                    Web : <a href="{{$p->websites}}"> {{$p->websites}}</a> <br>
                                    <br> 
                                    {{$p->deskripsi}} 
                                </p>
                            </a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="single-review">
                            @foreach ($data->where('id', 2) as $a)
                            <a href="{{ route('cars-platinum')}}">
                                <img src="{{ asset('storage/toko/' . $a->logo_toko) }}" class="img-fluid" alt="{{$a->nama_toko}}" width="400px">
                                <h4>{{$a->nama_toko}}</h4>
                                <p>
                                    Address : {{$a->alamat}} <br>
                                    Phone/Wa : {{$a->nomor_hp}} <br>
                                    Web : <a href="{{$a->websites}}">{{$a->websites}}</a>
                                    <br>
                                    <br>
                                    {{$a->deskripsi}}
                                </p>
                            </a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="single-review">
                            @foreach ($data->where('id', 3) as $w)
                            <a href="{{ route('cars-artharent')}}">
                                <img src="{{ asset('storage/toko/' . $w->logo_toko) }}" alt="{{$w->nama_toko}}" width="400px" class="img-fluid">
                                <h4>{{$w->nama_toko}}</h4>
                                <p>
                                    Address : {{$w->alamat}} <br>
                                    No Telp/WA : {{$w->nomor_hp}} <br>
                                    Web : <a href="{{$w->websites}}">{{$w->websites}}</a>
                                    <br>
                                    <br>
                                    {{$w->deskripsi}}
                                </p>
                            </a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            @endforeach
                        </div>
                    </div>							
                    <div class="col-lg-6 col-md-8">
                        <div class="single-review">
                            @foreach ($data->where('id', 4) as $k)
                            <a href="{{ route('cars-cakra')}}">
                                <img src="{{ asset('storage/toko/' . $k->logo_toko) }}" alt="{{$k->nama_toko}}" width="400px" class="img-fluid">
                                <h4>{{$k->nama_toko}}</h4>
                                <p>
                                    Address : {{$k->alamat}} <br>
                                    No Telp/WA : {{$k->nomor_hp}} <br>
                                    Web : <a href="{{$k->websites}}"> {{$k->websites}}</a>
                                    <br> <br>
                                    {{$k->deskripsi}}
                                </p>
                            </a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="single-review">
                            @foreach ($data->where('id', 5) as $r)
                            <a href="{{ route('cars-bintangmas')}}">
                                <img src="{{ asset('storage/toko/' . $r->logo_toko) }}" alt="{{$r->nama_toko}}" width="400px" class="img-fluid">
                                <h4>{{$r->nama_toko}}</h4>
                                <p>
                                    Alamat : {{$r->alamat}} <br>
                                    No Telp/WA : {{$r->nomor_hp}} <br>
                                    Web : <a href="{{$r->websites}}"> {{$r->websites}}</a> <br>
                                    <br>
                                    {{$r->deskripsi}}
                                </p>
                            </a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="single-review">
                            @foreach ($data->where('id', 6) as $y)
                            <a href="{{ route('cars-keken')}}">
                                <img src="{{ asset('storage/toko/' . $y->logo_toko) }}" alt="$y->nama_toko" width="400px" class="img-fluid">
                                <h4>{{$y->nama_toko}}</h4>
                                <p>
                                    Alamat : {{$y->alamat}} <br>
                                    No Telp/WA : {{$y->nomor_hp}} <br>
                                    Web : <a href="{{$y->websites}}">{{$y->websites}}</a> 
                                    <br>
                                    <br>
                                    {{$y->deskripsi}}
                                </p>
                            </a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @else
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 pb-40 header-text text-center">
                            <h1>Toko belum tersedia</h1>
                            <p class="mb-10 text-center">
                            </p>
                        </div>
                    </div>
                    @endif									
                </div>
            </div>	
        </section>
        <!-- End reviews Area -->
        @endsection
        



