<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->

<!DOCTYPE html>
<html lang="en">
  <head>
    

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link href="{{url('images/logo.jpeg')}}" rel="icon" />

    <link rel="stylesheet" href="{{asset('home/fonts/icomoon/style.css')}}" />
    <link rel="stylesheet" href="{{asset('home/fonts/flaticon/font/flaticon.css')}}" />

    <link rel="stylesheet" href="{{asset('home/css/tiny-slider.css')}}" />
    <link rel="stylesheet" href="{{asset('home/css/aos.css')}}" />
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>
      INTER-LLECT FACILITY MANAGEMENT & HOMES LTD 
    </title>
  </head>
  <body>
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    

    <nav class="site-nav">
      <div class="container">
        <div class="menu-bg-wrap">
          <div class="site-navigation">
           
           <!-- <a href="{{url('/')}}" class="logo m-0 float-start">Ark View</a> -->

           <a href="{{url('/')}}" class="logo m-0 float-start">
          <img src="images/logo.jpeg" alt="INTER-LLECT FACILITY MANAGEMENT & HOMES LTD">
        </a>

            <ul
              class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end"
            >
              <li class="active"><a href="{{url('/')}}">Home</a></li>
             <!-- <li class="has-children"> -->
              <li>  <a href="{{url('/properties')}}">Properties</a>

                <!-- <ul class="dropdown">
                  <li><a href="#">Buy Property</a></li>
                  <li><a href="#">Sell Property</a></li>
                  <li class="has-children">
                    <a href="#">Dropdown</a>
                    <ul class="dropdown">
                      <li><a href="#">Sub Menu One</a></li>
                      <li><a href="#">Sub Menu Two</a></li>
                      <li><a href="#">Sub Menu Three</a></li>
                    </ul>
                  </li>
                </ul> --> 

              </li>
              <li><a href="{{url('/services')}}">Services</a></li>
              <li><a href="{{url('/about')}}">About</a></li>
              <li><a href="{{url('/contact')}}">Contact Us</a></li>

            
              

              @auth
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    @endauth
            </ul>

            <a
              href="#"
              class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
              data-toggle="collapse"
              data-target="#main-navbar"
            >
        
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </nav>

   @yield('content')

    <div class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="widget">
              <h3>Contact</h3>
              <address>NO. 45, LEKKI SCHEME 2 ESTATE AJAH, LAGOS, LAGOS
                STATE, NIGERIA</address>
              <ul class="list-unstyled links">
                <li><a href="tel://11234567890">+(234)8118849191</a></li>
                
                <li>
                  <a href="mailto:info@mydomain.com">info@interllect.com</a>
                </li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
          

          

          <div class="col-lg-4">
            <div class="widget">

                {{--
              <h3>Sources</h3>
              <ul class="list-unstyled float-start links">
                <li><a href="{{url('/about')}}">About us</a></li>
                <li><a href="{{url('/services')}}">Services</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Privacy</a></li>
              </ul>
              
              <ul class="list-unstyled float-start links">
                <li><a href="#">Partners</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Creative</a></li>
              </ul>
              --}}
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <div class="widget">
              <h3>Links</h3>
              <ul class="list-unstyled links">
                <li><a href="{{url('/services')}}">Our Services</a></li>
                <li><a href="{{url('/about')}}">About us</a></li>
                <li><a href="{{url('/contact')}}">Contact us</a></li>
                <li><a href="{{url('/terms')}}">Terms and Conditions</a></li>
                <li><a href="{{url('/privacy')}}">Privacy</a></li>
              </ul>

              <ul class="list-unstyled social">
                <li>
                  <a href="#"><span class="icon-instagram"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-linkedin"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-pinterest"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-dribbble"></span></a>
                </li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->

        <div class="row mt-5">
          <div class="col-12 text-center">
            <!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

            <p>
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              
            </p>
            <div>
              Distributed by
              <a href="mailto:info@arkviews.com" target="_blank">Ark View</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.site-footer -->

    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>

<script type="text/javascript">

function reply(caller)
{
    document.getElementById('commentId').value=$(caller).attr('data-Commentid');
  $('.replyDiv').insertAfter($(caller));

  $('.replyDiv').show();
}

function reply_close(caller)
{
  

  $('.replyDiv').hide();
}


</script>

<script>

    document.addEventListener("DOMContentLoader", function(event){
       var (scrollpos) window.scrollTo(0, scrollpos);
    });

    window.onbeforeunload = function(e) {
       localStrorage.setItem('scrollpos', window.scrollY);
    };


 </script>
    
    <script src="{{asset('home/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('home/js/tiny-slider.js')}}"></script>
    <script src="{{asset('home/js/aos.js')}}"></script>
    <script src="{{asset('home/js/navbar.js')}}"></script>
    <script src="{{asset('home/js/counter.js')}}"></script>
    <script src="{{asset('home/js/custom.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
