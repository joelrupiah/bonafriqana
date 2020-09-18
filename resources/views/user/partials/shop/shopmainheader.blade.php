<section class="w3l-banner-slider-main inner-pagehny">
    <div class="breadcrumb-infhny">
  
      <div class="top-header-content">
  
        <header class="tophny-header">
          <div class="container-fluid">
            <div class="top-right-strip row">
              <!--/left-->
              <div class="top-hny-left-content col-lg-6 pl-lg-0">
                <h6>Upto 30% off on All styles , <a href="ecommerce.html" target="_blank"> Click here for <span
                      class="fa fa-hand-o-right hand-icon" aria-hidden="true"></span> <span class="hignlaite">More
                      details</span></a></h6>
              </div>
              <!--//left-->
              <!--/right-->
              <ul class="top-hnt-right-content col-lg-6">
  
                @guest
                    
                <li class="button-log usernhy">
                  <a class="btn-open" href="{{url('/login')}}">
                    <span class="fa fa-user" aria-hidden="true"></span>
                  </a>
                </li>

                @else
                    
                <li class="button-log usernhy">{{Auth::user()->name}}
                  <a class="btn-open" href="#">
                    <span class="fa fa-user" aria-hidden="true"></span>
                  </a>
                </li>

                @endguest

                @guest

                <li class="transmitvcart galssescart2 cart cart box_1">
                    <button class="top_transmitv_cart" type="submit" name="submit" value="">
                      My Cart
                      <span class="fa fa-shopping-cart"></span>
                    </button>
                </li>

                @else

                <li class="transmitvcart galssescart2 cart cart box_1">
                    <a href="{{ route('show.cart') }}"><button class="top_transmitv_cart" type="submit" name="submit" value="">
                      {{Cart::count()}}
                      <span class="fa fa-shopping-cart"></span>
                    </button></a>
                </li>

                @endguest
              </ul>
              <!--//right-->
            </div>
          </div>

          @guest
              
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid serarc-fluid">
              <a class="navbar-brand" href="index.html">
                Bonafri<span class="lohny">q</span>ana</a>
              <!-- if logo is image enable this   
                      <a class="navbar-brand" href="#index.html">
                        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                      </a> -->
              <!--/search-right-->
              <div class="search-right">
  
                <a href="#search" title="search"><span class="fa fa-search mr-2" aria-hidden="true"></span>
                  <span class="search-text">Search here</span></a>
                <!-- search popup -->
  
  
                <div id="search" class="pop-overlay">
                  <div class="popup">
  
                    <form action="#" method="post" class="search-box">
                      <input type="search" placeholder="Keyword" name="search" required="required" autofocus="">
                      <button type="submit" class="btn">Search</button>
                    </form>
  
                  </div>
  
                  <a class="close" href="#">×</a>
                </div>
                <!-- /search popup -->
              </div>
              <!--//search-right-->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa fa-bars"> </span>
              </button>
  
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/shop')}}">Shop</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/blog')}}">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/about')}}">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                  </li>
                </ul>
  
              </div>
            </div>
          </nav>
          <!--/nav-->
          @else
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid serarc-fluid">
              <a class="navbar-brand" href="index.html">
                Bonafri<span class="lohny">q</span>ana</a>
              <!-- if logo is image enable this   
                      <a class="navbar-brand" href="#index.html">
                        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                      </a> -->
              <!--/search-right-->
              <div class="search-right">
  
                <a href="#search" title="search"><span class="fa fa-search mr-2" aria-hidden="true"></span>
                  <span class="search-text">Search here</span></a>
                <!-- search popup -->
  
  
                <div id="search" class="pop-overlay">
                  <div class="popup">
  
                    <form action="#" method="post" class="search-box">
                      <input type="search" placeholder="Keyword" name="search" required="required" autofocus="">
                      <button type="submit" class="btn">Search</button>
                    </form>
  
                  </div>
  
                  <a class="close" href="#">×</a>
                </div>
                <!-- /search popup -->
              </div>
              <!--//search-right-->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa fa-bars"> </span>
              </button>
  
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/shop')}}">Shop</a>
                  </li>
                  <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      Profile
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="ecommerce.html">Wishlist</a>
                      <a class="dropdown-item" href="{{route('home')}}">Settings</a>
                      <a class="dropdown-item" href="ecommerce-single.html">Checkout</a>
                     
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/blog')}}">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/about')}}">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/contact')}}">Contact</a>
                  </li>
                </ul>
  
              </div>
            </div>
          </nav>
          <!--//nav-->
          @endguest

        </header>
        <div class="breadcrumb-contentnhy">
          <div class="container">
            <nav aria-label="breadcrumb">
              <h2 class="hny-title text-center">Shop</h2>
              <ol class="breadcrumb mb-0">
                <li><a href="{{url('/')}}">Home</a>
                  <span class="fa fa-angle-double-right"></span></li>
                <li class="active">Shop</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
  </section>