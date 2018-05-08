<!-- Including Header -->
<?php
include_once('INCLUDES/header.php');
?>
<!-- Including Header Menu -->
<?php
include_once('INCLUDES/menu.php');
?>
<head>
  <link rel="stylesheet" href="css/vertical-slider.css">
</head>
<div class="test-series">
<section>
  <div class="page-section" style="border-bottom:1px solid #f4f4f4;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p0">
        <ul class="cs-breadcrumb">
          <li><a href="">Home</a></li>
          <li>
            Test Series         </li>
        </ul>
      </div>
    </div>
  </div>
</div>
</section>

<section style="width: 100%; overflow-x: hidden;">
  <div class="course-banner text-center"   style="background-image: url('IMAGES/video-series.jpg');">
  <div class="courser-banner-overlay-fill"></div>
  <div class="courser-banner-content">
    <div class="banner-content-container">
      <h1 class="heading-small  white ">Video Tutorials</h1>
      </div><!-- end ngIf: !tbExam.isLoggedIn -->
    </div>
  </div>

</section>

<!-- <section id="tutorial-nav-id" class="pb-50">
  <div class="sticky-top course-nav " style="">
  <ul class="nav nav-tabs justify-content-center" role="tablist">
    <li role="presentation" ><a href="#objective" aria-controls="objective" role="tab" data-toggle="tab" class="tab active-tab">उद्देश्य परीक्षाएं (Objective Exams)</a></li>
    <li role="presentation"><a href="#subjective" aria-controls="subjective" role="tab" data-toggle="tab" class="tab">विषयक परीक्षाएं (Subjective Exams)</a></li>
    
   
  </ul>
  </div>
</section> -->
<div id="video-series-page">
<div class="tab-content ">
<div role="tabpanel" class="tab-pane active row" id="objective">

