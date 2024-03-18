<!-- START header -->
<?php
  include('mainPart/header.php')
?>
<!-- END HEADER -->
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
<!-- Footer -------------------------------------->
<?php
include('mainPart/footer.php')
?>
<!-- ENd footer ----------------------------------- -->