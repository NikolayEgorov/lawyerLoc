@section('head')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Premium service</title>

    <!-- Bootstrap -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- for fontawesome icon css file -->
    <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- superslides css -->
    <link rel="stylesheet" href="{{ URL::asset('css/superslides.css') }}">
    <!-- for content animate css file -->
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">    
    <!-- slick slider css file -->
    <link href="{{ URL::asset('css/slick.css') }}" rel="stylesheet">        
    <!-- website theme color file -->   
     <link id="switcher" href="{{ URL::asset('css/themes/cyan-theme.css') }}" rel="stylesheet">    
    <!-- main site css file -->    
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">    
    <!-- google fonts  -->  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>    
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>  
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('img/card.ico') }}" type="image/x-icon">  
  
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
    @show

  @section('navbar')
  <!-- Preloader -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
 
  <!-- End Preloader -->   
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  
  <!-- start navbar -->
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/card">Premium <span>service</span></a>
        <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a> -->
      </div>
      <div id="navbar" class="navbar-collapse collapse navbar_area">          
        <ul class="nav navbar-nav navbar-right custom_nav">
          <li class="active"><a href="/">Головна</a></li>
          <li><a href="/contact">Зв'язатися з нами</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Link one</a></li>
              <li><a href="#">Link Two</a></li>
              <li><a href="#">Link Three</a></li>               
            </ul>
          </li>             
          <li><a href="/services">Ми пропонуємо</a></li>
          <li><a href="/blog">Блог</a></li>                    
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
  <!-- End navbar -->
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
            <img src="{{ URL::asset('img/slider/1.jpg') }}" alt="img">
            <div class="slider_caption">
              <h2><span>Вітаємо вас у компанії</span> Premium service</h2>
              <p class="centerText">Допоможемо вам у вирішенні будь-яких юридичних питань</p>
              <a class="slider_btn" href="/about_company">Про компанію</a>
            </div>
          </li> 
          <!-- Start single slider-->
          <li>
            <img src="{{ URL::asset('img/slider/3.jpg') }}" alt="img">
             <div class="slider_caption">
              <h2>Beautiful <span>Clear and Flexible</span></h2>
              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
              <a class="slider_btn" href="#">Read More</a>
            </div>
            </li>
          <!-- Start single slider-->
          <li>
            <img src="{{ URL::asset('img/slider/2.jpg') }}" alt="img">
             <div class="slider_caption">
              <h2><span>Beausiness</span> & Corporate</h2>
              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
              <a class="slider_btn" href="#">Read More</a>
            </div>
           </li>
           <!-- Start single slider-->
           <li>
            <img src="{{ URL::asset('img/slider/4.jpg') }}" alt="img">
             <div class="slider_caption">
              <h2><span>Beausiness</span> & Corporate</h2>
              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
              <a class="slider_btn" href="#">Read More</a>
            </div>
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
  <!-- Start Service area -->
  <section id="service">
    <div class="container">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="service_area">
          <div class="service_title">
            <hr>
            <h2>Wpf Bgness </h2>
            <p>Trusted by Fortune 500 retailers and the world’s top brands.</p>
          </div>
          <ul class="service_nav wow flipInX">
            <li>
              <a class="service_icon" href="#"><i class="fa fa-users"></i></a>
              <h2>An almost infinite number of project complete</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              <a class="read_more" href="#">read more<i class="fa fa-long-arrow-right"></i></a>
            </li>
           <li>
              <a class="service_icon" href="#"><i class="fa fa-gears"></i></a>
              <h2>Efficient Workflow</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              <a class="read_more" href="#">read more<i class="fa fa-long-arrow-right"></i></a>
            </li>
            <li>
              <a class="service_icon" href="#"><i class="fa fa-support"></i></a>
              <h2>Extraordinary Support</h2>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              <a class="read_more" href="#">read more<i class="fa fa-long-arrow-right"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service area -->
  @show

  @section('howItWorks')
  <!-- start How it works area -->
  <section id="howWorks">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="howworks_area">
            <div class="client_title">
              <hr>
              <h2>How <span>It Works</span></h2>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="howworks_slider wow fadeInLeftBig">
                  <div class="slider_area">
                      <!-- Set up your HTML -->
                    <div class="slick_slider">
                      <div class="single_iteam">
                        <a href="single_page.html"> <img src="{{ URL::asset('img/works_slider1.jpg') }}" alt="img"></a>                          
                      </div>
                      <div class="single_iteam">
                        <a href="single_page.html"> <img src="{{ URL::asset('img/works_slider2.jpg') }}" alt="img"></a>                          
                      </div>
                      <div class="single_iteam">
                        <a href="single_page.html"> <img src="{{ URL::asset('img/works_slider1.jpg') }}" alt="img"></a>                          
                      </div>
                      <div class="single_iteam">
                        <a href="single_page.html"> <img src="{{ URL::asset('img/works_slider2.jpg') }}" alt="img"></a>                          
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="howworks_featured wow fadeInRightBig">
                <!-- single featured -->
                  <div class="media">
                    <a class="media-left media-middle" href="#">
                      <i class="fa fa-laptop"></i>
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading">Title One</h4>
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                    </div>
                  </div>
                  <!-- End single featured -->

                  <!-- single featured -->
                  <div class="media">
                    <a class="media-left media-middle" href="#">
                      <i class="fa fa-legal"></i>
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading">Title Two</h4>
                      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                    </div>
                  </div>
                  <!-- End single featured -->

                  <!-- single featured -->
                  <div class="media">
                    <a class="media-left media-middle" href="#">
                      <i class="fa fa-line-chart"></i>
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading">Title Three</h4>
                      <p>There are many variations of passages of Lorem Ipsum available</p>
                    </div>
                  </div>
                  <!-- End single featured -->
                  <a class="featured_btn" href="#">Try it now for free!</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End How it works area -->
  @show

  @section('price')
  <!-- start price section -->
  <section id="priceSection">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="client_title">
            <hr>
            <h2>Choose <span>Your Plan</span></h2>
          </div>
          <!-- Start Plan area -->
          <div class="pricearea">
            <ul class="price_nav wow bounceIn">               
              <li>
                <h2 class="price_heading">Basic</h2>
               <ul class="pfeatured_nav">
                  <li><strong>300MB</strong> Disk Space </li>
                  <li><strong>400MB</strong> Monthly Traffic</li>
                  <li><strong>5</strong> Subdomains</li>
                  <li><strong>10</strong> Email Accounts</li>
                  <li>Webmail Support</li>
                  <li>MySQL Support</li>
                  <li>PHP5 Support</li>
                </ul>
                <h3>$30</h3>
                <p>Per Month</p>
                <a class="get_button" href="#">Get a quote</a>
              </li>
              <!-- Start single Plan -->
              <li>
                <h2 class="price_heading">Standard</h2>
                <ul class="pfeatured_nav">
                  <li><strong>1GB</strong> Disk Space </li>
                  <li><strong>512MB</strong> Monthly Traffic</li>
                  <li><strong>10</strong> Subdomains</li>
                  <li><strong>15</strong> Email Accounts</li>
                  <li>Webmail Support</li>
                  <li>MySQL Support</li>
                  <li>PHP5 Support</li>
                </ul>
                <h3>$50</h3>
                <p>Per Month</p>
                <a class="get_button" href="#">Get a quote</a>
              </li>
              <!-- Start single Plan -->
              <li>
                <h2 class="price_heading">Business</h2>
                <ul class="pfeatured_nav">
                  <li><strong>3GB</strong> Disk Space </li>
                  <li><strong>1.5Gb</strong> Monthly Traffic</li>
                  <li><strong>25</strong> Subdomains</li>
                  <li><strong>200</strong> Email Accounts</li>
                  <li>Webmail Support</li>
                  <li>MySQL Support</li>
                  <li>PHP5 Support</li>
                </ul>
                <h3>$90</h3>
                <p>Per Month</p>
                <span class="price_badge">Most Popular!</span>
                <a class="get_button" href="#">Get a quote</a>
              </li>
              <!-- Start single Plan -->
              <li>
                <h2 class="price_heading">Platinum</h2>
                <ul class="pfeatured_nav">
                  <li><strong>Unlimited</strong> Disk Space </li>
                  <li><strong>Unlimited</strong> Monthly Traffic</li>
                  <li><strong>Unlimited</strong> Subdomains</li>
                  <li><strong>Unlimited</strong> Email Accounts</li>
                  <li>Webmail Support</li>
                  <li>MySQL Support</li>
                  <li>PHP5 Support</li>
                 </ul>
                <h3>$130</h3>
                <p>Per Month</p>
                <a class="get_button" href="#">Get a quote</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End price section -->
  @show

  @section('specialQuote')
  <!-- start special quote -->
  <section id="specialQuote">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 wow bounceInLeft">
          <p>Pairing substantial savings in time and money with the ease and reliability of doing it in-house, ever since… we invented it</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End special quote -->
  @show

  @section('featuredBlog')
  <!-- start featured blog area -->
  <section id="featuredBlog">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="featuredBlog_area">
            <div class="team_title">
              <hr>
              <h2>News <span>From Our Blog</span></h2>
              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
            </div>
            <!-- start featured blog -->
            <div class="featured_blog">
              <div class="row">
                <!-- start single featured blog -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_featured_blog">                      
                    <img alt="img" src="{{ URL::asset('img/blog.jpg') }}">
                    <h2>It's That time of year again! </h2>
                    <div class="post_commentbox">
                      <a href="#"><i class="fa fa-tags"></i>Technology</a>
                      <a href="#"><i class="fa fa-comments"></i>Comments</a>      
                    </div>
                    <p>As the second largest social network in existence, a Google+ profile will give your brand a massive reach. But the most valuable thing about getting your eCommerce store onto Google+ is that Google prioritises all Google+, making it the best social media platform for search engine optimisation.</p>
                    <a href="single.html" class="read_more">read more<i class="fa fa-long-arrow-right"></i></a>
                  </div>
                </div>
                <!-- start single featured blog -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_featured_blog">                      
                    <img alt="img" src="{{ URL::asset('img/blog.jpg') }}">
                    <h2>It's That time of year again! Prepare your ecomarce </h2>
                    <div class="post_commentbox">
                      <a href="#"><i class="fa fa-tags"></i>Technology</a>
                      <a href="#"><i class="fa fa-comments"></i>Comments</a>      
                    </div>
                    <p>As the second largest social network in existence, a Google+ profile will give your brand a massive reach. But the most valuable thing about getting your eCommerce store onto Google+ is that Google prioritises all Google+, making it the best social media platform for search engine optimisation.</p>
                    <a href="single.html" class="read_more">read more<i class="fa fa-long-arrow-right"></i></a>
                  </div>
                </div>
                <!-- start single featured blog -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                  <div class="single_featured_blog">                      
                    <img alt="img" src="{{ URL::asset('img/blog.jpg') }}">
                    <h2>It's That time of year again!</h2>
                    <div class="post_commentbox">
                      <a href="#"><i class="fa fa-tags"></i>Technology</a>
                      <a href="#"><i class="fa fa-comments"></i>Comments</a>      
                    </div>
                    <p>As the second largest social network in existence, a Google+ profile will give your brand a massive reach. But the most valuable thing about getting your eCommerce store onto Google+ is that Google prioritises all Google+, making it the best social media platform for search engine optimisation.</p>
                    <a href="single.html" class="read_more">read more<i class="fa fa-long-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End featured blog area -->
  @show

  @section('clientBrand')
  <!-- start clients brand area -->
  <section id="clients_brand">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="clients_brand_area wow flipInX">
            <div class="client_title">
              <hr>
              <h2><span>Our</span> Clients</h2>
            </div>              
            <div class="clients_brand">
              <!-- Start clients brand slider -->
             <ul class="clb_nav wow flipInX">
               <li><img src="{{ URL::asset('img/envato-studio.png') }}" alt="brand-img"></li>
               <li><img src="{{ URL::asset('img/codecanyon.png') }}" alt="brand-img"></li>
               <li><img src="{{ URL::asset('img/audiojungle.png') }}" alt="brand-img"></li>
               <li><img src="{{ URL::asset('img/themeforest.png') }}" alt="brand-img"></li>
               <li><img src="{{ URL::asset('img/envato-studio.png') }}" alt="brand-img"></li>
               <li><img src="{{ URL::asset('img/codecanyon.png') }}" alt="brand-img"></li>
               <li><img src="{{ URL::asset('img/audiojungle.png') }}" alt="brand-img"></li>
               <li><img src="{{ URL::asset('img/themeforest.png') }}" alt="brand-img"></li>
             </ul>
             <!-- End clients brand slider -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End clients brand area -->
