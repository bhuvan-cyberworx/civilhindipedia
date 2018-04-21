<!-- Including Header -->
<?php
include_once('INCLUDES/header.php');
?>
<!-- Including Header Menu -->
<?php
include_once('INCLUDES/menu.php');
?>
<div class=" login-page" style="background: #fff;">
  <div class="container">
  <div class="row pt-50 pb-50">
    <div class="col-md-12">
      <h3 class="civil_authTitle text-center pb-50">Login into <br><span>CivilHindiPedia</span> </h3>
    </div>
  
  <div class="col-md-4 login-graphic offset-md-2">
    <img src="IMAGES/login-graphic.jpg" height="100%" width="100%" alt="">
  </div>
  <div class="civil_login col-md-3 ">
    <!-- <img src="IMAGES/logo-civil.png" class="text-center" alt=""> -->
    
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

    <div class="row civil_row-sm-offset-3 civil_loginOr">
      <div class="col-xs-12 col-sm-6">
        <hr class="civil_hrOr">
        <span class="civil_spanOr">or</span>
      </div>
    </div>

    <div class="row ">
      <div class="col-xs-12 col-sm-12">
          <form class="civil_loginForm" action="" autocomplete="off" method="POST">
            <!-- <label for="inputUsernameEmail">Username or email</label> -->
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user  "></i></span>
            <!-- <span class="input-group-addon"><i class="fa fa-user"></i></span> -->
            <input type="text" class="form-control" name="username" placeholder="Email or Mobile Number" >
          </div>
          <span class="help-block"></span>
          <!-- <label for="inputPassword">Password</label> -->
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-unlock-alt "></i></span>
            <!-- <span class="input-group-addon"><i class="fa fa-lock"></i></span> -->
            <input  type="password" class="form-control" name="password" placeholder="Your Password">
          </div>
            <span class="help-block"></span>

              <div class="col-md-12  mb-4 text-left">
                <p class="civil_forgotPwd text-left">
                  <a href="forgot-password.php">Forgot password?</a>
                </p>
              </div>

          
          <a href="dashboard.php"><button class="btn btn-lg btn-primary btn-block mt-4" type="submit">Login</button></a>
        </form>
      </div>
      </div>


    <p class="text-center  mar-b0">Need an account? <a class="ml-4 need-an-acount" href="register.php"   >Sign Up</a></p>
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
