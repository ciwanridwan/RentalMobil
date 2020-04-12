<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Car Rentals</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="css/linearicons.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/nice-select.css">					
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">			
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

      <header id="header" id="home">
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
              <div id="logo">
                <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                  <li class="menu-active"><a href="{{ route('home')}}">Home</a></li>
                  <li><a href="{{ route('about')}}">About</a></li>
                  <li><a href="">Cars</a>
                      <ul>
                          <li><a href="{{ route('cars-raja')}}"> Raja Sewa Mobil </a></li>
                          <li><a href="{{ route('cars-platinum')}}">Platinum Rent Car</a></li>
                          <li><a href="{{ route('cars-artharent')}}">Artharent Car</a></li>
                          <li><a href="{{ route('cars-cakra')}}">Cakra Rental Mobil</a></li>
                          <li><a href="{{ route('cars-bintangmas')}}">Bintangmas Rent Car</a></li>
                          <li><a href="{{ route('cars-keken')}}">Keken Rent Car</a></li>
                      </ul>
                  </li>	
                  <li><a href="{{ route('blog-home')}}">Blog</a></li>	
                  <li><a href="{{ route('contact')}}">Contact</a></li>				          
              </ul>
          </nav><!-- #nav-menu-container -->		    		
      </div>
      @yield('header')
  </div>
