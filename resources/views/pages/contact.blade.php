@extends('layouts.layout')

<!DOCTYPE html>
<html lang="en">
  @section('head')
    @parent
  @show
<body>
  <!-- =========================
    //////////////This Theme Design and Developed //////////////////////
    //////////// by www.wpfreeware.com======================-->

  @section('navbar')
    @parent
  @show
  
  @section('sliders')
  @endsection
  
  @section('service')
  @endsection
  
  @section('howItWorks')
  @endsection
  
  @section('ourTeam')
  @endsection
  
  @section('price')
  @endsection
  
  @section('specialQuote')
  @endsection
  
  @section('clientTestimonial')
  @endsection
  
  @section('featuredBlog')
  @endsection
  
  @section('clientBrand')
  @endsection
    
  @section('map')
  <!-- start Contact section -->
  <section id="contact">
    <div class="row">
      <div class="col-lg-4 col-md-5">
        <div class="contact_map">
          <!-- Start Google map -->
          <div id="map_canvas"></div>
        </div>
      </div>
    </div>
      @endsection
      
      @section('contact')
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
         <div class="contact_area">
           <div class="client_title">
              <hr>
              <h2>We Would <span>Love To Hear From You</span></h2>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="contact_left wow fadeInLeft">
                  <form class="submitphoto_form">
                    <input type="text" class="form-control wpcf7-text" placeholder="Your name">
                    <input type="mail" class="form-control wpcf7-email" placeholder="Email address">          
                    <input type="text" class="form-control wpcf7-text" placeholder="Subject">
                    <textarea class="form-control wpcf7-textarea" cols="30" rows="10" placeholder="What would you like to tell us"></textarea>
                    <input type="submit" value="Submit" class="wpcf7-submit photo-submit">                     
                  </form>
                </div>                  
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="contact_right wow fadeInRight">
                  <img src="img/phone_icon.png" alt="img">
                  <p>Напишіть нам! Ми хочемо почути вашу думку про нас. Ми відкриті для відгуків та будь-яких питань, які ви можете мати.</p>
                  <address>
                    <p><a href="mailto:hello@yourdomain.com"> y.babitskiy@gmail.com</a></p>
                    <p>+38(067)322 54 72</p>
                  </address>
                </div>
              </div>
            </div>              
         </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->
  @show
      
  @section('footer')
    @parent
  @show
  
  @section('bottom')
    @parent
  @show
      
  </body>
</html>