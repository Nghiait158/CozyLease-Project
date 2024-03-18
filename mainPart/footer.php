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



