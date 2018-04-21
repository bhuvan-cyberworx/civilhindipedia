<!-- Including Header -->
<?php
include_once('INCLUDES/header.php');
?>
<!-- Including Header Menu -->
<?php
include_once('INCLUDES/menu.php');
?>
<div class="student-dashboard pb-50 consultation">
  
  <!-- Including student dashboard menu -->
  <?php include_once('sb_includes/sb_menu.php') ?>

	<div class="container p0">
     <div class="row p0">
         
         <!-- Including left student info section -->
         <?php include_once('sb_includes/sb_info.php') ?>

         <div class="col-md-8 sd-right">
             <section>
              <div id="related-courses" class="test-container-class p0" style="padding-top: 0px !important">
                <div class=" p0">
                <div class="title-2 text-left">
                 चालू सत्र
                </div>
                <div class="row ">

                  <div class="card course-card hoverable">
                    <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                    <div class="card-body" >
                    <h5 class="card-title">पीसीएस सामान्य अध्ययन टेस्‍ट।</h5>
                    <p class="card-text"><span class="badge badge-secondary">सामान्य अध्ययन प्रश्नोत्तरी</span>
                    </p>
                    
                    </div>
                    <div class="card-body course-progress session-progress">
                      <p class="badge progress-badge"><strong>Sessions Held - </strong><span>0 of 3</span></p>
                      
                      
                    </div>
                    <div class="card-body">
                    <a href="#" class="card-link btn btn-large w-100">Book Session</a>
                    
                    </div>
                  </div>

               

                  <div class="card course-card hoverable">
                  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                  <div class="card-body" >
                  <h5 class="card-title">पीसीएस सामान्य अध्ययन टेस्‍ट।</h5>
                  <p class="card-text"><span class="badge badge-secondary">सामान्य अध्ययन प्रश्नोत्तरी</span>
                  </p>
                  
                  </div>
                  <div class="card-body course-progress session-progress">
                    <p class="badge progress-badge"><strong>Sessions Held - </strong><span>2 of 4</span></p>
                    
                    
                  </div>
                  <div class="card-body">
                  <a href="#" class="card-link btn btn-large w-100">Book Session</a>


                  </div>
                  </div>

                  
                </div>
                </div>
              </div>
            </section>


            <!-- Completed session -->
            <section>
              <div id="Completed-session" class="test-container-class p0" style="padding-top: 0px !important">
                <div class=" p0">
                <div class="title-2 text-left">
                  पूर्ण सत्र
                </div>
                <div class="row ">

                  <div class="card course-card hoverable ">
                  <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                  <div class="card-body" >
                  <h5 class="card-title">पीसीएस सामान्य अध्ययन टेस्‍ट।</h5>
                  <p class="card-text"><span class="badge badge-secondary">सामान्य अध्ययन प्रश्नोत्तरी</span>
                  </p>
                  
                  </div>
                  <div class="card-body course-progress session-progress">
                   <p class="badge progress-badge"><strong>Sessions Held - </strong><span>4 of 4</span></p>
                   <p class="badge progress-badge "><strong>Sessions Complete</strong></p>
                    
                    
                  </div>
                  <div class="card-body">
                  <a href="#" class="card-link btn btn-large w-100 result-awaited a-disabled">Consultation Complete</a>
                  <a href="#" class="card-link btn btn-large w-100 practice-session ">Download Report</a>
                  
                  </div>
                  </div>

       

                  
                </div>
                </div>
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
