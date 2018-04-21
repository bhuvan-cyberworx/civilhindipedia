<!-- Including Header -->
<?php
include_once('INCLUDES/header.php');
?>
<!-- Including Header Menu -->
<?php
include_once('INCLUDES/menu.php');
?>
<div class="forgot-password-page">
  <div class="container">
  <div class="row pt-50 pb-50">
    <div class="col-md-12">
      <h3 class="civil_authTitle text-center pb-50">Forgot Your Password? </h3>
     <!--  <p>Enter your email id or registered mobile number and we'll send you a link to reset your password.</p> -->
    </div>
  

  <div class="civil_forgot_password col-md-4 offset-md-4 ">
    <!-- <img src="IMAGES/logo-civil.png" class="text-center" alt=""> -->
    


    <div class="row ">
      <div class="col-xs-12 col-sm-12">
          <form class="civil_forgot_passwordForm" action="" autocomplete="off" method="POST">
            <!-- <label for="inputUsernameEmail">Username or email</label> -->
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-envelope-open "></i></span>
            <!-- <span class="input-group-addon"><i class="fa fa-user"></i></span> -->
            <input type="email" class="form-control text-center" name="email" placeholder="Reset Password Using Email Id" >
          </div>
          <span class="help-block"></span>
          <!-- <label for="inputPassword">Password</label> -->


          <div class="row civil_row-sm-offset-3 civil_forgot_passwordOr">
            <div class="col-xs-12 col-sm-6">
              <hr class="civil_hrOr">
              <span class="civil_spanOr">or</span>
            </div>
          </div>


          <div class="input-group">
            <!-- <span class="input-group-addon"><i class="fa fa-lock"></i></span> -->
            <span class="input-group-addon"><i class="fa fa-phone "></i></span>
            <input  type="text" class="form-control text-center" name="mobile_number" placeholder="Reset Password Using Mobile Number">
          </div>
            <span class="help-block"></span>

          <button class="btn btn-lg btn-primary btn-block mt-4" type="submit">Reset Password</button>
        </form>
      </div>
      </div>


    <p class="text-center  mar-b0">Need an account? <a class="ml-4 need-an-acount" href="register.php">Sign Up</a></p>
</div>


</div>
      </div>
</div>

<!-- Including Footer menu -->
<?php
include_once('INCLUDES/footer-menu-2.php');
?>
<!-- Including Footer -->
<?php
include_once('INCLUDES/footer.php');
?>