<div class="container pb-50 pt-50" id="exam-filter">
  <h2 class="text-center mb-4" style="color: #292f33;font-size: 26px;">भारत में प्रतियोगी परीक्षाओं के लिए ऑनलाइन टेस्ट सीरीज़ और फ्री मॉक टेस्ट</h2>
  <p class="text-center pb20" style="font-size: 16px; color: #5A6779;  font-weight: 400;">भारत में सबसे लोकप्रिय प्रतियोगी परीक्षाओं को दरकिनार करने के लिए टेस्टबुक के साथ अपनी परीक्षा की <br>तैयारी बढ़ाएं अपना कोर्स चुनें और आरंभ करें।</p>
    <div>
      <ul class="list-inline list-unstyled justify-content-center" id="exam-filter-list-1"  >
        <li class="list-inline-item"><a class="btn btn-primary filter-button filter-active" data-filter="all">All</a></li>
        
        <li class="list-inline-item"><a class="btn btn-default filter-button" data-filter="upsc">UPSC</a></li>
        
        <li class="list-inline-item"><a class="btn btn-default filter-button" data-filter="state-pcs">UPPCS</a></li>
        <li class="list-inline-item"><a class="btn btn-default filter-button" data-filter="examone">UKPCS</a></li>
        <li class="list-inline-item"><a class="btn btn-default filter-button" data-filter="state-pcs">MPPCS</a></li>
        <li class="list-inline-item"><a class="btn btn-default filter-button" data-filter="state-pcs">BPCS</a></li>
        <li class="list-inline-item"><a class="btn btn-default filter-button" data-filter="state-pcs">RPCS</a></li>
        <li class="list-inline-item"><a class="btn btn-default filter-button" data-filter="state-pcs">CGPCS</a></li>
        <li class="list-inline-item"><a class="btn btn-default filter-button" data-filter="state-pcs">HPCS</a></li>
        <li class="list-inline-item"><a class="btn btn-default filter-button" data-filter="state-pcs">JPSC</a></li>
        <li class="list-inline-item"><a class="btn btn-default filter-button" data-filter="state-pcs">HPPCS</a></li>
        
      </ul>
        
    </div>
    <br/>
    
    <div class="row">
        
       <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 filter state-pcs" data-aos="fade-right">
         <a href="video-series-category.php">
          <div class="card text-center"  style="background: #f5f5f5;">
            <!-- <img class="card-img-top" src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%"> -->
            <div class="card-block p5">
                <!-- <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20"> -->
                <h4 class="card-title related-post-title text-center p0 m0">सिविल सेवा परीक्षा</h4><h4 class="card-title related-post-title text-center english-title">(IAS)</h4>
                
            </div>
         </div>
       </a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 filter upsc" data-aos="fade-right">
         <a href="video-series-category.php">
          <div class="card text-center"  style="background: #f5f5f5;">
            <!-- <img class="card-img-top" src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%"> -->
            <div class="card-block p5">
                <!-- <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20"> -->
                <h4 class="card-title related-post-title text-center p0 m0">भारतीय वन सेवा</h4><h4 class="card-title related-post-title text-center english-title">(IFoS)</h4>
                
            </div>
         </div>
       </a>
      </div>


      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 filter upsc" data-aos="fade-right">
         <a href="video-series-category.php">
          <div class="card text-center"  style="background: #f5f5f5;">
            <!-- <img class="card-img-top" src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%"> -->
            <div class="card-block p5">
                <!-- <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20"> -->
                <h4 class="card-title related-post-title text-center p0 m0">संयुक्त रक्षा सेवाएं</h4><h4 class="card-title related-post-title text-center english-title">(CDS)</h4>
                
            </div>
         </div>
       </a>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 filter upsc" data-aos="fade-right">
         <a href="video-series-category.php">
          <div class="card text-center"  style="background: #f5f5f5;">
            <!-- <img class="card-img-top" src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%"> -->
            <div class="card-block p5">
                <!-- <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20"> -->
                <h4 class="card-title related-post-title text-center p0 m0">राष्ट्रीय रक्षा अकादमी</h4><h4 class="card-title related-post-title text-center english-title">(NDA)</h4>
                
            </div>
         </div>
       </a>
      </div>


      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 filter upsc" data-aos="fade-right">
         <a href="video-series-category.php">
          <div class="card text-center"  style="background: #f5f5f5;">
            <!-- <img class="card-img-top" src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%"> -->
            <div class="card-block p5">
                <!-- <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20"> -->
                <h4 class="card-title related-post-title text-center p0 m0">केंद्रीय सशस्त्र पुलिस बलों</h4><h4 class="card-title related-post-title text-center english-title">(CAPF)</h4>
                
            </div>
         </div>
       </a>
      </div>


      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 filter upsc" data-aos="fade-right">
         <a href="video-series-category.php">
          <div class="card text-center"  style="background: #f5f5f5;">
            <!-- <img class="card-img-top" src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%"> -->
            <div class="card-block p5">
                <!-- <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20"> -->
                <h4 class="card-title related-post-title text-center p0 m0">सहायक भविष्य निधि आयुक्त</h4><h4 class="card-title related-post-title text-center english-title">(APFC)</h4>
                
            </div>
         </div>
       </a>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 filter examone" data-aos="fade-right">
         <a href="video-series-category.php">
          <div class="card text-center"  style="background: #f5f5f5;">
            <!-- <img class="card-img-top" src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%"> -->
            <div class="card-block p5">
                <!-- <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20"> -->
                <h4 class="card-title related-post-title text-center p0 m0">इतिहास</h4><h4 class="card-title related-post-title text-center english-title">(History)</h4>
                
            </div>
         </div>
       </a>
      </div>

           <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 filter state-pcs" data-aos="fade-right">
         <a href="video-series-category.php">
          <div class="card text-center"  style="background: #f5f5f5;">
            <!-- <img class="card-img-top" src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%"> -->
            <div class="card-block p5">
                <!-- <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20"> -->
                <h4 class="card-title related-post-title text-center p0 m0">इतिहास</h4><h4 class="card-title related-post-title text-center english-title">(History)</h4>
                
            </div>
         </div>
       </a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 filter upsc" data-aos="fade-right">
         <a href="video-series-category.php">
          <div class="card text-center"  style="background: #f5f5f5;">
            <!-- <img class="card-img-top" src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%"> -->
            <div class="card-block p5">
                <!-- <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20"> -->
                <h4 class="card-title related-post-title text-center p0 m0">इतिहास</h4><h4 class="card-title related-post-title text-center english-title">(History)</h4>
                
            </div>
         </div>
       </a>
      </div>


      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 filter state-pcs" data-aos="fade-right">
         <a href="video-series-category.php">
          <div class="card text-center"  style="background: #f5f5f5;">
            <!-- <img class="card-img-top" src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%"> -->
            <div class="card-block p5">
                <!-- <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20"> -->
                <h4 class="card-title related-post-title text-center p0 m0">इतिहास</h4><h4 class="card-title related-post-title text-center english-title">(History)</h4>
                
            </div>
         </div>
       </a>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 filter state-pcs" data-aos="fade-right">
         <a href="video-series-category.php">
          <div class="card text-center"  style="background: #f5f5f5;">
            <!-- <img class="card-img-top" src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%"> -->
            <div class="card-block p5">
                <!-- <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20"> -->
                <h4 class="card-title related-post-title text-center p0 m0">इतिहास</h4><h4 class="card-title related-post-title text-center english-title">(History)</h4>
                
            </div>
         </div>
       </a>
      </div>


      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 filter upsc" data-aos="fade-right">
         <a href="video-series-category.php">
          <div class="card text-center"  style="background: #f5f5f5;">
            <!-- <img class="card-img-top" src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%"> -->
            <div class="card-block p5">
                <!-- <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20"> -->
                <h4 class="card-title related-post-title text-center p0 m0">इतिहास</h4><h4 class="card-title related-post-title text-center english-title">(History)</h4>
                
            </div>
         </div>
       </a>
      </div>


      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 filter upsc" data-aos="fade-right">
         <a href="video-series-category.php">
          <div class="card text-center"  style="background: #f5f5f5;">
            <!-- <img class="card-img-top" src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%"> -->
            <div class="card-block p5">
                <!-- <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20"> -->
                <h4 class="card-title related-post-title text-center p0 m0">इतिहास</h4><h4 class="card-title related-post-title text-center english-title">(History)</h4>
                
            </div>
         </div>
       </a>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 filter examone" data-aos="fade-right">
         <a href="video-series-category.php">
          <div class="card text-center"  style="background: #f5f5f5;">
            <!-- <img class="card-img-top" src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%"> -->
            <div class="card-block p5">
                <!-- <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20"> -->
                <h4 class="card-title related-post-title text-center p0 m0">इतिहास</h4><h4 class="card-title related-post-title text-center english-title">(History)</h4>
                
            </div>
         </div>
       </a>
      </div>
        
    </div>
