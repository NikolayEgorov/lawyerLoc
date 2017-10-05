@extends('layouts.layout')

  @section('head')
    @parent
  @show

  @section('navbar')
    @parent
  @show
  
  @section('sliders')
  <!-- start slider section -->
  <section id="sliderSection">            
    <div class="mainslider_area">
      <!-- Start super slider -->
      <div id="slides">
        <ul class="slides-container">
          <!-- Start single slider-->
          <li>
            <img src="{{ URL::asset('img/slider/card.jpg') }}" alt="img">
          </li> 
        </ul>
        <nav class="slides-navigation">
          <a href="#" class="next"></a>
          <a href="#" class="prev"></a>
        </nav>
      </div>
    </div>
  </div>    
  </section>
  <!-- End slider section -->
  @show
  
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
      
  @section('footer')
    @parent
  @show
  
  @section('bottom')
    @parent
  @show
      
  </body>
</html>