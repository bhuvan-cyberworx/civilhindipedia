<!-- Including Header -->
<?php
include_once('INCLUDES/header.php');
?>
<!-- Including Header Menu -->
<?php
include_once('INCLUDES/menu.php');
?>
<div class="student-dashboard   pb-50">
    <!-- Including student dashboard menu -->
  <?php include_once('sb_includes/sb_menu.php') ?>

	<div class="container p0">
     <div class="row p0">
      
         <!-- Including left student info section -->
         <?php include_once('sb_includes/sb_info.php') ?>

         <div class="col-md-8 sd-right">
             <section>
           
              <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
                  <div class="cs-section-title">
                    <h2>Profile Settings</h2>
                  </div>
                </div>
                <form method="post" action="" enctype="multipart/form-data" class="col-md-12 p0">
                  <div class="row">
                    <div class="cs-field-holder col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="">
                        <label>Full Name</label>
                      </div>
                      <div class="">
                        <div class="cs-field">
                          <input class="" name="name" value="Bhuvan Singh" placeholder="Type Your Full Name" required="" oninvalid="this.setCustomValidity('Type Your Full Name')" oninput="setCustomValidity('')" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="cs-field-holder col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="">
                        <label>Email Address</label>
                      </div>
                      <div class="">
                        <div class="cs-field">
                          <input class="" value="bhuvan.cyberworx@gmail.com" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Type Your Email Address" required="" oninvalid="this.setCustomValidity('Type Your Email Address')" oninput="setCustomValidity('')" type="email">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="cs-field-holder col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="">
                        <label>Date of Birth</label>
                      </div>
                      <div class="">
                        <div class="cs-field">
                          <input name="date" value="0-0-0" placeholder="" type="date">
                        </div>
                      </div>
                    </div>
                    <div class="cs-field-holder col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="">
                        <label>Mobile Number</label>
                      </div>
                      <div class="">
                        <div class="cs-field">
                          <input name="contactnumber" pattern="[0-9]{10,11}" value="" placeholder="Enter Contact Number" type="tel">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="cs-field-holder col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="">
                        <label>Address</label>
                      </div>
                      <div class="">
                        <div class="cs-field">
                          <textarea name="address" placeholder="Enter Address Here"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="cs-field-holder col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="">
                        <label>About Me</label>
                      </div>
                      <div class="">
                        <div class="cs-field">
                          <textarea name="about" placeholder="Write Someting About Yourself.."> 
 
</textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- <div class="row">
                    <div class="cs-field-holder col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="">
                        <label>Preferred Level of Interest</label>
                      </div>
                                            <div class="">
                        <div class="cs-field">
                          <div class="col-md-3 col-xs-6">
                            <input name="interest[]" value="Internship" checked="" type="checkbox">
                            Internship</div>
                          <div class="col-md-3 col-xs-6">
                            <input name="interest[]" value="Advertising" type="checkbox">
                            Advertising</div>
                          <div class="col-md-3 col-xs-6">
                            <input name="interest[]" value="Career" type="checkbox">
                            Career</div>
                          <div class="col-md-3 col-xs-6">
                            <input name="interest[]" value="Psychometric Test" type="checkbox">
                            Psychometric Test</div>
                       
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <div class="row">
                    <div class="cs-field-holder col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="">
                        <label>Profile Image</label>
                      </div>
                      <div class="">
                        <div class="cs-field">
                          <input name="profile_pic" type="file">
                        </div>
                      </div>
                    </div>
                  </div>

                  <div></div>
                  <div class="cs-field-holder">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12"></div>
                    <div class="col-lg-3 col-md-3 col-sm-12 col-md-12">
                      <div class="cs-field">
                        <div class="cs-btn-submit">
                          <input value="Save Changes" type="submit">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12"></div>
                  </div>
                </form>
              </div>
            
            </section>

            <section>
           
              <div class="row mt-4">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0" style="margin-top: 20px;">
                  <div class="cs-section-title">
                    <h2>Change Password</h2>
                  </div>
                </div>
                <form method="post" action="" enctype="multipart/form-data" class="col-md-12 p0">
                  <div class="row">
                    <div class="cs-field-holder col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="">
                        <label>Enter New Password</label>
                      </div>
                      <div class="">
                        <div class="cs-field">
                          <input class="" name="name" value="Bhuvan Singh" placeholder="Type Your Full Name" required="" oninvalid="this.setCustomValidity('Type Your Full Name')" oninput="setCustomValidity('')" type="text">
                        </div>
                      </div>
                    </div>

                    <div class="cs-field-holder col-lg-6 col-md-6 col-sm-12 col-xs-12">
                      <div class="">
                        <label>Confirm New Password</label>
                      </div>
                      <div class="">
                        <div class="cs-field">
                          <input class="" name="name" value="Bhuvan Singh" placeholder="Type Your Full Name" required="" oninvalid="this.setCustomValidity('Type Your Full Name')" oninput="setCustomValidity('')" type="text">
                        </div>
                      </div>
                    </div>

                     <div class="col-lg-3 col-md-3 col-sm-12 col-md-12">
                      <div class="cs-field">
                        <div class="cs-btn-submit">
                          <input value="Change Password" type="submit">
                        </div>
                      </div>
                    </div>


                  </div>
                </form>
              </div>
            </section>
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
