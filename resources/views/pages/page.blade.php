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
  
 @section('banner')
  <!-- start banner area -->
  <section id="imgbanner">  
<!--    <h2>About Us</h2>     -->
  </section>
  <!-- End banner area -->
  @show
  
  <!-- start image editing  -->
  <section id="blogArchive">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
         <div class="blogArchive_area">
         
        @section('leftSide')
         <!-- start page left side -->
          <div class="single_archiveblog">         
            <div class="archiveblog_right page_left">
              <h2>У нас дружня команда професіоналів</h2>                
              <img class="img-center" src="{{ URL::asset('img/blog.jpg') }}" alt="img">
              <p>As the second largest social network in existence, a Google+ profile will give your brand a massive reach. But the most valuable thing about getting your eCommerce store onto Google+ is that Google prioritises all Google+, making it the best social media platform for search engine optimisation.</p>
              <p>As the second largest social network in existence, a Google+ profile will give your brand a massive reach. But the most valuable thing about getting your eCommerce store onto Google+ is that Google prioritises all Google+, making it the best social media platform for search engine optimisation.</p>
              <blockquote>The awesome thing about setting your page up through Google My Business is that you will instantly become more accessible to your customers, whether they are searching for you through a simple Google search, Google maps or Google+.</blockquote>
              
<!--              <ul>
                <li>The second largest social network in existence</li>
                <li>The second largest social network in existence</li>
                <li>The awesome thing about setting your page</li>
                <li>The second largest social network in existence</li>
                <li>The awesome thing about setting your page</li>
              </ul>-->
              
<!--              <h1>This is h1 Tag</h1>
              <h2>This is h2 Tag</h2>
              <h3>This is h3 Tag</h3>
              <h4>This is h4 Tag</h4>
              <h5>This is h5 Tag</h5>
              <h6>This is h6 Tag</h6>-->

<!--              <button class="btn default-btn">Default</button>
              <button class="btn btn-red">Red Button</button>
              <button class="btn btn-yellow">Yellow Button</button>
              <button class="btn btn-green">Green Button</button>
              <button class="btn btn-black">Black Button</button>
              <button class="btn btn-orange">Orange Button</button>
              <button class="btn btn-blue">Blue Button</button>
              <button class="btn btn-lime">Lime Button</button>               -->
              
            </div>
            <div class="social_link">
              <ul class="sociallink_nav">
                <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
<!--                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>-->
              </ul>
            </div>
          </div>
          <!-- End page left side -->
          @show
          
          </div>                      
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
         <div class="blog_sidebar">
         <!-- Start single side bar -->
         <div class="single_sidebar">
            <h2>Наші послуги:</h2>
            <ul class="small_catg similar_nav">
                <li>
                  <div class="media">
                    <a href="#" class="media-left related-img">
                      <img alt="img" src="{{ URL::asset('img/finance.jpg') }}">                     
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="#">Фінансові суперечки </a></h4> 
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris.</p>
                    </div>
                  </div>
                </li>                    
                <li>
                  <div class="media">
                    <a href="#" class="media-left related-img">
                      <img alt="img" src="{{ URL::asset('img/symbol1.png') }}">
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="#">Представлення на судових процесах </a></h4> 
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris.</p>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <a href="#" class="media-left related-img">
                      <img alt="img" src="{{ URL::asset('img/busines.jpg') }}">
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="#">Бізнесові суперечки </a></h4> 
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris.</p>
                    </div>
                  </div>
                </li>
            </ul>
          </div>
          <!-- Start single side bar -->
         <div class="single_sidebar">
            <h2>Popular Post</h2>
            <ul class="small_catg similar_nav">
                <li>
                  <div class="media">
                    <a href="#" class="media-left related-img">
                      <img alt="img" src="{{ URL::asset('img/busines.jpg') }}">
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="#">Бізнесові суперечки </a></h4> 
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris.</p>
                    </div>
                  </div>
                </li>                    
                <li>
                  <div class="media">
                    <a href="#" class="media-left related-img">
                      <img alt="img" src="{{ URL::asset('img/blog.jpg') }}">
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading"><a href="#">Duis condimentum nunc pretium lobortis </a></h4> 
                      <p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris.</p>
                    </div>
                  </div>
                </li>
            </ul>
          </div>
          <!-- Start single side bar -->
          <div class="single_sidebar">
            <h2>Category</h2>
            <ul class="catg_nav">
              <li><a href="#">Business</a></li>
              <li><a href="#">Technology</a></li>
              <li><a href="#">News</a></li>
              <li><a href="#">Exclusive</a></li>
              <li><a href="#">Corporate</a></li>
            </ul>
          </div>
          <!-- Start single side bar -->
          <div class="single_sidebar">
            <h2>Tags</h2>
            <ul class="tags_nav">
              <li><a href="#">Corporate</a></li>
              <li><a href="#">Background</a></li>
              <li><a href="#">Recover</a></li>
              <li><a href="#">News</a></li>
              <li><a href="#">Template</a></li>
              <li><a href="#">Wordpress</a></li>
            </ul>
          </div>
          <!-- Start single side bar -->
          <div class="single_sidebar">
            <h2>Blog Archive</h2>
            <div class="blog_archive">
             <form>
               <select>
                 <option value="">Blog Archive</option>
                 <option value="">October(20)</option>
               </select>
             </form>
           </div>
          </div>
          <!-- Start single side bar -->
          <div class="single_sidebar">
            <h2>Links</h2>
            <ul>
              <li><a href="#">Business</a></li>
              <li><a href="#">Technology</a></li>
              <li><a href="#">News</a></li>
              <li><a href="#">Exclusive</a></li>
              <li><a href="#">Corporate</a></li>
            </ul>
          </div>
         </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End image editing  -->
      
  @section('footer')
    @parent
  @show
  
  @section('bottom')
    @parent
  @show
  
  </body>
</html>