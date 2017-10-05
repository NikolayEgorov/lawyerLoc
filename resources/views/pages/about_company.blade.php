@extends('layouts.layout')

@section('sliders')
@show

@section('service')
@show

@section('howItWorks')
@show

@section('ourTeam')
<!-- start Our Team area -->
  <section id="ourTeam">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="team_area wow fadeInLeftBig">
            <div class="team_title">
              <div class="space_div"></div>
              <hr>            
              <h2>Зустрічайте <span>нашу команду</span></h2>
<!--              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>-->
            </div>
            <div class="team">
              <ul class="team_nav">
                <li>
                  <div class="team_img">
                    <img src="{{ URL::asset('img/babitskiy.jpg') }}" alt="team-img">
                  </div>
                  <div class="team_content">
                    <h4 class="team_name">Ярослав Бабітский</h4>
                    <p>Керуючий партнер</p>
                  </div>
                  <div class="team_social">
                    <a href="https://www.facebook.com/profile.php?id=100006272225589"><span class="fa fa-facebook"></span></a>
<!--                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="#"><span class="fa fa-linkedin"></span></a>
                    <a href="#"><span class="fa fa-google-plus"></span></a>-->
                  </div>
                </li>
                <li>
                  <div class="team_img">
                    <img src="{{ URL::asset('img/leify.png') }}" alt="team-img">
                  </div>
                  <div class="team_content">
                    <h4 class="team_name">Dania Gerhardt</h4>
                    <p>Managing Director</p>
                  </div>
                  <div class="team_social">
                    <a href="#"><span class="fa fa-facebook"></span></a>
                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="#"><span class="fa fa-linkedin"></span></a>
                    <a href="#"><span class="fa fa-google-plus"></span></a>
                  </div>
                </li>
                <li>
                  <div class="team_img">
                    <img src="{{ URL::asset('img/leify.png') }}" alt="team-img">
                  </div>
                  <div class="team_content">
                    <h4 class="team_name">Dania Gerhardt</h4>
                    <p>Managing Director</p>
                  </div>
                  <div class="team_social">
                    <a href="#"><span class="fa fa-facebook"></span></a>
                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="#"><span class="fa fa-linkedin"></span></a>
                    <a href="#"><span class="fa fa-google-plus"></span></a>
                  </div>
                </li>
                <li>
                  <div class="team_img">
                    <img src="{{ URL::asset('img/leify.png') }}" alt="team-img">
                  </div>
                  <div class="team_content">
                    <h4 class="team_name">Dania Gerhardt</h4>
                    <p>Managing Director</p>
                  </div>
                  <div class="team_social">
                    <a href="#"><span class="fa fa-facebook"></span></a>
                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="#"><span class="fa fa-linkedin"></span></a>
                    <a href="#"><span class="fa fa-google-plus"></span></a>
                  </div>
                </li>
<!--                <li>
                  <div class="team_img">
                    <img src="{{ URL::asset('img/leify.png') }}" alt="team-img">
                  </div>
                  <div class="team_content">
                    <h4 class="team_name">Dania Gerhardt</h4>
                    <p>Managing Director</p>
                  </div>
                  <div class="team_social">
                    <a href="#"><span class="fa fa-facebook"></span></a>
                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="#"><span class="fa fa-linkedin"></span></a>
                    <a href="#"><span class="fa fa-google-plus"></span></a>
                  </div>
                </li>-->
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Our Team area -->
  @show

@section('price')
@show

@section('specialQuote')
@show

@section('clientTestimonial')
  <!-- start client testimonial -->
  <section id="testimonial">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="testimonial_area wow bounceIn">
            <div class="client_title">
              <hr>
              <h2>Що про нас <span>кажуть наші клієнти</span></h2>
            </div>
            <ul class="testimon_nav">
              <li>
               <div class="testimonial_content">
                  <blockquote>
                    <p>Perfect has been one of our most valued discoveries! The exceptional service offered by the team is second to none; the finished product is delivered perfectly, with remarkably quick turnaround, every time. It is a service we can (& do!) rely on and recommend to all that we meet.</p>
                  <small>Катерина Бабіцька, Дружина</small>
                  </blockquote>
                  <div class="client_img">
                    <img src="{{ URL::asset('img/kate.jpg') }}" alt="img">
                  </div>
               </div>
              </li>
             <li>
               <div class="testimonial_content">
                  <blockquote>
                    <p>Perfect has been one of our most valued discoveries! The exceptional service offered by the team is second to none; the finished product is delivered perfectly, every time. It is a service we can (& do!) rely on and recommend to all that we meet.</p>
                  <small>Володимир Бабіцький, Син</small>
                  </blockquote>
                  <div class="client_img">
                    <img src="{{ URL::asset('img/vova.jpg') }}" alt="img">
                  </div>
               </div>
              </li>
              <li>
               <div class="testimonial_content">
                  <blockquote>
                    <p>Perfect has been one of our most valued discoveries! The exceptional service offered by the team is second to none; the finished product is delivered perfectly, with remarkably quick turnaround, every time. It is a service we can (& do!) rely on and recommend to all that we meet.</p>
                  <small>Маріанна Яресько, Кума</small>
                  </blockquote>
                  <div class="client_img">
                    <img src="{{ URL::asset('img/maxa.jpg') }}" alt="img">
                  </div>
               </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End client testimonial -->  
  @show

@section('featuredBlog')
@show

@section('clientBrand')
@show

@section('footer')
@show

@section('bottom')
    @parent
@show