</div>
</div>
<!-- End Objective test -->

<div role="tabpanel" class="tab-pane  row" id="subjective">

<div class="container pb-50" id="exam-filter">
  <h2 class="text-center mb-4" style="color: #292f33;font-size: 26px;">भारत में प्रतियोगी परीक्षाओं के लिए ऑनलाइन टेस्ट सीरीज़ और फ्री मॉक टेस्ट</h2>
  <h2>Subjective test </h2>
  <p class="text-center pb20" style="font-size: 16px; color: #5A6779;  font-weight: 400;">भारत में सबसे लोकप्रिय प्रतियोगी परीक्षाओं को दरकिनार करने के लिए टेस्टबुक के साथ अपनी परीक्षा की <br>तैयारी बढ़ाएं अपना कोर्स चुनें और आरंभ करें।</p>
    <div>
      <ul class="list-inline list-unstyled justify-content-center" id="exam-filter-list-2"  >
        <li class="list-inline-item"><a class="btn btn-primary filter-button filter-active" data-filter="all">All</a></li>
        
        <li class="list-inline-item"><a class="btn btn-default filter-button" data-filter="upsc">UPSC</a></li>
        <li class="list-inline-item"><a class="btn btn-default filter-button" data-filter="state-pcs">STATE PCS</a></li>

        <li class="list-inline-item">
          <div class="dropdown" id="more-exams" >
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">More
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a class="btn btn-default filter-button" data-filter="examone">Exam One</a></li>
              <li><a class="btn btn-default filter-button" data-filter="state-pcs">Exam Two</a></li>
              <li><a class="btn btn-default filter-button" data-filter="state-pcs">ETC</a></li>
            </ul>
          </div>
        </li>
        
      </ul>
        
    </div>
    <br/>
    
    <div class="row">
        
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 filter state-pcs" data-aos="fade-right">
         <a href="video-series-category.php">
          <div class="card text-center"  style="background: #f5f5f5;">
            <!-- <img class="card-img-top" src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%"> -->
            <div class="card-block p5">
                <!-- <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20"> -->
                <h4 class="card-title related-post-title text-center p0 m0">इतिहास</h4><h4 class="card-title related-post-title text-center english-title">(History)</h4>
                
            </div>
         </div>
       </a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 filter upsc" data-aos="fade-right">
         <a href="video-series-category.php">
          <div class="card text-center"  style="background: #f5f5f5;">
            <!-- <img class="card-img-top" src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%"> -->
            <div class="card-block p5">
                <!-- <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20"> -->
                <h4 class="card-title related-post-title text-center p0 m0">इतिहास</h4><h4 class="card-title related-post-title text-center english-title">(History)</h4>
                
            </div>
         </div>
       </a>
      </div>


      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 filter state-pcs" data-aos="fade-right">
         <a href="video-series-category.php">
          <div class="card text-center"  style="background: #f5f5f5;">
            <!-- <img class="card-img-top" src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%"> -->
            <div class="card-block p5">
                <!-- <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20"> -->
                <h4 class="card-title related-post-title text-center p0 m0">इतिहास</h4><h4 class="card-title related-post-title text-center english-title">(History)</h4>
                
            </div>
         </div>
       </a>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 filter state-pcs" data-aos="fade-right">
         <a href="video-series-category.php">
          <div class="card text-center"  style="background: #f5f5f5;">
            <!-- <img class="card-img-top" src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%"> -->
            <div class="card-block p5">
                <!-- <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20"> -->
                <h4 class="card-title related-post-title text-center p0 m0">इतिहास</h4><h4 class="card-title related-post-title text-center english-title">(History)</h4>
                
            </div>
         </div>
       </a>
      </div>


      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 filter upsc" data-aos="fade-right">
         <a href="video-series-category.php">
          <div class="card text-center"  style="background: #f5f5f5;">
            <!-- <img class="card-img-top" src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%"> -->
            <div class="card-block p5">
                <!-- <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20"> -->
                <h4 class="card-title related-post-title text-center p0 m0">इतिहास</h4><h4 class="card-title related-post-title text-center english-title">(History)</h4>
                
            </div>
         </div>
       </a>
      </div>


      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 filter upsc" data-aos="fade-right">
         <a href="video-series-category.php">
          <div class="card text-center"  style="background: #f5f5f5;">
            <!-- <img class="card-img-top" src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%"> -->
            <div class="card-block p5">
                <!-- <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20"> -->
                <h4 class="card-title related-post-title text-center p0 m0">इतिहास</h4><h4 class="card-title related-post-title text-center english-title">(History)</h4>
                
            </div>
         </div>
       </a>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 filter examone" data-aos="fade-right">
         <a href="video-series-category.php">
          <div class="card text-center"  style="background: #f5f5f5;">
            <!-- <img class="card-img-top" src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%"> -->
            <div class="card-block p5">
                <!-- <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20"> -->
                <h4 class="card-title related-post-title text-center p0 m0">इतिहास</h4><h4 class="card-title related-post-title text-center english-title">(History)</h4>
                
            </div>
         </div>
       </a>
      </div>

           <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 filter state-pcs" data-aos="fade-right">
         <a href="video-series-category.php">
          <div class="card text-center"  style="background: #f5f5f5;">
            <!-- <img class="card-img-top" src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%"> -->
            <div class="card-block p5">
                <!-- <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20"> -->
                <h4 class="card-title related-post-title text-center p0 m0">इतिहास</h4><h4 class="card-title related-post-title text-center english-title">(History)</h4>
                
            </div>
         </div>
       </a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 filter upsc" data-aos="fade-right">
         <a href="video-series-category.php">
          <div class="card text-center"  style="background: #f5f5f5;">
            <!-- <img class="card-img-top" src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%"> -->
            <div class="card-block p5">
                <!-- <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20"> -->
                <h4 class="card-title related-post-title text-center p0 m0">इतिहास</h4><h4 class="card-title related-post-title text-center english-title">(History)</h4>
                
            </div>
         </div>
       </a>
      </div>


      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 filter state-pcs" data-aos="fade-right">
         <a href="video-series-category.php">
          <div class="card text-center"  style="background: #f5f5f5;">
            <!-- <img class="card-img-top" src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%"> -->
            <div class="card-block p5">
                <!-- <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20"> -->
                <h4 class="card-title related-post-title text-center p0 m0">इतिहास</h4><h4 class="card-title related-post-title text-center english-title">(History)</h4>
                
            </div>
         </div>
       </a>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 filter state-pcs" data-aos="fade-right">
         <a href="video-series-category.php">
          <div class="card text-center"  style="background: #f5f5f5;">
            <!-- <img class="card-img-top" src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%"> -->
            <div class="card-block p5">
                <!-- <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20"> -->
                <h4 class="card-title related-post-title text-center p0 m0">इतिहास</h4><h4 class="card-title related-post-title text-center english-title">(History)</h4>
                
            </div>
         </div>
       </a>
      </div>


      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 filter upsc" data-aos="fade-right">
         <a href="video-series-category.php">
          <div class="card text-center"  style="background: #f5f5f5;">
            <!-- <img class="card-img-top" src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%"> -->
            <div class="card-block p5">
                <!-- <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20"> -->
                <h4 class="card-title related-post-title text-center p0 m0">इतिहास</h4><h4 class="card-title related-post-title text-center english-title">(History)</h4>
                
            </div>
         </div>
       </a>
      </div>


      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 filter upsc" data-aos="fade-right">
         <a href="video-series-category.php">
          <div class="card text-center"  style="background: #f5f5f5;">
            <!-- <img class="card-img-top" src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%"> -->
            <div class="card-block p5">
                <!-- <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20"> -->
                <h4 class="card-title related-post-title text-center p0 m0">इतिहास</h4><h4 class="card-title related-post-title text-center english-title">(History)</h4>
                
            </div>
         </div>
       </a>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 filter examone" data-aos="fade-right">
         <a href="video-series-category.php">
          <div class="card text-center"  style="background: #f5f5f5;">
            <!-- <img class="card-img-top" src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%"> -->
            <div class="card-block p5">
                <!-- <img src="IMAGES/ICONS/Consulting-service-center.png " alt="Test" class="responsive-img pt20"> -->
                <h4 class="card-title related-post-title text-center p0 m0">इतिहास</h4><h4 class="card-title related-post-title text-center english-title">(History)</h4>
                
            </div>
         </div>
       </a>
      </div>
        
    </div>
