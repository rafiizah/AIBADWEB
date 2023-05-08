<!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="apple-touch-icon" sizes="76x76" href="{{asset('images/apple-icon.png')}}">
   <link rel="icon" type="image/png" href="{{asset('images/favicon.png')}}">
   <title>
     Blk• Design System by Creative Tim
   </title>
   <!--     Fonts and icons     -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
   <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
   <!-- Nucleo Icons -->
   <link href="{{asset('css/nucleo-icons.css')}}" rel="stylesheet" />
   <!-- CSS Files -->
   <link href="{{asset('css/blk-design-system.css?v=1.0.0')}}" rel="stylesheet" />
   <!-- CSS Just for demo purpose, don't include it in your project -->
   <link href="{{asset('/demo/demo.css')}}" rel="stylesheet" />
 </head>

 <body class="index-page">
   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="#" data-placement="bottom" target="_blank">
          <span>AIBAD•</span> Assistant Information Based on Agile Development
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a>
              AIBAD•
              </a>
            </div>
            <div class="col-6 collapse-close text-right">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="landing-page.html#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="landing-page.html#contact">Contact</a>
          </li>
          <li class="nav-item">
            <button class="btn btn-warning btn-round" type="button"><a href="#">Login</a></button>
            </li>

        </ul>
      </div>
    </div>
  </nav>
   <!-- End Navbar -->
   <div class="wrapper">
     <div class="page-header header-filter">
       <div class="squares square1"></div>
       <div class="squares square2"></div>
       <div class="squares square3"></div>
       <div class="squares square4"></div>
       <div class="squares square5"></div>
       <div class="squares square6"></div>
       <div class="squares square7"></div>
       <div class="container">
        <div class="page-header">
            <div class="page-header-image"></div>
            <div class="content">
              <div class="container">
                <div class="row">
                  <div class="col-lg-5 col-md-6 offset-lg-0 offset-md-3">
                    <div id="square7" class="square square-7"></div>
                    <div id="square8" class="square square-8"></div>
                    <div class="card card-register">
                      <div class="card-header">
                        <img class="card-img" src="{{asset('images/square(1).png')}}" alt="Card image">
                        <h4 class="card-title">Login</h4>
                      </div>
                      <div class="card-body">
                        <form class="form">
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="tim-icons icon-single-02"></i>
                              </div>
                            </div>
                            {{-- <input type="text" class="form-control" placeholder="Full Name">
                          </div>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="tim-icons icon-email-85"></i>
                              </div>
                            </div> --}}
                            <input type="text" placeholder="Email" class="form-control">
                          </div>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="tim-icons icon-lock-circle"></i>
                              </div>
                            </div>
                            <input type="text" class="form-control" placeholder="Password">
                          </div>
                          <div class="form-check text-left">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox">
                              <span class="form-check-sign"></span>
                              I agree to the
                              <a href="javascript:void(0)">terms and conditions</a>.
                            </label>
                          </div>
                        </form>
                      </div>
                      <div class="card-footer">
                        <a href="javascript:void(0)" class="btn btn-primary btn-round btn-lg">Get Started</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="register-bg"></div>
                <div id="square1" class="square square-1"></div>
                <div id="square2" class="square square-2"></div>
                <div id="square3" class="square square-3"></div>
                <div id="square4" class="square square-4"></div>
                <div id="square5" class="square square-5"></div>
                <div id="square6" class="square square-6"></div>
              </div>
            </div>
          </div>
       </div>

       </div>
     </div>
     <div class="main">

     </div>
     <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <h1 class="title">AIBAD•</h1>
            </div>
            <div class="col-md-2">
              <ul class="nav">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    Home
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-2">
              <ul class="nav">
                <li class="nav-item">
                  <a href="#about" class="nav-link">
                    ABOUT US
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-2">
              <ul class="nav">
                <li class="nav-item">
                  <a href="#contact" class="nav-link">
                    CONTACT
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-3">
              <h3 class="title">Follow us:</h3>
              <div class="btn-wrapper profile">
                <a target="_blank" href="#" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
                  <i class="fab fa-twitter"></i>
                </a>
                <a target="_blank" href="#" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Like us">
                  <i class="fab fa-facebook-square"></i>
                </a>
                <a target="_blank" href="#" class="btn btn-icon btn-neutral  btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
                  <i class="fab fa-instagram"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </footer>
   </div>
   <!--   Core JS Files   -->
   <script src="{{asset('js/core/jquery.min.js')}}" type="text/javascript"></script>
   <script src="{{asset('js/core/popper.min.js')}}" type="text/javascript"></script>
   <script src="{{asset('js/core/bootstrap.min.js')}}" type="text/javascript"></script>
   <script src="{{asset('js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
   <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
   <script src="{{asset('js/plugins/bootstrap-switch.js')}}"></script>
   <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
   <script src="{{asset('js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
   <!-- Chart JS -->
   <script src="{{asset('js/plugins/chartjs.min.js')}}"></script>
   <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
   <script src="{{asset('js/plugins/moment.min.js')}}"></script>
   <script src="{{asset('js/plugins/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>
   <!-- Black Dashboard DEMO methods, don't include it in your project! -->
   <script src="{{asset('demo/demo.js')}}"></script>
   <!-- Control Center for Black UI Kit: parallax effects, scripts for the example pages etc -->
   <script src="{{asset('js/blk-design-system.min.js?v=1.0.0')}}" type="text/javascript"></script>
   <script>
     $(document).ready(function() {
       blackKit.initDatePicker();
       blackKit.initSliders();
     });

     function scrollToDownload() {

       if ($('.section-download').length != 0) {
         $("html, body").animate({
           scrollTop: $('.section-download').offset().top
         }, 1000);
       }
     }
   </script>
 </body>

 </html>
