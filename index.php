<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">

<!-- google font Madimi One-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Madimi+One&family=Pacifico&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet"><!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Lora:ital,wght@0,400..700;1,400..700&family=Pacifico&display=swap" rel="stylesheet">

    <title>CozyLease</title>
</head>
<body>
<!-- Start Navigation -->
      <nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">CozyLease</a>
          <span class="navbar-text">Solutions for house rentals</span>
          <button class="navbar-toggler" type="button" 
              data-toggle="collapse" 
              data-target="#navbarNavAltMarkup" 
              aria-controls="navbarNavAltMarkup" 
              aria-expanded="false" 
              aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav custom-nav pl-5">
              <li class="nav-item custom-nav-item"><a href="house.php" class="nav-link">House</a></li>
              <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Apartment</a></li>
              <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Business Solution</a></li>
              <li class="nav-item custom-nav-item"><a href="#" class="nav-link">Manage Rentals</a></li>
            </ul>
            <div class="btn-group" role="group" aria-label="Basic example" float-end>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Clientllogin">
                      Login 
                    </button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ClientlSignUp">
                      Sign Up
                    </button>
              </div>
          </div>
        </div>
      </nav>
<!-- End Navigation -->

<!-- Start video background -->
<div class="container-fluid remove-vid-marg">
  <div class="vid-parent"></div>
    <div>
      <video playinline autoplay muted loop>
        <source src="video/clipbackground.mp4" >
      </video>
      <div class="vid-overlay"></div>
    </div>
    <div class="vid-content">
      <h1 class="my-content"> Welcome to CozyLease </h1>
      <!-- <small class="my-content">Find your ideal place</small>
      <a href= "#" class="btn btn-danger"> Start now</a> -->
      <form class="d-flex" role="search">
        <input class="form-control me-8" type="search" placeholder="Find your ideal place" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
</div>
<!-- End video -->

<!-- Start banner -->
<div class="container-fluid bg-danger text-banner">
  <div class="row bottom-banner" >
    <div class="col-sm">
        <h2>
          Properties for you
          
        </h2>
        <h3>Find the ideal location, schedule a visit, or get in touch for additional information.</h3>
        
    </div>
  </div>

</div>
<!-- End Banner -->
<!--  Start most place for rent  -->

<div class="container mt-5">
  <h1 class="text-center text-white ">Greatest place for a rental</h1>
  <!-- Start most choice to rent card deck -->
  <div class="card-group">
  <div class="card">
    <img src="image/img_card/hinh-anh-thuc-te-toa-S1-S2-so-8_1634963662.jpg" class="card-img-top" alt="Vinhomes Smart City">
    <div class="card-body">
      <h5 class="card-title">Vinhomes Smart City </h5>
      <p class="card-text">World-class utility city in the core of My Dinh district is the best place for Vietnamese global citizens living and working in Hanoi as well as the international community.</p>
    </div>
    <div class="card-footer">
          <p class="card-text d-inline">More Details</p>
          <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Location</a>
    </div>
  </div>
  <div class="card">
    <img src="image/img_card/glory-heights-2-2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Vinhomes GrandPark</h5>
      <p class="card-text">The world-class smart metropolis is 
                      run utilizing proven models from across the globe, 
                      including those from Singapore, Songdo, Korea, Fujisawa, Japan, 
                      and other smart cities in Europe and America.</p>
    </div>
    <div class="card-footer">
          <p class="card-text d-inline">More Details</p>
          <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Location</a>
    </div>
  </div>
  <div class="card">
    <img src="image/img_card/Bcons-Sala-binh-duong-2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Eastern Bcons</h5>
      <p class="card-text">Nestled next to the Ben Thanh - Suoi Tien Metro Station line, at a superb location directly at the entrance of the National University Community.</p>
    </div>
    <div class="card-footer">
          <p class="card-text d-inline">More Details</p>
          <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Location</a>
    </div>
  </div>
</div>
</div>
<!-- end card group -->
<!-- Start Contact us -->
    <?php
      include('./contact.php')
    ?>
<!-- End Contact us -->
 

<!-- Sign up form  ----------------------------------->
<!-- Modal -->
<div class="modal fade" id="ClientlSignUp" tabindex="-1" aria-labelledby="ClientlSignUpLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ClientlSignUpLabel">Renter Registration</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<!-- end of modal -->

        <form>
          <div class="form-group">
            <!-- <i class="fas fa-user"></i> -->
            <label for="stuname" class="pl-2 font-weight-bold">Name</label>
            <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" 
            id="exampleInputEmail1"
            aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text
            text-muted"> We'll never share your email with anyone else.
            </small>
          </div>
          <label for="inputPassword5" class="form-label">Password</label>
              <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
              <div id="passwordHelpBlock" class="form-text">
                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
          </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Sign Up</button>
      </div>
    </div>
  </div>
</div>
<!-------------- Sign up form  ------------------------>
<!-- Login form  ----------------------------------->
<!-- Modal -->
<div class="modal fade" id="Clientllogin" tabindex="-1" aria-labelledby="ClientlloginLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="ClientlloginLabel">Renter Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<!-- end of modal -->

        <form id="ClientLoginForm" >
          <!-- <div class="form-group">
            <label for="stuname" class="pl-2 font-weight-bold">Name</label>
            <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
          </div> -->
          <div class="form-group">
            <label for="ClientLoginMail">Email address</label>
            <input type="email" class="form-control" placeholder="Email" name="ClientLoginMail"
            id="ClientLoginMail"
            aria-describedby="emailHelp">
          </div>
          <label for="ClientLoginPass" class="form-label">Password</label>
              <input type="password" id="ClientLoginPass" class="form-control" placeholder="Password" name="ClientLoginPass" aria-describedby="passwordHelpBlock">
              <div id="passwordHelpBlock" class="form-text">
                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
          </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="ClientLoginBtn">Login</button>
      </div>
    </div>
  </div>
</div>
<!-------------- Login form  ------------------------>


<!-- AdminLogin Modal -->
<!-- Modal -->
<div class="modal fade" id="adminLogin" tabindex="-1" aria-labelledby="adminLoginLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="adminLoginLabel">Admin Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<!-- end of modal -->

        <form id="adminLoginForm" >
          <!-- <div class="form-group">
            <label for="stuname" class="pl-2 font-weight-bold">Name</label>
            <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
          </div> -->
          <div class="form-group">
            <label for="adminLoginMail">Email address</label>
            <input type="email" class="form-control" placeholder="Email" name="adminLoginMail"
            id="adminLoginMail"
            aria-describedby="emailHelp">
          </div>
          <label for="adminLoginPass" class="form-label">Password</label>
              <input type="password" id="adminLoginPass" class="form-control" placeholder="Password" name="adminLoginPass" aria-describedby="passwordHelpBlock">
              <div id="passwordHelpBlock" class="form-text">
                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
          </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="adminLoginBtn">Login</button>
      </div>
    </div>
  </div>
</div>
<!--------------Admin Login form  ------------------------>


<!-- Start footer -->
<footer class="container-fluid bg-dark text-center p-2">
    <small  class="text-white">Copyright &copy; 2019 || Designed By DEV Trung Nghia || <a href="#login" data-bs-toggle="modal" data-bs-target="#adminLogin">Admin Login</a>
    </small>
</footer>
<!-- End Footer -->





<script> src="js/jquery.min.js" </script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/all.min.js"></script>
</body>
</html>



