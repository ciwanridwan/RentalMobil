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
								Blog				
							</h1>	
							<p class="text-white link-nav"><a href="{{ route('home')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{ route('blog-home')}}"> Blog </a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	
			
			<!-- Start blog-posts Area -->
			<section class="blog-posts-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 post-list blog-post-list">
							<div class="single-post">
								<img class="img-fluid" src="img/mobil/expander.jpg" alt="" class="img-fluid">
								<ul class="tags">
									<li><a href="#">Car, </a></li>
									<li><a href="#">Sport, </a></li>
									<li><a href="#">Automotif</a></li>
								</ul>
								<a href="{{ route('blog-home')}}">
									<h1>
										Suzuki Expander
									</h1>
								</a>
								<p>
									Mobil ini banyak peminatnya loh, gahanya membeli, tetapi banyak juga yang merental mobil ini di toko rental yang sudah kami informasikan.
								</p>
								<div class="bottom-meta">
									<div class="user-details row align-items-center">
										<div class="comment-wrap col-lg-6">
											<ul>
												<li><a href="#"><span class="lnr lnr-heart"></span>	4 likes</a></li>
												<li><a href="#"><span class="lnr lnr-bubble"></span> 06 Comments</a></li>
											</ul>
										</div>
										<div class="social-wrap col-lg-6">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
												<li><a href="#"><i class="fa fa-behance"></i></a></li>
											</ul>
											
										</div>
									</div>
								</div>
							</div>
							<div class="single-post">
								<img class="img-fluid" src="img/mobil/fortuner.jpg" alt="" class="img-fluid">
								<ul class="tags">
									<li><a href="#">Art, </a></li>
									<li><a href="#">Sport, </a></li>
									<li><a href="#">Automotif</a></li>
								</ul>
								<a href="{{ route('blog-home')}}">
									<h1>
										Fortuner
									</h1>
								</a>
								<p>
									Mobil ini, ialah pesaing dari Mitsubitsi Pajero, dan salah satu mobil yang paling banyak di sukai di indonesia.
								</p>
								<div class="bottom-meta">
									<div class="user-details row align-items-center">
										<div class="comment-wrap col-lg-6">
											<ul>
												<li><a href="#"><span class="lnr lnr-heart"></span>	5 likes</a></li>
												<li><a href="#"><span class="lnr lnr-bubble"></span> 10 Comments</a></li>
											</ul>
										</div>
										<div class="social-wrap col-lg-6">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
												<li><a href="#"><i class="fa fa-behance"></i></a></li>
											</ul>
											
										</div>
									</div>
								</div>
							</div>

						</div>
						<div class="col-lg-4 sidebar">
							<div class="single-widget search-widget">
								<form class="example" action="#" style="margin:auto;max-width:300px">
									<input type="text" placeholder="Search Posts" name="search2">
									<button type="submit"><i class="fa fa-search"></i></button>
								</form>								
							</div>

							<div class="single-widget protfolio-widget">
								<img src="img/keken.jpeg" alt="" class="img-fluid">
								<a href="#"><h4>Website Informasi Tentang Toko Rental</h4></a>
								<p>
									Semua informasi seputar toko rental mobil, sangat benar sekali bila anda melihat website ini dan mencari toko rental yang kalian inginkan.
								</p>
								<ul>
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
									<li><a href="#"><i class="fa fa-behance"></i></a></li>
								</ul>								
							</div>

							<div class="single-widget category-widget">
								<h4 class="title">Post Categories</h4>
								<ul>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Techlology</h6> <span>37</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Lifestyle</h6> <span>24</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Fashion</h6> <span>59</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Art</h6> <span>29</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Food</h6> <span>15</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Architecture</h6> <span>09</span></a></li>
									<li><a href="#" class="justify-content-between align-items-center d-flex"><h6>Adventure</h6> <span>44</span></a></li>
								</ul>
							</div>				

						</div>
					</div>
				</div>	
			</section>
			<!-- End blog-posts Area -->
			

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


