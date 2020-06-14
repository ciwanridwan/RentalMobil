@extends('layout.app')

@section('content')
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
@endsection




