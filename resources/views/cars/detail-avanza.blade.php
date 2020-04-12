@extends('layout')

<!-- start banner Area -->
<section class="banner-area relative" id="home">    
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1 class="text-white">
          Info Mobil               
        </h1>   
        <p class="text-white link-nav"><a href="{{ route('home')}}">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="">cars
        </a> <span class="lnr lnr-arrow-right"></span> <a href="{{ route('cars-keken')}}"> Keken Rent Car</a></p>
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
          <img class="img-fluid" src="img/mobil/avanza.jpg" alt="">
          <a href="#">
            <h1>
              Toyota Avanza
            </h1>
          </a>
          <div class="content-wrap">
            <p>
              Seputar info mobil Avanza dari Keken Rent Car : <br>
              <ul>
                <li>1. Mobil : Avanza </li>
                <li>2. Merk/Brand : Toyota</li>
                <li>3. Tahun : 2019</li>
                <li>4. Kilometer : 7.000 Km</li>
                <li>5. Harga Rental : Rp 10.000.000 / hari</li>
              </ul>
            </p>

          </div>

          <div class="bottom-meta">
            <div class="user-details row align-items-center">
              <div class="social-wrap col-lg-6">

                <div class="reply-btn">
                 <p> Silahkan Klik Booking <span class="lnr lnr-arrow-right"></span> <a href="{{ route('form')}}" class="btn-reply text-uppercase"> <b> Now </b></a> </p> 
               </div>

             </div>
           </div>
         </div>


         <!-- Start comment-sec Area -->
         <section class="comment-sec-area pt-80 pb-80">
          <div class="container">
            <div class="row flex-column">
              <h5 class="text-uppercase pb-80">05 Comments</h5>
              <br>
              <div class="comment-list">
                <div class="single-comment justify-content-between d-flex">
                  <div class="user justify-content-between d-flex">
                    <div class="thumb">
                      <img src="img/blog/c1.jpg" alt="">
                    </div>
                    <div class="desc">
                      <h5><a href="#">Milea</a></h5>
                      <p class="date">December 4, 2019 at 7:12 pm </p>
                      <p class="comment">
                        Saya nyaman merental mobil avanza ini.
                      </p>
                    </div>
                  </div>
                  <div class="reply-btn">
                   <a href="" class="btn-reply text-uppercase">reply</a> 
                 </div>
               </div>
             </div>
             <div class="comment-list left-padding">
              <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                  <div class="thumb">
                    <img src="img/blog/c2.jpg" alt="">
                  </div>
                  <div class="desc">
                    <h5><a href="#">Rina Agustin </a></h5>
                    <p class="date">January 29, 2020 at 3:12 pm </p>
                    <p class="comment">
                      Harga rentalnya masih dijangkau!
                    </p>
                  </div>
                </div>
                <div class="reply-btn">
                 <a href="" class="btn-reply text-uppercase">reply</a> 
               </div>
             </div>
           </div>
           <div class="comment-list left-padding">
            <div class="single-comment justify-content-between d-flex">
              <div class="user justify-content-between d-flex">
                <div class="thumb">
                  <img src="img/blog/c3.jpg" alt="">
                </div>
                <div class="desc">
                  <h5><a href="#">Dian Aprillia</a></h5>
                  <p class="date">February 18, 2020 at 4:12 pm </p>
                  <p class="comment">
                    Nyaman nyewa mobil rental disini!
                  </p>
                </div>
              </div>
              <div class="reply-btn">
               <a href="" class="btn-reply text-uppercase">reply</a> 
             </div>
           </div>
         </div>
         <div class="comment-list">
          <div class="single-comment justify-content-between d-flex">
            <div class="user justify-content-between d-flex">
              <div class="thumb">
                <img src="img/blog/c4.jpg" alt="">
              </div>
              <div class="desc">
                <h5><a href="#">Dewi Persik</a></h5>
                <p class="date">February 20, 2020 at 10:12 pm </p>
                <p class="comment">
                  Mobil yang disediakan sangat amat layak untuk pakai pergi jauh!
                </p>
              </div>
            </div>
            <div class="reply-btn">
             <a href="" class="btn-reply text-uppercase">reply</a> 
           </div>
         </div>
       </div>
       <div class="comment-list">
        <div class="single-comment justify-content-between d-flex">
          <div class="user justify-content-between d-flex">
            <div class="thumb">
              <img src="img/blog/c5.jpg" alt="">
            </div>
            <div class="desc">
              <h5><a href="#">Natasya Wilona</a></h5>
              <p class="date">January 14, 2020 at 11:12 pm </p>
              <p class="comment">
                Saya beri jempol sebanyak banyaknya!
              </p>
            </div>
          </div>
          <div class="reply-btn">
           <a href="" class="btn-reply text-uppercase">reply</a> 
         </div>
       </div>
     </div>                                                                                                                                                                
   </div>
 </div>    
</section>
<!-- End comment-sec Area -->

<!-- Start commentform Area -->
<section class="commentform-area pt-80">
  <div class="container">
    <h5 class="pb-50">Leave a Reply</h5>
    <div class="row flex-row d-flex">
      <div class="col-lg-4 col-md-6">
        <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">
        <input name="email" placeholder="Enter your email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your email'" class="common-input mb-20 form-control" required="" type="email">
        <input name="Subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your Subject'" class="common-input mb-20 form-control" required="" type="text">

      </div>
      <div class="col-lg-8 col-md-6">
        <textarea class="form-control mb-10" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
        <a class="primary-btn mt-20" href="#">Comment</a>
      </div>
    </div>
  </div>    
</section>
<!-- End commentform Area -->


</div>                                                                      
</div>
<div class="col-lg-4 sidebar">
  <div class="single-widget protfolio-widget">
    <img src="img/keken.jpeg" alt="" class="img-fluid">
    <a href="#"><h4>Keken Rent Car</h4></a>
    <p>
      Tersedia berbagai macam puluhan mobil yang sangat nyaman buat anda, dan biaya sewa yang murah.
    </p>
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
</section>
<!-- End blog-posts Area -->