</header><!-- #header -->


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
                            <a href="{{ route('cars-raja')}}">
                                <img src="img/rajasewamobil.jpg" alt="car" width="400px" class="img-fluid">
                                <h4>Raja Sewa Mobil</h4>
                                <p>
                                    Address :Jl. Tebet Barat II E No.2 Rt 04 Rw 02, Tebet Bar Kec. Tebet Kota Jakarta Selatan <br>
                                    Phone/Wa : 082119198100 <br>
                                    Web : <a href="https/rajasewamobil.com"> https://rajasewamobil.com</a> <br>
                                    <br> 
                                    Penyedia jasa layanan sewa mobil, professional, terpercaya serta bertanggung jawab penuh akan keselamatan 
                                    dan kenyamanan penumpang. <br>
                                    Tersedia Avanza, Ertiga, Expander dan lain sebagainya.  
                                </p>
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
                            <a href="{{ route('cars-platinum')}}">
                                <img src="img/platinum.jpg" class="img-fluid" alt="car" width="400px">
                                <h4>Platinum Rent Car</h4>
                                <p>
                                    Address : Jl. Raya Pondok Pinang no. 88 Jakarta Selatan <br>
                                    Phone/Wa : 081313394241 <br>
                                    Web : <a href="https://kekenrentcar.com">https://kekenrentcar.com</a>
                                    <br>
                                    <br>
                                    Platinum rent car adalah sebuah jasa transportasi yang dibawahi CV Platinum Transport, area layanan meliputi wilayah JABODETABEK. <br>
                                    Platinum Rent Car menyediakan berbagai macam pilihan jenis unit mobil, dari mulai jenis Avanza, Xenia, Xpander dan lain lain masih banyak lagi.
                                </p>
                            </a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="single-review">
                            <a href="{{ route('cars-artharent')}}">
                                <img src="img/artharent-car.jpg" alt="car" width="400px" class="img-fluid">
                                <h4>Artharent Car</h4>
                                <p>
                                    Address : Jl. Poltangan Raya Pasar Minggu <br>
                                    No Telp/WA : 08138174882 <br>
                                    Web : <a href="https://artharentcar.com">https://artharentcar.com</a>
                                    <br>
                                    <br>
                                    Artharent Car adalah rental yg menyediakan berbagai macam unit kendaaraan dari city car sampai premium car.<br>
                                    Artharent Car menyediakan berbagai macam unit mobil yaitu Toyota Fortuner, Toyota Yaris, Honda Jazz dan lain sebagainya.
                                </p>
                            </a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                        </div>
                    </div>							
                    <div class="col-lg-6 col-md-8">
                        <div class="single-review">
                            <a href="{{ route('cars-cakra')}}">
                                <img src="img/cakracar.jpg" alt="car" width="400px" class="img-fluid">
                                <h4>Cakra Rental Mobil</h4>
                                <p>
                                    Address : Jl. Rawabambu 1B No. 39 Rt 08 Rw 06 Pasar Minggu. <br>
                                    No Telp/WA : 081617881711 <br>
                                    Web : <a href="http://chackrarentalmobi.com"> http://chackrarentalmobi.com</a>
                                    <br> <br>
                                    Menyediakan berbagai jenis unit mobil yang family dan pribadi seperti Kijang Inova, Toyota Rush, Toyota Fortuner dan lain sebagainya.
                                </p>
                            </a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="single-review">
                            <a href="{{ route('cars-bintangmas')}}">
                                <img src="img/bintangmas.jpg" alt="car" width="400px" class="img-fluid">
                                <h4>Bintangmas Rent Car</h4>
                                <p>
                                    Alamat : Jl. Serdang Baru 7a No. 1 Rt 03 Rw 05 Kel. Serdang Kec. Kemayoran <br>
                                    No Telp/WA : 081928889222 <br>
                                    Web : <a href="https://www.bintangmasrent.net"> https://www.bintangmasrent.net</a> <br>
                                    <br>
                                    Bintangmas Rent Car menyediakan berbagai macam rental mobil baik untuk keperluan pribadi maupun kantor. Kami Menyediakan berbagai jenis mobil seperti Toyota Alpard, Suzuki Ertiga, Honda Jazz dan lain lain.
                                </p>
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
                            <a href="{{ route('cars-keken')}}">
                                <img src="img/keken.jpeg" alt="car" width="400px" class="img-fluid">
                                <h4>Keken Rent Car</h4>
                                <p>
                                    Alamat : Jl. Kecapi Raya No 74.spi 79 Jagakarsa Kota Jakarta Selatan <br>
                                    No Telp/WA : 087786605998 <br>
                                    Web : <a href="https://kekenrentcar.com">https://kekenrentcar.com</a> 
                                    <br>
                                    <br>
                                    Penyedia jasa layanan rental mobil professional dan terpercaya serta bertanggung jawab. All varian Car Avanza, Ertiga, Ayla, dan lain sebagainya.
                                </p>
                            </a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                    </div>												
                </div>
            </div>	
        </section>
        <!-- End reviews Area -->

        <!-- start footer Area -->		
        <footer class="footer-area section-gap">
            <div class="container">
                @yield('footer-area')
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Quick links</h6>
                            <ul>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Brand Assets</a></li>
                                <li><a href="#">Investor Relations</a></li>
                                <li><a href="#">Terms of Service</a></li>
                            </ul>								
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Features</h6>
                            <ul>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Brand Assets</a></li>
                                <li><a href="#">Investor Relations</a></li>
                                <li><a href="#">Terms of Service</a></li>
                            </ul>								
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Resources</h6>
                            <ul>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Brand Assets</a></li>
                                <li><a href="#">Investor Relations</a></li>
                                <li><a href="#">Terms of Service</a></li>
                            </ul>								
                        </div>
                    </div>												
                    <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                        <div class="single-footer-widget">
                            <h6>Follow Us</h6>
                            <p>Let us be social</p>
                            <div class="footer-social d-flex align-items-center">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-behance"></i></a>
                            </div>
                        </div>
                    </div>							
                    <div class="col-lg-4  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h6>Newsletter</h6>
                            <p>Stay update with our latest</p>
                            <div class="" id="mc_embed_signup">
                                <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
                                    <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
                                    <button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
                                    <div style="position: absolute; left: -5000px;">
                                        <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                                    </div>

                                    <div class="info"></div>
                                </form>
                            </div>
                        </div>
                    </div>	
                    <p class="mt-50 mx-auto footer-text col-lg-12">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>											
                </div>
            </div>
        </footer>	
        <!-- End footer Area -->		

        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/vendor/bootstrap.min.js"></script>			
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>			
        <script src="js/easing.min.js"></script>			
        <script src="js/hoverIntent.js"></script>
        <script src="js/superfish.min.js"></script>	
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>	
        <script src="js/owl.carousel.min.js"></script>			
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.nice-select.min.js"></script>	
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>					
        <script src="js/parallax.min.js"></script>		
        <script src="js/mail-script.js"></script>	
        <script src="js/main.js"></script>	
    </body>
    </html>