</div>
</div>
<!-- End Subjective Test -->
</div>

<section class="pt-50" style="background: #fff;">
<div class="hl-help container">
<h2 class="section-heading text-center pb-50">
कक्षा कार्यक्रम की विशेषताएं
</h2>
<div class="row m0" id="video-series-features">

<div class="col-lg-6 col-sm-12 text-center">
  <div class="help-container row">
    <div class="img-container col-lg-5">
      <img src="IMAGES/consultation/1-appointment.jpg">
    </div>
    <div class="content-container col-lg-7">
      <div class="details-container">
      <span class="details">Connect with your Expert</span>
      </div>
      <div class="desc">
      Chat anonymously with a YourDOST expert who's here to help you and not judge you.
      </div>
    </div>
  </div>
</div>

<div class="col-lg-6 col-sm-12 text-center">
  <div class="help-container row">
    <div class="img-container col-lg-5">
      <img src="IMAGES/consultation/1-appointment.jpg">
    </div>
    <div class="content-container col-lg-7">
      <div class="details-container">
      <span class="details">Connect with your Expert</span>
      </div>
      <div class="desc">
      Chat anonymously with a YourDOST expert who's here to help you and not judge you.
      </div>
    </div>
  </div>
</div>

<div class="col-lg-6 col-sm-12 text-center">
  <div class="help-container row">
    <div class="img-container col-lg-5">
      <img src="IMAGES/consultation/1-appointment.jpg">
    </div>
    <div class="content-container col-lg-7">
      <div class="details-container">
      <span class="details">Connect with your Expert</span>
      </div>
      <div class="desc">
      Chat anonymously with a YourDOST expert who's here to help you and not judge you.
      </div>
    </div>
  </div>
