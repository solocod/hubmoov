<!doctype html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Hubmoov!</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta property="fb:app_id" content="181217245946466" />

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="assets/vendor/font-awesome/css/fontawesome-all.min.css">

  <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/manifest.js') }}"></script>
    <script src="{{ mix('js/vendor.js') }}"></script>

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="assets/css/theme.css">
  <script src="assets/js/components/hs.header.js"></script>
</head>
<body>
  <header id="headerWithMegaMenu" class="u-header">
  <div class="u-header__section">
    <div id="logoAndNavWithMegaMenu" class="container">
      <!-- Nav -->
      <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
        <!-- Logo -->
        <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="index.html" aria-label="Front">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="46px" height="46px" viewBox="0 0 46 46" xml:space="preserve" style="margin-bottom: 0;">
            <path fill="#3F7DE0" opacity=".65" d="M23,41L23,41c-9.9,0-18-8-18-18v0c0-9.9,8-18,18-18h11.3C38,5,41,8,41,11.7V23C41,32.9,32.9,41,23,41z"/>
            <path class="fill-info" opacity=".5" d="M28,35.9L28,35.9c-9.9,0-18-8-18-18v0c0-9.9,8-18,18-18l11.3,0C43,0,46,3,46,6.6V18C46,27.9,38,35.9,28,35.9z"/>
            <path class="fill-primary" opacity=".7" d="M18,46L18,46C8,46,0,38,0,28v0c0-9.9,8-18,18-18h11.3c3.7,0,6.6,3,6.6,6.6V28C35.9,38,27.9,46,18,46z"/>
            <path class="fill-white" d="M17.4,34V18.3h10.2v2.9h-6.4v3.4h4.8v2.9h-4.8V34H17.4z"/>
          </svg>
          <span class="u-header__navbar-brand-text">Hubmoov</span>
        </a>
        <!-- End Logo -->

        <!-- Responsive Toggle Button -->
        <button type="button" class="navbar-toggler btn u-hamburger"
                aria-label="Toggle navigation"
                aria-expanded="false"
                aria-controls="navBarWithMegaMenu"
                data-toggle="collapse"
                data-target="#navBarWithMegaMenu">
          <span id="hamburgerTriggerWithMegaMenu" class="u-hamburger__box">
            <span class="u-hamburger__inner"></span>
          </span>
        </button>


        <!-- End Responsive Toggle Button -->

        <!-- Navigation -->
        <div id="navBarWithMegaMenu" class="collapse navbar-collapse u-header__navbar-collapse">
          <ul class="navbar-nav u-header__navbar-nav">
            <!-- Link -->
            <li class="nav-item u-header__nav-item">
              <a class="nav-link u-header__nav-link" href="config.php">Contact us </a>
            </li>
            <!-- End Link -->

            <!-- Link -->
            <li class="nav-item u-header__nav-item">
              <a class="nav-link u-header__nav-link" href="create.php">Create Event</a>
            </li>
            <!-- End Link -->
            <div class="container-fliu">

            </div>

            <!-- Link -->
            <li class="nav-item u-header__nav-item active">
              <a class="nav-link u-header__nav-link" href="#">Help</a>
            </li>
            <!-- End Link -->

            <!-- Link -->
            <li class="nav-item u-header__nav-item">
              <a class="nav-link u-header__nav-link disabled" href="register.php">Sign up</a>
            </li>
            <!-- End Link -->

            <!-- Button -->
            <li class="nav-item u-header__nav-last-item">
              <a class="btn btn-sm btn-primary " href="login.php" target="_blank">
                Login
              </a>
            </li>
            <!-- End Button -->
          </ul>
        </div>
        <!-- End Navigation -->
      </nav>
      <!-- End Nav -->
    </div>
  </div>
</header>

<section class="container-fluid banner">
      <div class="ban">
          <img src="img/Francesly.png" alt="banniere du site">
          </div>
          <div class="inner-banner">
            <div class="container position-absolute right-0 bottom-0 left-0 space-top-5 space-bottom-5">
              <!-- Info Link -->
              <a class="d-sm-inline-flex align-items-center position-center bg-primary text-white rounded-pill  p-4 pr-3 mb-10" href="create.php">
                <span class="u-label u-label--sm u-label--white font-weight-semi-bold mr-3  ">CREAT YOUR EVENT </span>
              </a>
      </div>
      </section>
  <!-- Hero Section -->

    <!-- End Slick Carousel -->


      <!-- End Info Link -->

      <div class="card border-0">
        <div class="card-body p-7">
          <!-- Search Jobs Form -->
          <form class="js-validate">
            <div class="row">
              <div class="col-lg-5 mb-4 mb-lg-0">
                <!-- Input -->
                <label class="d-block">
                  <span class="h4 d-block text-dark font-weight-semi-bold mb-0">Research</span>
                  <small class="d-block text-secondary">Event title </small>
                </label>
                <div class="js-focus-state">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Event" aria-label="EVENT" aria-describedby="keywordInputAddon">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <span class="fas fa-search" id="keywordInputAddon"></span>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- End Input -->
              </div>

              <div class="col-lg-5 mb-4 mb-lg-0">
                <!-- Input -->
                <label class="d-block">
                  <span class="h4 d-block text-dark font-weight-semi-bold mb-0">Location</span>
                  <small class="d-block text-secondary">City, state, or zip code</small>
                </label>
                <div class="js-focus-state">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="City, state, or zip" aria-label="City, state, or zip" aria-describedby="locationInputAddon">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <span class="fas fa-map-marker-alt" id="locationInputAddon"></span>
                      </span>
                    </div>
                  </div>
                </div>
                <!-- End Input -->
              </div>

              <div class="col-lg-2 align-self-lg-end">
                <button type="submit" class="btn btn-block btn-primary transition-3d-hover">Find Event</button>
              </div>
            </div>
            <!-- End Checkbox -->
          </form>
          <!-- End Search Jobs Form -->
        </div>
      </div>
    </div>
  </div>
</main>
<!-- End Hero Section -->

  <!-- JS Global Compulsory -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
  <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>

  <!-- JS Front -->
  <script src="assets/js/hs.core.js"></script>

  <script>
  $(document).on('ready', function () {
    // initialization of header
    $.HSCore.components.HSHeader.init($('#header'));
  });
</script>
</body>
</html>
