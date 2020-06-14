@extends('layout.app')

@section('content')
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>	
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-7 col-md-6 ">
                <h1 class="text-white text-uppercase">
                    Silahkan Registrasi Akun sebagai admin				
                </h1>
            </div>
            <div class="col-lg-5  col-md-6 header-right">
                <h4 class="text-white pb-30">Register your account</h4>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br/>
                @endif
                <form class="form" role="form" autocomplete="off" method="post" action="{{ route('store-register')}}">
                    @csrf
                    <div class="from-group">
                        <input class="form-control txt-field" type="text" name="username" placeholder="Username">
                        <input class="form-control txt-field" type="email" name="email" placeholder="Email anda">
                        <input class="form-control txt-field" type="password" name="password" placeholder="Password">
                        <input class="form-control txt-field" type="password" name="password_confirmation" placeholder="Confirmation Password">
                    </div>							    
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase">Register</button>
                            </div>
                        </div>
                    </form>
                </div>											
            </div>
        </div>					
    </section>
    <!-- End banner Area -->		
@endsection
   