</div>

<div class="col-lg-6 col-sm-12 text-center">
  <div class="help-container row">
    <div class="img-container col-lg-5">
      <img src="IMAGES/consultation/1-appointment.jpg">
    </div>
    <div class="content-container col-lg-7">
      <div class="details-container">
      <span class="details">Connect with your Expert</span>
      </div>
      <div class="desc">
      Chat anonymously with a YourDOST expert who's here to help you and not judge you.
      </div>
    </div>
  </div>
</div>

<div class="col-lg-6 col-sm-12 text-center">
  <div class="help-container row">
    <div class="img-container col-lg-5">
      <img src="IMAGES/consultation/1-appointment.jpg">
    </div>
    <div class="content-container col-lg-7">
      <div class="details-container">
      <span class="details">Connect with your Expert</span>
      </div>
      <div class="desc">
      Chat anonymously with a YourDOST expert who's here to help you and not judge you.
      </div>
    </div>
  </div>
</div>

<div class="col-lg-6 col-sm-12 text-center">
  <div class="help-container row">
    <div class="img-container col-lg-5">
      <img src="IMAGES/consultation/1-appointment.jpg">
    </div>
    <div class="content-container col-lg-7">
      <div class="details-container">
      <span class="details">Connect with your Expert</span>
      </div>
      <div class="desc">
      Chat anonymously with a YourDOST expert who's here to help you and not judge you.
      </div>
    </div>
  </div>
</div>





</div>
</div>
 </section>

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

