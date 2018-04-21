<!-- Including Header -->
<?php
include_once('INCLUDES/header.php');
?>
<!-- Including Header Menu -->
<?php
include_once('INCLUDES/menu.php');
?>


  <!-- Caraousel Section Begins Here -->
<div class="slider-section">
  <div id="overlay-container"></div>
  <div id="main-slider" class="carousel slide align-middle" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#main-slider" data-slide-to="0" class="active"></li>
      <li data-target="#main-slider" data-slide-to="1"></li>
      <!-- <li data-target="#main-slider" data-slide-to="2"></li> -->
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active" style="background-image: url('IMAGES/slider/img-1.jpeg');background-repeat:no-repeat; background-size:cover">
      </div>

      <!-- Slide Two - Set the background image for this slide in the lin below -->
      <div class="carousel-item" style="background-image: url('IMAGES/slider/img-2.jpg'); background-repeat:no-repeat; background-size:cover">
      </div>

      <!-- Slide Three - Set the background image for this slide in the line below -->
      <!-- <div class="carousel-item" style="background-image: url('IMAGES/11.jpg');background-repeat:no-repeat; background-size:cover">
      </div> -->
    </div>

    <a class="carousel-control-prev" href="#main-slider" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#main-slider" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="main-text">
    <div class="col-md-12 text-center  mx-auto">
      <div class="text-center carousel-caption  mb-4" class="white">
        <h3 class="bold">कहीं भी अध्ययन करें. स्मार्ट तरीके से.</h3>
        <p>ळोरेम इप्सुम दोलोर सित अमेत्, चोन्सेच्तेतुर अदिपिस्चिङ एलित्. </p>
      </div>
      <div class="col-md-5 col-lg-5 col-xl-5 mx-auto">
      <form>
        <div class="form-row">
        <div class="col-12 col-md-9 mb-2 mb-md-0"><input class="form-control form-control-lg border-0 br-0" placeholder="कागजात,परीक्षा ....." style="border-radius: 3px 0 0 3px;  padding:10px 30px; font-size: 15px; height: 50px;" type="email" /></div>

        <div class="col-12 col-md-3"><button class="btn btn-block btn-lg btn-secondary border-0 " style="border-radius: 0px 3px 3px 0px !important;height: 50px;font-size:18px; background:#FF6577  " type="submit">खोज करें</button></div>
        </div>
      </form>
      </div>
    </div>
  </div>
