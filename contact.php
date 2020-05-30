<!DOCTYPE html>
<html lang="en">

<head>
  <title>The Mobility Solutions</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Oxygen:400,700" rel="stylesheet">

  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

  <!-- Theme Style -->
  <link rel="stylesheet" href="css/style.css">
  <style>
    .button {
      background-color: #6c757d;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }
  </style>
</head>

<body>

  <header role="banner">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand " href="index.php">The Mobility Solutions</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample05">
          <ul class="navbar-nav pl-md-5 ml-auto">
            <li class="nav-item">
              <a class="nav-link " href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>


        </div>
      </div>
    </nav>
  </header>
  <!-- END header -->

  <div class="top-shadow"></div>

  <div class="inner-page">
    <div class="slider-item" style="background-image: url('images/hero_2.jpg');">

      <div class="container">
        <div class="row slider-text align-items-center justify-content-center">
          <div class="col-md-8 text-center col-sm-12 element-animate pt-5">
            <h1 class="pt-5"><span>Contact Us</span></h1>
            <p class="mb-5 w-75 pl-0">Call Us Directly or Fill Out This Form And We Will Get In Touch With You</p>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- END slider -->
  </div>

  <section class="section border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-5 order-2">
          <form action="functionality/contactact.php" method="post">
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control " required>
              </div>
              <div class="col-md-6 form-group">
                <label for="phone">Phone</label>
                <input type="text" id="phone" name="phone" class="form-control ">
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">

              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control " required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 form-group">
                <label for="message">Write Message</label>
                <textarea name="message" name="message" id="message" class="form-control " cols="30" rows="8" required></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="submit" value="Send Message" class="button px-3 py-3" name="submit">
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-6 order-2 mb-5">
          <div class="row justify-content-right">
            <div class="col-md-8 mx-auto contact-form-contact-info">
              <p class="d-flex">
                <span class="ion-ios-location icon mr-5"></span>
                <span>E-12 Ashoka Nursery, Karnal, Haryana</span>
              </p>

              <p class="d-flex">
                <span class="ion-ios-telephone icon mr-5"></span>
                <span>+91 921 540 1100 </span>
              </p>

              <p class="d-flex">
                <span class="ion-android-mail icon mr-5"></span>
                <span>example@gmail.com</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <footer class="site-footer" role="contentinfo">
    <div class="container">
      <div class="row mb-1">
        <div class="col-md-4 mb-5">
          <h3>About Us</h3>
          <p class="mb-5">We are a Government approved company who aims towards providing mobility to everyone and anyone who needs it. Mobility Solutions modify cars to be hand-controlled for specially-abled (handicapped/disabled) people.</p>
          <ul class="list-unstyled footer-link d-flex footer-social">
            <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
            <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
            <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
            <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
          </ul>

        </div>
        <div class="col-md-5 mb-5 pl-md-5">
          <h3>Contact Info</h3>
          <ul class="list-unstyled footer-link">
            <li class="d-block">
              <span class="d-block">Address:</span>
              <span>E-12 Ashoka Nursery, Karnal, Haryana</span></li>
            <li class="d-block"><span class="d-block">Telephone:</span><span>+91 921 540 1100 </span></li>
            <li class="d-block"><span class="d-block">Email:</span><span>example@gmail.com</span></li>
          </ul>
        </div>
        <div class="col-md-3 mb-5">
          <img src="images/icat.png" alt="ICAT approved">
        </div>
        <div class="col-md-3">

        </div>
      </div>
      <div class="row">
        <div class="col-12 text-md-center text-left">
          <p>

            Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script> All rights reserved | Coded
            with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://instagram.com/tarun_sharma03" target="_blank" class="text-primary">Tarun</a>

          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- END footer -->

  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214" /></svg></div>

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/main.js"></script>

  <script src="js/main.js"></script>

</body>

</html>