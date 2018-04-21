<!-- Including Header -->
<?php
include_once('INCLUDES/header.php');
?>
<!-- Including Header Menu -->
<?php
include_once('INCLUDES/menu.php');
?>
<div class="verify-number-page pt-50  pb-50">
<div class="container be-detail-container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <br>
            <img src="https://cdn2.iconfinder.com/data/icons/luchesa-part-3/128/SMS-512.png" class="img-responsive" style="width:100px; height:100px;margin:0 auto;"><br>
            
            <h1 class="text-center m0 p0">Verify your mobile number</h1><br>
            <p class="lead text-center" >8989858989</p><p class=" text-center"> Please enter the 4 digit OTP <br>below for Successful Registration</p>  <p></p>
        <br>
       
            <form method="post" id="veryfyotp" action="" class="col-sm-8 offset-sm-2">
                <div class="row">                    
                <div class="form-group col-sm-9">
                   <span style="color:red;"></span><input type="text" class="form-control" name="otp" placeholder="Enter your OTP number" required="">
                </div>
                <button type="submit" class="btn btn-primary  pull-right col-sm-3">Verify</button>
                </div>
            </form>
            <div class="text-center">Didn't recieved OTP? <a href="" class="resend-otp">Resend Now</a></div>
        <br><br>
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
