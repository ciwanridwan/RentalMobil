<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/elements/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
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
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/nice-select.css">          
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

      <header id="header" id="home">
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
              <div id="logo">
                <a href="{{ route('home')}}"><img src="img/logo.png" alt="" title="" /></a>
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
  </div>
</header><!-- #header -->

<!-- start banner Area -->
<section class="banner-area relative" id="home">    
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Cars            
                </h1>   
                <p class="text-white link-nav"><a href="{{ route('home')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{('cars.artharent')}}"> Cars</a></p>
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
                <h1 class="text-center pb-10">Artharent Car</h1>
                <p class="text-center">
                    Silahkan Pilih Mobil Yang Ingin Anda Rental 
                </p>
            </div>
        </div>              
        <div class="active-model-carusel">
            <div class="row align-items-center single-model item">
                <div class="col-lg-6 model-left">
                    <div class="title justify-content-between d-flex">
                        <h2 class="mt-20">Toyota Fortuner</h2>
                    </div>
                    <h3>Rp 15juta/hari</h3>
                    <br>
                    <a class="text-uppercase primary-btn" href="{{ route('detail-fortuner2')}}">Book This Car Now</a>
                </div>

                <div class="col-lg-6 model-right">
                    <img class="img-fluid" src="img/mobil/fortuner2.jpg" alt="">
                </div>
            </div>
            <div class="row align-items-center single-model item">
                <div class="col-lg-6 model-left">
                    <div class="title justify-content-between d-flex">
                        <h2 class="mt-20">Toyota Yaris</h2>
                    </div>
                    <h3>Rp 10juta/hari</h3>
                    <br>
                    <a class="text-uppercase primary-btn" href="{{ route('detail-yaris')}}">Book This Car Now</a>
                </div>

                <div class="col-lg-6 model-right">
                    <img class="img-fluid" src="img/mobil/yaris.jpg" alt="">
                </div>
            </div>
            <div class="row align-items-center single-model item">
                <div class="col-lg-6 model-left">
                    <div class="title justify-content-between d-flex">
                        <h2 class="mt-20">Honda Jazz</h2>
                    </div>
                    <h3>Rp 13,5juta/hari</h3>
                    <br>
                    <a class="text-uppercase primary-btn" href="{{ route('detail-jazz')}}">Book This Car Now</a>
                </div>

                <div class="col-lg-6 model-right">
                    <img class="img-fluid" src="img/mobil/jazz.jpg" alt="">
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

<!-- start footer Area -->      
<footer class="footer-area section-gap">
    <div class="container">
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