</div>







    <!-- Middle Section with three columns  -->
    <div class="container ptb80" id="latest-info-block">

      <div class="row">




        <!-- Image slider section -->
        <div class="col-lg-4 col-sm-12 mt-4">
          <h4 class="left-align title-1">किंवदंतियों के उद्धरण </h4>
          <div id="image-slider" class="carousel slide" >
            <div class="carousel-inner">
              <div class="carousel-item active ">
                <img class="d-block w-100 h-100" src="Slider Images/1 (1).png" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 h-100" src="Slider Images/2 (1).png"  alt="Second slide">
              </div>

              <div class="carousel-item">
                <img class="d-block w-100 h-100" src="Slider Images/3 (2).png" alt="Third slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 h-100" src="Slider Images/4 (2).png" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#image-slider" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#image-slider" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>



        </div>

        <!-- CALENDAR SECTION         -->
        <div class="col-lg-4 col-sm-12 mt-4">
          <h4 class="left-align title-1">आयोजन कैलेंडर</h4>
          <div class=" bg-light border-0 br-0" id="calendar-section">
            <div id="event-calendar"></div>
          </div>
        </div>

        <!-- NOTIFIATIONS CENTER -->
        <div class="col-lg-4 col-sm-12 mt-4">
          <h4 class="left-align title-1">नवीनतम अधिसूचना </h4>
          <div class="border-0 br-0"  id="information-section">
            <ul id="ticker" class="list-unstyled">
              <!-- <h6>Released date: </h6>-->
                <div class="media">
                      <div class="media-left">
                      <img src="IMAGES/newspaper.png" width="45px" height="45px" alt="" class="media-object mCS_img_loaded">
                      </div>
                      <div class="media-body">
                      <h3 class="news-heading">सरकारी भर्तियों पर वक़्त की पाबंदी क्यों नहीं?</h3>
                      </div>
                </div>
                <p>नौकरी सीरीज़ का 28वां अंक आ गया है. जहां परीक्षाएं हो रही है वहां धांधली ...<a href="post.php" class="read-more" >Read More</a>
                </p>
              </li>
              <li>
              <!-- <h6>Released date: </h6>-->
                <div class="media">
                      <div class="media-left">
                      <img src="IMAGES/newspaper.png" width="45px" height="45px" alt="" class="media-object mCS_img_loaded">
                      </div>
                      <div class="media-body">
                      <h3 class="news-heading">सरकारी भर्तियों पर वक़्त की पाबंदी क्यों नहीं?</h3>
                      </div>
                </div>
                <p>नौकरी सीरीज़ का 28वां अंक आ गया है. जहां परीक्षाएं हो रही है वहां धांधली ...<a href="post.php" class="read-more" >Read More</a>
                </p>
              </li>

              <li>
              <!-- <h6>Released date: </h6>-->
                <div class="media">
                      <div class="media-left">
                      <img src="IMAGES/newspaper.png" width="45px" height="45px" alt="" class="media-object mCS_img_loaded">
                      </div>
                      <div class="media-body">
                      <h3 class="news-heading">सरकारी भर्तियों पर वक़्त की पाबंदी क्यों नहीं?</h3>
                      </div>
                </div>
                <p>नौकरी सीरीज़ का 28वां अंक आ गया है. जहां परीक्षाएं हो रही है वहां धांधली ...<a href="post.php" class="read-more" >Read More</a>
                </p>
              </li>

              <li>
              <!-- <h6>Released date: </h6>-->
                <div class="media">
                      <div class="media-left">
                      <img src="IMAGES/newspaper.png" width="45px" height="45px" alt="" class="media-object mCS_img_loaded">
                      </div>
                      <div class="media-body">
                      <h3 class="news-heading">सरकारी भर्तियों पर वक़्त की पाबंदी क्यों नहीं?</h3>
                      </div>
                </div>
                <p>नौकरी सीरीज़ का 28वां अंक आ गया है. जहां परीक्षाएं हो रही है वहां धांधली ...<a href="post.php" class="read-more" >Read More</a>
                </p>
              </li>


            </ul>
          </div>
        </div>
      </div>


    </div>





    <!-- Middle Section with three columns  -->
    <section id="program-tile-section-section">
    <div class="container ptb80" id="program-tile-section">
      <div class="title-2 text-center white">
      मुख्य अनुभाग
      </div>
      <div class="row">
        <!-- <div class="col-lg-12"> -->
          <!-- <div class="col-lg-12">
            <h4 class="text-center heading">हमारे कुछ मुख्य कार्यक्रम्</h4>
              <div class="col-lg-2 offset-lg-5 border-bottom-headline"></div>
          </div> -->

          <div class="col col-lg-3 col-sm-12 float-left mt-4 ">
            <div class="text-center   hoverable program-tile " >
              <a href="test-series.php">
              <div class="program-tile-overlay w100 h100"></div>
              <div class="program-title-content ">
                <img src="IMAGES/ICONS/test.png " alt="Test" class="responsive-img pt20">
                <!-- <div class="pb20"><a href="#" class="flow-text"> टेस्ट श्रृंखला </a></div> -->
              </div>
              <div class="program-title text-center" style="padding:0px 0; ">
                <a href="test-series.php" class="title-1"> टेस्ट श्रृंखला</a>
              </div>
            </a>
            </div>

          </div>

          <div class="col col-lg-3 col-sm-12 float-left mt-4">
            <div class="text-center hoverable  program-tile " >
              <a href="consult-us.php">
              <div class="program-tile-overlay w100 h100"></div>
              <div class="program-title-content ">
                <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20">
                <!-- <div class="pb20"><a href="#" class="flow-text">परामर्श सेवा केन्द्र​ </a></div> -->
              </div>
              <div class="program-title text-center " style=" ">
                <a href="consult-us.php" class="title-1"> परामर्श सेवा केन्द्र​ </a>
              </div>
            </a>
            </div>
          </div>

          <div class="col col-lg-3 col-sm-12 float-left mt-4">
            <div class="text-center hoverable  program-tile " >
              <a href="book-category.php">
              <div class="program-tile-overlay w100 h100"></div>
              <div class="program-title-content ">
                <img src="IMAGES/ICONS/discussion.png " alt="Test" class="responsive-img pt20 ">
                <!-- <div class="pb20"><a href="#" class="flow-text">विचार विमर्श केन्द्र​ </a></div> -->
              </div>
              <div class="program-title text-center" style="padding:0px 0; ">
                <a href="book-category.php" class="title-1"> पुस्तकालय </a>
              </div>
            </a>
            </div>
          </div>

          <div class="col col-lg-3 col-sm-12 float-left mt-4">
            <div class="text-center hoverable  program-tile " >
              <a href="video-series.php">
              <div class="program-tile-overlay w100 h100"></div>
              <div class="program-title-content ">
                <img src="IMAGES/ICONS/classroom.png " alt="Test" class="responsive-img pt20 ">
                <!-- <div class="pb20"><a href="#" class="flow-text">कक्षा कार्यक्रमा </a></div> -->
              </div>
              <div class="program-title text-center" style="padding:0px 0; ">
                <a href="video-series.php" class="title-1"> कक्षा कार्यक्रम </a>
              </div>
            </a>
            </div>
          </div>

        <!-- </div> -->


      </div>
    </div>
  </section>
    <!-- Middle Banner Section -->

    <div id="test-container" class="test-container-class">
      <div class="container p0">
        <div class="title-2 text-center">
         टेस्ट सीरीज़
        </div>
        <div class="row course-card-slider">

 <div class="card course-card hoverable" >
      <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
      <div class="card-body">
      <h5 class="card-title">पीसीएस सामान्य अध्ययन टेस्‍ट।</h5>
      <p class="card-text"><span class="badge badge-secondary">सामान्य अध्ययन प्रश्नोत्तरी</span>
      <div class="date-time font-small">
      Expires on: <span class="ng-binding">March 31, 2018</span>
      </div>

      <a href="" class="syll-info" data-toggle="modal" data-target=".pack-info">Pack Info</a>
        <a href="papers/paper-1.pdf" download class="syll-info float-right" style="padding-top: 1px !important"><i class="fas fa-download"></i> Download</a>
      </p>
      <ul class="list-group list-unstyled">
      <li><span>( 5 + 5 ) </span>Test included in pack</li>
      <!--<li><span>( 5 + 5 ) </span>Test included in pack</li> -->
      </ul>
      </div>
      <div class="card-body">
      <a href="#" class="card-link btn btn-large w-100"><i class="fa fa-rupee-sign"></i> <span class="pack-price">2999</span> - Buy Now</a>

      </div>
      </div>

      <div class="card course-card hoverable">
        <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
        <div class="card-body">
        <h5 class="card-title">पीसीएस सामान्य अध्ययन टेस्‍ट।</h5>
        <p class="card-text"><span class="badge badge-secondary">सामान्य अध्ययन प्रश्नोत्तरी</span>
        <div class="date-time font-small">
        Expires on: <span class="ng-binding">March 31, 2018</span>
        </div>

        <a href="" class="syll-info" data-toggle="modal" data-target=".pack-info">Pack Info</a>
        <a href="papers/paper-1.pdf" download class="syll-info float-right" style="padding-top: 1px !important"><i class="fas fa-download"></i> Download</a>
        
        </p>
        <ul class="list-group list-unstyled">
       <li><span>( 5 + 5 ) </span>Test included in pack</li>
        </ul>
        </div>
        <div class="card-body">
        <a href="#" class="card-link btn btn-large w-100"><i class="fa fa-rupee-sign"></i> <span class="pack-price">2999</span> - Buy Now</a>

        </div>
      </div>

      <div class="card course-card hoverable">
      <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
      <div class="card-body">
      <h5 class="card-title">पीसीएस सामान्य अध्ययन टेस्‍ट।</h5>
      <p class="card-text"><span class="badge badge-secondary">सामान्य अध्ययन प्रश्नोत्तरी</span>
      <div class="date-time font-small">
      Expires on: <span class="ng-binding">March 31, 2018</span>
      </div>

      <a href="" class="syll-info" data-toggle="modal" data-target=".pack-info">Pack Info</a>
        <a href="papers/paper-1.pdf" download class="syll-info float-right" style="padding-top: 1px !important"><i class="fas fa-download"></i> Download</a>
      </p>
      <ul class="list-group list-unstyled">
     <li><span>( 5 + 5 ) </span>Test included in pack</li>
      </ul>
      </div>
      <div class="card-body">
      <a href="#" class="card-link btn btn-large w-100"><i class="fa fa-rupee-sign"></i> <span class="pack-price">2999</span> - Buy Now</a>

      </div>
      </div>

      <div class="card course-card hoverable">
      <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
      <div class="card-body">
      <h5 class="card-title">पीसीएस सामान्य अध्ययन टेस्‍ट।</h5>
      <p class="card-text"><span class="badge badge-secondary">सामान्य अध्ययन प्रश्नोत्तरी</span>
      <div class="date-time font-small">
      Expires on: <span class="ng-binding">March 31, 2018</span>
      </div>

      <a href="" class="syll-info" data-toggle="modal" data-target=".pack-info">Pack Info</a>
        <a href="papers/paper-1.pdf" download class="syll-info float-right" style="padding-top: 1px !important"><i class="fas fa-download"></i> Download</a>
      </p>
      <ul class="list-group list-unstyled">
     <li><span>( 5 + 5 ) </span>Test included in pack</li>
      </ul>
      </div>
      <div class="card-body">
      <a href="#" class="card-link btn btn-large w-100"><i class="fa fa-rupee-sign"></i> <span class="pack-price">2999</span> - Buy Now</a>

      </div>
      </div>

      <div class="card course-card hoverable">
      <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
      <div class="card-body">
      <h5 class="card-title">पीसीएस सामान्य अध्ययन टेस्‍ट।</h5>
      <p class="card-text"><span class="badge badge-secondary">सामान्य अध्ययन प्रश्नोत्तरी</span>
      <div class="date-time font-small">
      Expires on: <span class="ng-binding">March 31, 2018</span>
      </div>

      <a href="" class="syll-info" data-toggle="modal" data-target=".pack-info">Pack Info</a>
        <a href="papers/paper-1.pdf" download class="syll-info float-right" style="padding-top: 1px !important"><i class="fas fa-download"></i> Download</a>
      </p>
      <ul class="list-group list-unstyled">
     <li><span>( 5 + 5 ) </span>Test included in pack</li>
      </ul>
      </div>
      <div class="card-body">
      <a href="#" class="card-link btn btn-large w-100"><i class="fa fa-rupee-sign"></i> <span class="pack-price">2999</span> - Buy Now</a>

      </div>
      </div>



        </div>
      </div>
    </div>


    <!-- HOME PAGE ABOUT US SECTION -->

    <div id="homepage-about-us" class="pt-80 " style="overflow: hidden; padding-bottom:50px;">
        <div class="row">
          <div class="col-lg-12">
            <h4 class="text-center title-2 white">CivilHindiPedia आपकी मदद <br>कैसे कर सकता है?</h4>
            <!-- <div class="col-lg-2 offset-lg-5 border-bottom-headline"></div> -->
          </div>
          <div class="about-us-graphics col-lg-12 text-center mt-4 mb-4" >
            <!-- style="background: url(''); height:300px; width:100% -->
          <img src="IMAGES/graphic-new.png"  alt="">
          </div>

          <!-- <div class="col-lg-6 mt-4" id="about-us-section">
            <div class="">
              <div  class="border-0 white text-center about-us-section-heading" style="padding:10px 50px; margin-bottom:50px;width:40%" style="background-color: #30D5C7 !important;">हमारे बारे में
              </div>
              <div class="arrow-down" style="margin-bottom:50px"></div>

              <p class="text-justify color-light lead">हिंदी माध्यम को पूणर्त: समिपर् त इस मंच का निर्माण हिंदी माध्यम से सिविल सेवा की
              तैयारी करने वाले अभ्यिथर् यों की समस्याओं का समाधान करने व उनकी बेहतर तैयारी
              को सुिनिश्चत करने हेतु किया गया है।
            </p>
            <p class="text-justify color-light lead">यह मंच हिंदी माध्यम के छात्रों को परीक्षा के बदलते स्वरूप के अनुरूप स्वयं में पिरवतर्न
            के लिये मागर्दशर्न प्रदान करेगा तथा वतर्मान वास्तिवकता व आवश्यकता के अनुरूप
            उनकी तैयारी के स्वरूप को गत्यात्मक बनाकर उनके चयन के लिये सवोर्त्कृष्ट प्रयास
            करेगा।
            </p>
            <p class="text-justify color-light lead">इस मंच पर आप संघ लोकसेवा आयोग तथा विभिन्न्न राज्य लोकसेवा आयोगों द्वारा
            आयोिजत की जाने वाली महत्वपूणर् परीक्षाओं की तैयारी कर सकें गे।इस मंच के माध्यम
            से आप अपने घर पर या किसीी भी स्थान पर रहकर अपनी तैयारी को सुगम बना सकते
            हैं।
            </p >
            <p class="text-justify color-light lead">यह मंच उन अभ्यिथर् यों के लिये भी महत्वपूणर् है जो नौकरी छोड़े बिना सिविल सेवा में
            जाने का सपना देखते हैं तथा यह उनके लिये भी महत्व का है जो अपनी तैयारी को
            स्नातक के साथ या उससे पूवर् ही प्रारम्भ करना चाहते हैं।</p>

            </div>
          </div> -->


          <!-- <div class="col-lg-6  mt-4" id="our-features-section" >
            <div class="">
              <div class="border-0 white text-center our-feature-section-heading" style="padding:10px 50px; margin-bottom:50px;width:40%">हमारे उद्देश्य </div>
             <div class="arrow-down" style="margin-bottom:50px"></div>

              <div id="accordion">

                ACORDION NUMBER 1
                <div class="card">
                  <div class="card-header align-middle" id="headingOne">
                    <a role="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <h4 class="accordion-heading header-text ">
                        <i class="fas fa-angle-down fa-1x"></i> सूचना अंतराल की समािप्त
                        </h4>
                    </a>
                  </div>
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                    हिंदी माध्यम के छात्रों के लिए विद्यमान जानकारी के अभाव को समाप्त करना।
                    </div>
                  </div>
                </div>


                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <a role="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                        <h4 class=" accordion-heading header-text ">
                          <i class="fas fa-angle-down fa-1x"></i> एकल बिंदुु समाधान
                        </h4>
                    </a>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                      एक ही मंच पर संघ लोकसेवा आयोग विभन्न राज्य लोकसेवा आयोगों द्वारा आयोिजत की जाने वाली सी महत्वपूणर् परीक्षाओं की तैयारी सुिनिश्चत करना।
                    </div>
                  </div>
                </div>


                <div class="card">
                  <div class="card-header" id="headingThree">
                    <a role="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                        <h4 class=" accordion-heading header-text ">
                          <i class="fas fa-angle-down fa-1x"></i> सम्पूणर् समाधान
                        </h4>
                    </a>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                      परीक्षाओं के किसी एक चरण मात्र पर कें केंद्रित ना होकर सभी चरणों हेतु व्यापक समाधान प्रस्तुत करना ।
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header" id="headingFour">
                    <a role="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                        <h4 class=" accordion-heading header-text ">
                         <i class="fas fa-angle-down fa-1x"></i> सूचना अंतराल की समािप्त
                        </h4>
                    </a>
                  </div>
                  <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                      हिंदी माध्यम के छात्रों के लिए वद्यमान जानकारी के अभाव को समाप्त करना।
                    </div>
                  </div>
                </div>


                <div class="card">
                  <div class="card-header" id="headingFive">
                    <a role="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                        <h4 class=" accordion-heading header-text ">
                          <i class="fas fa-angle-down fa-1x"></i> एकल बिंदुु समाधान
                        </h4>
                    </a>
                  </div>
                  <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body color-light">
                      एक ही मंच पर संघ लोकसेवा आयोग व विभन्न राज्य लोकसेवा आयोगों द्वारा आयोिजत की जाने वाली सभी महत्वपूणर् परीक्षाओं की तैयारी सुिनिश्चत करना।
                    </div>
                  </div>
                </div>


                <div class="card">
                  <div class="card-header" id="headingSix">
                    <a role="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                        <h4 class=" accordion-heading header-text ">
                          <i class="fas fa-angle-down fa-1x"></i> सकारात्मकता
                        </h4>
                    </a>
                  </div>
                  <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                    <div class="card-body">
                      वचार िवमशर् केंद्र के माध्यम से िहंदी माध्यम के छात्रों की  मानिसकता में सकारात्मक पिरवतर्न।
                    </div>
                  </div>
                </div>


              </div>


              </div>
            </div> -->
          </div>
    </div>

    <!-- Testimonial Section -->

    <div id="client-testimonial-section" class=" pb-80 pt-80">

      <div class="container">
        <div class="text-center title-2"> हमारे उपयोगकर्ता हमारे बारे में क्या कहते हैंं </div>
        <div class="row testimonial-card-slider">



          <div class="card testimonial-card ">
            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
            <article class="testimonial_inner" >
              <div class="quote_content">
                <h6><span class=" font-small quote-heading" style="color: #01a2a6;">AWESOME!</span></h6>
                <p class="font-small">Vivamus fermentum ex quis imperdiet sodales. Sed aliquam nibh tellus, a rutrum turpis pellentesque ac. Nulla nibh libero, tincidunt vero eos et accusamus et iusto odio dignissimos ducimus</p>
              </div>
              <div class="quote_info_wrap " ><figure class="quote_image pull-left">
              <img width="60" height="60" style="border-radius:50%"src="http://language-school.cmsmasters.net/wp-content/uploads/2015/07/Depositphotos_40674935_original1.jpg" class="attachment-thumbnail "></figure>
          		<div class="wrap_quote_title pull-left">
            		<h6 class="quote_title">Kira Sims</h6>
                <span class="quote_subtitle">Student</span>
          		</div>
              	</div>
            </article>
          </div>

          <div class="card testimonial-card ">
            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
            <article class="testimonial_inner" >
              <div class="quote_content">
                <h6><span class=" font-small quote-heading" style="color: #F36371;">HIGH QUALITY!</span></h6>
                <p class="font-small">Vivamus fermentum ex quis imperdiet sodales. Sed aliquam nibh tellus, a rutrum turpis pellentesque ac. Nulla nibh libero, tincidunt vero eos et accusamus et iusto odio dignissimos ducimus</p>
              </div>
              <div class="quote_info_wrap " ><figure class="quote_image pull-left">
              <img width="60" height="60" style="border-radius:50%"src="http://language-school.cmsmasters.net/wp-content/uploads/2015/07/Depositphotos_40674935_original1.jpg" class="attachment-thumbnail "></figure>
          		<div class="wrap_quote_title pull-left">
            		<h6 class="quote_title">Kira Sims</h6>
                <span class="quote_subtitle">Student</span>
          		</div>
              	</div>
            </article>
          </div>


          <div class="card testimonial-card ">
            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
            <article class="testimonial_inner" >
              <div class="quote_content">
                <h6><span class=" font-small quote-heading" style="color: #F9BE4D;">VERY GOOD!</span></h6>
                <p class="font-small">Vivamus fermentum ex quis imperdiet sodales. Sed aliquam nibh tellus, a rutrum turpis pellentesque ac. Nulla nibh libero, tincidunt vero eos et accusamus et iusto odio dignissimos ducimus</p>
              </div>
              <div class="quote_info_wrap " ><figure class="quote_image pull-left">
              <img width="60" height="60" style="border-radius:50%"src="http://language-school.cmsmasters.net/wp-content/uploads/2015/07/Depositphotos_40674935_original1.jpg" class="attachment-thumbnail "></figure>
          		<div class="wrap_quote_title pull-left">
            		<h6 class="quote_title">Kira Sims</h6>
                <span class="quote_subtitle">Student</span>
          		</div>
              	</div>
            </article>
          </div>


          <div class="card testimonial-card ">
            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
            <article class="testimonial_inner" >
              <div class="quote_content ">
                <h6><span class=" font-small quote-heading" style="color: #01a2a6;">AWESOME!</span></h6>
                <p class="font-small ">Vivamus fermentum ex quis imperdiet sodales. Sed aliquam nibh tellus, a rutrum turpis pellentesque ac. Nulla nibh libero, tincidunt vero eos et accusamus et iusto odio dignissimos ducimus</p>
              </div>
              <div class="quote_info_wrap " ><figure class="quote_image pull-left">
              <img width="60" height="60" style="border-radius:50%"src="http://language-school.cmsmasters.net/wp-content/uploads/2015/07/Depositphotos_40674935_original1.jpg" class="attachment-thumbnail "></figure>
          		<div class="wrap_quote_title pull-left">
            		<h6 class="quote_title">Kira Sims</h6>
                <span class="quote_subtitle">Student</span>
          		</div>
              	</div>
            </article>
          </div>


          <div class="card testimonial-card ">
            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
            <article class="testimonial_inner" >
              <div class="quote_content">
                <h6><span class=" font-small quote-heading" style="color: #01a2a6;">AWESOME!</span></h6>
                <p class="font-small">Vivamus fermentum ex quis imperdiet sodales. Sed aliquam nibh tellus, a rutrum turpis pellentesque ac. Nulla nibh libero, tincidunt vero eos et accusamus et iusto odio dignissimos ducimus</p>
              </div>
              <div class="quote_info_wrap " ><figure class="quote_image pull-left">
              <img width="60" height="60" style="border-radius:50%"src="http://language-school.cmsmasters.net/wp-content/uploads/2015/07/Depositphotos_40674935_original1.jpg" class="attachment-thumbnail "></figure>
          		<div class="wrap_quote_title pull-left">
            		<h6 class="quote_title">Kira Sims</h6>
                <span class="quote_subtitle">Student</span>
          		</div>
              	</div>
            </article>
          </div>
        </div>
      </div>
    </div>

    <!-- DOWNLOAD NOW BANNER SECTION -->
    <div id="download-now-section" class="">
      <div class="overlay-conatiner-two"></div>
      <div id="download-now-section-content" class="container text-center align-middle">
        <h4 class="white">अपनी परीक्षा की तैयारी अब शुरू करेंं</h4>
        <p  class="white">ळोरेम इप्सुम दोलोर सित अमेत्, चोन्सेच्तेतुर अदिपिस्चिङ एलित्. </p>
        <a href="register.php" class="btn btn-large border-0 white red-color" style="padding:10px 50px">रजिस्टर करें</a>
      </div>
    </div>


    <div id="bkimg" class="container">

    </div>


 

<!-- Including Footer menu -->
<?php
include_once('INCLUDES/footer-menu.php');
?>
<!-- Including Footer -->
<?php
include_once('INCLUDES/footer.php');
?>
