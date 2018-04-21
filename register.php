<?php
include_once('INCLUDES/header.php');
?>

<?php
include_once('INCLUDES/menu.php');
?>
<div class=" register-page" style="background: #fff;">
  <div class="container">
  <div class="row pb-50">
    <div class="col-md-12 pt-50 ">
      <h3 class="civil_authTitle text-center pb-50">Register with <br><span>CivilHindiPedia</span> </h3>
      
    </div>

    <div class="col-md-4 login-graphic offset-md-2">
      <img src="IMAGES/login-graphic.jpg" height="100%" width="100%" alt="">
    </div>

    <div class="civil_register col-md-3 ">
      <!-- <img src="IMAGES/logo-civil.png" class="text-center" alt=""> -->
      <!-- <h3 class="civil_authTitle">Register to CivilPedia with</h3> -->
      <div class="row col-md-12 civil_socialButtons">
            <div class="col-xs-12 col-sm-12 mb-4">
              <a href="#" class="btn btn-lg btn-block civil_btn-facebook">
               <i class="fab fa-facebook"></i>
                <span class="hidden-xs">Facebook</span>
              </a>
            </div>

            <div class="col-xs-12 col-sm-12">
              <a href="#" class="btn btn-lg btn-block civil_btn-google">
                <i class="fab fa-google-plus-g"></i>
                <span class="hidden-xs">Google+</span>
              </a>
            </div>
      </div>

      <div class="row civil_row-sm-offset-3 civil_registerOr">
        <div class="col-xs-12 col-sm-6">
          <hr class="civil_hrOr">
          <span class="civil_spanOr">or</span>
        </div>
      </div>

      <div class="row ">
        <div class="col-xs-12 col-sm-12">
            <form class="civil_registerForm" action="" autocomplete="off" method="POST">
              <!-- <label for="inputUsernameEmail">Full Name</label> -->
              <div class="input-group">
               <span class="input-group-addon"><i class="fa fa-user  "></i></span>
                <!-- <span class="input-group-addon"><i class="fa fa-user"></i></span> -->
                <input type="text" class="form-control" name="username" placeholder="Full Name">
              </div>
              <span class="help-block"></span>

              <!-- <label for="inputPassword">Email Address</label> -->
              <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-envelope-open   "></i></span>
                <!-- <span class="input-group-addon"><i class="fa fa-lock"></i></span> -->
                <input  type="email" class="form-control" name="email-id" placeholder="Email Address">
              </div>
              <span class="help-block"></span>

              <!-- <label for="inputPassword">10 Digit Mobile Number</label> -->
              <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-phone   "></i></span>
                <!-- <span class="input-group-addon"><i class="fa fa-lock"></i></span> -->
                <input  type="text" class="form-control" name="mobile-number" placeholder="10 Digit Mobile Number">
              </div>
              <span class="help-block"></span>

              <!-- <label for="inputPassword">Password</label> -->
              <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-unlock-alt   "></i></span>
                <!-- <span class="input-group-addon"><i class="fa fa-lock"></i></span> -->
                <input  type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <span class="help-block"></span>

              <!-- <label for="inputPassword">Confirm Password</label> -->
              <div class="input-group">
                 <span class="input-group-addon"><i class="fa fa-lock   "></i></span>
                <!-- <span class="input-group-addon"><i class="fa fa-lock"></i></span> -->
                <input  type="password" class="form-control" name="password" placeholder="Confirm Password">
              </div>
              <span class="help-block"></span>
              <div class="g-recaptcha" data-sitekey="your_site_key"></div>




            <button class="btn btn-lg btn-primary btn-block mt-4" type="submit">Register</button>
          </form>
        </div>
        </div>


      <p class="text-center  mar-b0">Already have an account? <a class="ml-4 need-an-acount" href="login.php">Sign In</a></p>
    </div>


</div>

      </div>
</div>

<?php
include_once('INCLUDES/footer-menu-2.php');
?>

<?php
include_once('INCLUDES/footer.php');
?>
