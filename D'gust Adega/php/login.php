<!doctype html>
<html lang="en">

<head>
  <link rel="icon" href="./resources/icons/WineGlass2.svg" type="image/x-icon"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <link href="./frontend/css/style.css" rel="stylesheet">
  <title>D'Gust Adega</title>



  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
    integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
    integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    /* GLOBAL STYLES
    --------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-top: 3rem;
      padding-bottom: 3rem;
      color: #5a5a5a;
    }


    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------- */

    /* Carousel base class */
    .carousel {
      margin-bottom: 4rem;
    }

    /* Since positioning the image, we need to help out the caption */
    .carousel-caption {
      bottom: 3rem;
      z-index: 10;
    }

    /* Declare heights because of positioning of img element */
    .carousel-item {
      height: 32rem;
    }

    .carousel-item>img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 32rem;
    }


    /* MARKETING CONTENT
-------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .col-lg-4 {
      margin-bottom: 1.5rem;
      text-align: center;
    }

    .marketing h2 {
      font-weight: 400;
    }

    .marketing .col-lg-4 p {
      margin-right: .75rem;
      margin-left: .75rem;
    }


    /* Featurettes
------------------------- */

    .featurette-divider {
      margin: 5rem 0;
      /* Space out the Bootstrap <hr> more */
    }

    /* Thin out the marketing headings */
    .featurette-heading {
      font-weight: 300;
      line-height: 1;
      letter-spacing: -.05rem;
    }


    /* RESPONSIVE CSS
-------------------------------------------------- */

    @media (min-width: 40em) {

      /* Bump up size of carousel content */
      .carousel-caption p {
        margin-bottom: 1.25rem;
        font-size: 1.25rem;
        line-height: 1.4;
      }

      .featurette-heading {
        font-size: 50px;
      }
    }

    @media (min-width: 62em) {
      .featurette-heading {
        margin-top: 7rem;
      }
    }
  </style>

  <link href="./frontend/css/style.css" rel="stylesheet">
</head>

<body>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">D'Gust Adega</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto mb-2 mb-md-0">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html" tabindex="-1" aria-disabled="true">Contact</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
  </header>
  <br>  
  <!-- required bootstrap js -->

  
  <main class="px-3 text-center">
    <h1>About ours wines.</h1><br>
    <p class="lead">Login in our website.</p>
    <h3>Click here: </h3> <button type="submit" name="commit" class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#login">
  Login/Signup
</button>
<div class="modal fade" id="login" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Login</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">
              <i class="fa fa-envelope"></i>
            </span>
          </div>
          <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">
              <i class="fa fa-lock"></i>
            </span>
          </div>
          <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
        </div>
        <button type="submit" name="commit" class="btn btn-primary btn-lg btn-block">
          <span>Login <i class="fa fa-sign-in"></i></span>
        </button>
        <div class="text-center">
          <a class="" href="" data-dismiss="modal" data-toggle="modal" data-target="#signup">Signup</a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="signup" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Signup</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">
              <i class="fa fa-user"></i>
            </span>
          </div>
          <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">
              <i class="fa fa-envelope"></i>
            </span>
          </div>
          <input type="text" class="form-control" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">
              <i class="fa fa-lock"></i>
            </span>
          </div>
          <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-sm">
              <i class="fa fa-lock"></i>
            </span>
          </div>
          <input type="text" class="form-control" placeholder="Password confirmation" aria-label="Password confirmation" aria-describedby="basic-addon1">
        </div>
        <button type="submit" name="commit" class="btn btn-primary btn-lg btn-block">
          <span>Signup <i class="fa fa-sign-in"></i></span>
        </button>
        <div class="text-center">
          <a class="" href="" data-dismiss="modal" data-toggle="modal" data-target="#login">Login</a>
        </div>
      </div>
    </div>
  </div>
</div>

  </main>

      <hr class="featurette-divider">

    <!-- FOOTER -->
    <footer class="container">
      <p>&copy; 2022 D'Gust Adega, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
  </main>



</body>

</html>