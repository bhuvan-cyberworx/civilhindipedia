<!-- Including Header -->
<?php
include_once('INCLUDES/header.php');
?>
<!-- Including Header Menu -->
<?php
include_once('INCLUDES/menu.php');
?>
<div class="student-dashboard pb-50">
  
  <!-- Including student dashboard menu -->
  <?php include_once('sb_includes/sb_menu.php') ?>

	<div class="container p0">
     <div class="row p0">
         
         <!-- Including left student info section -->
         <?php include_once('sb_includes/sb_info.php') ?>

         <div class="col-md-8 sd-right">
          <div class="title-2 text-left">
              अपनी राय दें
                </div>
             <section>
              <form role="form">
        
          <div class="form-group">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
          </div>
          <div class="form-group">
          <textarea class="form-control" type="textarea" id="message" placeholder="CivilHindiPedia  के बारे में आपको क्या पसंद है?" maxlength="300" rows="7" style="height: 150px !important;"></textarea>

              <span class="help-block"><p id="characterLeft" class="help-block "></p></span>                    
          </div>
                    <div class="form-group">
          <textarea class="form-control" type="textarea" id="message" placeholder="हमें क्या सुधार करना चाहिए?" maxlength="300" rows="7" style="height: 150px !important;"></textarea>
          
              <span class="help-block"><p id="characterLeft" class="help-block "></p></span>                    
          </div>
  
          <div class="cs-btn-submit">
            <input value="Send Feedback" type="submit">
          </div>
        </form>
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
