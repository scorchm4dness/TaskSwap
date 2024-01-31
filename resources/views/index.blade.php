<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <script src="{{ asset('assets/js/color-modes.js') }}"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TaskSwap</title>
    <link rel="icon" href="./assets/images/logo.png" type="image/icon type">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-fixed/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('app.css') }}">
  </head>
  <body>

  <nav class="navbar navbar-expand-md navbar-white fixed-top bg-white">
    <div class="container-fluid">
      <a class="navbar-brand">
      <img src="{{ asset('assets/images/logo.png') }}" alt="TaskSwap" height="35">
      </a>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Why TaskSwap?</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <a class="nav-link" href="#">Sign in</a>
          <button class="btn btn-outline-success" type="submit">Get Started</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="{{ asset('assets/images/img1.png') }}" alt="first_image" width="70%" height="100%">       
        </div>
      <div class="carousel-item">
      <img src="{{ asset('assets/images/img2.png') }}" alt="second_image" width="70%" height="100%">
        </div>
      <div class="carousel-item">
      <img src="{{ asset('assets/images/img3.png') }}" alt="third_image" width="70%" height="100%">
        </div>
    </div>
  </div>

  <div class="floating-icon">
    <span class="icon">
    <img src="{{ asset('assets/images/chat.png') }}" alt="chat" width="30" height="30">
  </span>
  </div>
  
  <div class="container marketing">
    <hr class="featurette-divider">
    <!-- Two columns of text below the carousel -->
    <div class="row justify-content-center">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140"> 
          <title>BLOCKCHAIN TECHNOLOGY</title>
          <circle cx="70" cy="70" r="70" fill="#7AA2CF" stroke="#1F548B" stroke-width="5"/>
          <image href="{{ asset('assets/images/blockchain.png') }}" x="20" y="20" width="100" height="100"/>
        </svg>
        <h2 class="fw-normal">BLOCKCHAIN TECHNOLOGY</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->

      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140">
          <title>GAMIFIED</title>
          <circle cx="70" cy="70" r="70" fill="#7AA2CF" stroke="#1F548B" stroke-width="5"/>
          <image href="{{ asset('assets/images/game-controller.png') }}" x="20" y="20" width="100" height="100"/>
        </svg>
        <h2 class="fw-normal">GAMIFIED IMPLEMENTATION</h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->

    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Rethink the norms of work. <span class="highlight-text">Unlock the best talent instantly.</span></h2>
        <p class="lead">Experience TaskSwap -  where exceptional talent meets opportunity.</p>
        <button class="btn btn-outline-success" type="submit">Get Started</button>
      </div>
      <div class="col-md-5">
      <img src="{{ asset('assets/images/img2.png') }}" alt="Your Image" class="img-fluid mx-auto d-block" width="500" height="500">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->
  </div>
  <!-- FOOTER -->
  <footer class="container">
    <p>&copy; 2024 Crackers Software Solutions. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>
<script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>

    </body>
</html>
