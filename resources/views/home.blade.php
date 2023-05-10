<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AIBAD</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"  crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <header>
    <style>


    </style>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
          <a class="navbar-brand" href="#!"></a>
          <img src="{{ asset('/images/logo.png') }}" alt="" width="150" height="50" class="d-inline-block align-text-top">
           </a>

              <ul class="navbar-nav mx-auto" id="menu">
                  <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">HOME</a></li>
                  <li class="nav-item"><a class="nav-link active" href="#">ABOUT US</a></li>
                  <li class="nav-item"><a class="nav-link active" href="#">CONTACT US</a></li>
              </ul>
              <ul class="navbar-nav">
                <li><a href="#" class="btn btn-primary" role="button" aria-pressed="true">Login</a></li>
                <li><a href="#" class="btn btn-secondary" role="button" aria-pressed="true">Register</a></li>
              </ul>
          </div>
      </div>
  </nav>
  <!-- Header - set the background image for the header in the line below-->


  <!--Main layout-->
  <main>
    <div class="container">
      <!--Section: Content-->
      <section>
        <div class="row">
          <div class="col-md-7 gx-5 mb-4 order-2">
            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
              <img src="{{ asset('/images/bg.png') }}" class="img-fluid" />
              <a href="#!">

              </a>
            </div>
          </div>
<<<<<<< HEAD
        </div>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <button class="btn btn-warning btn-round" type="button"><a href="{{route('login')}}">Login</a></button>
          </li>
          <li class="nav-item">
            <button class="btn btn-warning btn-simple btn-round" type="button"><a href="#">Register</a> </button>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header">
      <img src="{{ asset('images/blob.png') }}" class="path">
      <img src="{{ asset('images/path2.png') }}" class="path2">
      <img src="{{ asset('images/triunghiuri.png') }}" class="shapes triangle">
      <img src="{{ asset('images/waves.png') }}" class="shapes wave">
      <img src="{{ asset('images/patrat.png') }}" class="shapes squares">
      <img src="{{ asset('images/cercuri.png') }}" class="shapes circle">
      <div class="content-center">
        <div class="row row-grid justify-content-between align-items-center text-left">
          <div class="col-lg-5 col-md-5">
            <span>AIBAD</span>
            <h1 class="text-white"> Assistant Information Based on Agile Development</h1>
            <p class="text-white mb-3">Hello, {{Auth::user()->name}}! are you majoring in Informatics D3 & D4? we are here to help you find quotes about agile material easily and practically through this AIBAD platform
            </p>
            <!-- <div class="btn-wrapper mb-3">
              <p class="category text-success d-inline">started</p>
              <a href="#blk" class="btn btn-success btn-link btn-sm"><i class="tim-icons icon-minimal-right"></i></a>
            </div> -->
            <br>
            <button class="btn btn-success">Get Started <i class="tim-icons icon-minimal-right"></i></button>
            <button class="btn"> <i class="tim-icons icon-triangle-right-17"></i>
             Get App</button>
          </div>
          <p><br></p>
          <div class="col-lg-7 col-md-6">
            <!-- style="width: 1080px !important; height: 550px; " -->
            <img src="{{ asset('images/mockup.png') }}"  alt="Circle image" class="img-fluid" style="width: 1080px !important; height: 550px; ">
          </div>
        </div>
      </div>
    </div>
=======
>>>>>>> parent of 28186e2 (second commit + home fe baru)

          <div class="col-md-5 gx-5 mb-4 order-1">
            <h4>Assistant Information Based</h4>
            <h4>on Agile Development</h4>
            <p class="text-muted">Hi kamu sedang bingung mencara seputar materi agile? kali ini kita hadir untuk membantu teman-teman semua agar tidak kesusahan dalam mencari materi agile</p>

            <a href="#" class="btn btn-third" role="button" aria-pressed="true">Let's Talk <img src="{{ asset('/images/hands.png') }}" alt="" srcset=""></a>
          </div>
        </div>
      </section>


    </div>
  </main>



  <div class="footer-dark">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Web design</a></li>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>AIBAD</h3>
                    <p>Aibad adalah sebuah platform pembelajaran yang berfokus pada metode Agile. Dengan menggunakan teknologi terbaru dalam pembelajaran, Aibad bertujuan untuk membantu individu maupun organisasi dalam memahami konsep dan praktik Agile dengan lebih mudah dan efektif</p>
                </div>
                <div class="col item social">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-github"></i></a>
                  <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            <p class="copyright">AIBAD © 2023</p>
        </div>
    </footer>
</div>


  <!--Main layout-->


  <!-- <footer class="text-center text-white" style="background-color: #f1f1f1;"> -->
    <!-- Grid container -->
    <!-- <div class="container pt-4"> -->
      <!-- Section: Social media -->
      <!-- <section class="mb-4"> -->
        <!-- Facebook -->
        <!-- <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-facebook-f"></i
        ></a>
   -->
        <!-- Twitter -->
        <!-- <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-twitter"></i
        ></a> -->

        <!-- Google -->
        <!-- <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-google"></i
        ></a>
   -->
        <!-- Instagram -->
        <!-- <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-instagram"></i
        ></a> -->

        <!-- Linkedin -->
        <!-- <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-whatsapp"></i
        ></a> -->
        <!-- Github -->
        <!-- <a
          class="btn btn-link btn-floating btn-lg text-dark m-1"
          href="#!"
          role="button"
          data-mdb-ripple-color="dark"
          ><i class="fab fa-github"></i
        ></a>
      </section> -->
      <!-- Section: Social media -->
    <!-- </div> -->
    <!-- Grid container -->

    <!-- Copyright -->
    <!-- <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a>Agile Development</a>
    </div>
     Copyright -->
  <!-- </footer>  -->
</html>