@show  

@section('footer')
  <!-- start footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="footer_top">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="single_footer_top">
                  <h2>Footer Widget </h2>
                  <ul>
                    <li><a href="#">Lorem Ipsum is simply dummy text of the printing</a></li>
                    <li><a href="#">Dummy text of the printing</a></li>
                    <li><a href="#">There are many variations of passages</a></li>
                    <li><a href="#">Lorem Ipsum available</a></li>
                    <li><a href="#">Lorem Ipsum is not simply random text</a></li>
                    <li><a href="#">The standard chunk of Lorem Ipsum</a></li>
                    <li><a href="#">Dummy text of the printing</a></li>
                    <li><a href="#">There are many variations of passages</a></li>
                    <li><a href="#">Lorem Ipsum available</a></li>
                    <li><a href="#">Lorem Ipsum is not simply random text</a></li>
                    <li><a href="#">The standard chunk of Lorem Ipsum</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="single_footer_top">
                  <h2>Wpf Bgness</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </div>
                <div class="single_footer_top contact_mail">
                  <h2>Contact us</h2>
                  <p>We are always open for a quick chat! Give us a call or email us any time and we will respond shortly. <span>+1 888-522-0212</span> or <a href="#">SupportUS@yourdomain.com</a></p>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="single_footer_top">
                  <h2>Links </h2>
                  <ul>
                    <li><a href="#">Support</a></li>
                    <li><a href="archive-blog.html">Blog</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="testimonial-archive.html">Testimonial Archive</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Developer API</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                  </ul>
                </div>
                <div class="single_footer_top">
                  <h2>Social Links </h2>
                  <ul class="social_nav">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>        
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="footer_bottom">
            <div class="copyright">
              <p>All right reserved </p>
            </div>
            <div class="developer">
              <p>Designed By <a href="http://wpfreeware.com/" rel="nofollow">Wpfreeware</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End footer -->
  @show
  
 
  @section('bottom')
  <!-- jQuery Library -->
  <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
  <!-- For content animatin  -->
  <script src="{{ URL::asset('js/wow.min.js') }}"></script>
  <!-- bootstrap js file -->
  <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script> 
  <!-- superslides slider -->
  <script src="{{ URL::asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ URL::asset('js/jquery.animate-enhanced.min.js') }}"></script>
  <script src="{{ URL::asset('js/jquery.superslides.min.js') }}" type="text/javascript" charset="utf-8"></script>
  <!-- slick slider js file -->
  <script src="{{ URL::asset('js/slick.min.js') }}"></script>
  <!-- Google map -->
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script src="{{ URL::asset('js/jquery.ui.map.js') }}"></script>

  <!-- custom js file include -->
  <script src="{{ URL::asset('js/custom.js') }}"></script>  
  @show
  </body>
</html>