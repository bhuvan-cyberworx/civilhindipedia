<div class="modal fade pack-info" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <embed src="papers/paper-1.pdf" class="col-md-12 p0" height="2100px" />
    
    </div>
  </div>
</div>

</div>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<scrip src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></scrip>
<!-- Slick Carousel JS -->
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<!--Loading Moment.js minified script -->
<script src='fullcalendar/moment.min.js'></script>
<!-- Loading fulcalendar minified script -->
<script src='fullcalendar/fullcalendar.js'></script>
<!-- Loading zabuto calendar minified script -->
<script src="zabutocalendar/zabuto_calendar.min.js"></script>
<script src="News Ticker/jquery.easy-ticker.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"     async defer></script>

<!-- Chart Js CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<!-- <script type="text/javascript" src="countdowntimer/jquery.countdownTimer.js"></script> -->
<script type="text/javascript" src="JS/onlineStatus.js"></script>




<script type="text/javascript">
  var onloadCallback = function() {
    // alert("grecaptcha is ready!");
  };
</script>
<script >
console.log("Slick Working");
$(document).ready(function(){
  $('.course-card-slider').slick({
    infinite: true,
    slidesToShow: 4,
    autoplay:true,
    slidesToScroll: 3,
    responsive: [
    {
      breakpoint: 960,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 560,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }],
    prevArrow:"<img class='a-left control-c prev slick-prev' src='IMAGES/ICONS/left-arrow.png'>",
    nextArrow:"<img class='a-right control-c next slick-next' src='IMAGES/ICONS/right-arrow.png'>"

  });

  $('.testimonial-card-slider').slick({
    infinite: false,
    slidesToShow: 4,
    autoplay:true,
    dots:true,
    slidesToScroll: 3,
    responsive: [
    {
      breakpoint: 960,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 560,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }],
    prevArrow:"<img class='a-left control-c prev slick-prev' src='IMAGES/ICONS/left-arrow.png'>",
    nextArrow:"<img class='a-right control-c next slick-next' src='IMAGES/ICONS/right-arrow.png'>"
  });

   $('.related-post-slider').slick({
    infinite: false,
    slidesToShow: 4,
    autoplay:true,
    dots:true,
    slidesToScroll: 3,
    responsive: [
    {
      breakpoint: 960,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 560,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }],
    prevArrow:"<img class='a-left control-c prev slick-prev' src='IMAGES/ICONS/left-arrow.png'>",
    nextArrow:"<img class='a-right control-c next slick-next' src='IMAGES/ICONS/right-arrow.png'>"
  });

   $('.related-course-card-slider').slick({
    infinite: false,
    slidesToShow:1,
    autoplay:true,
    dots:true,
    responsive: [
    {
      breakpoint: 960,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 560,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }],
    
    prevArrow:"<img class='a-left control-c prev slick-prev' src='IMAGES/ICONS/left-arrow.png'>",
    nextArrow:"<img class='a-right control-c next slick-next' src='IMAGES/ICONS/right-arrow.png'>"
  });



  $('#event-calendar').zabuto_calendar({
    ajax: {
      url: "zabutocalendar/show_data.php",
      modal:true
    }
  });

  $('#information-section').easyTicker({
	direction: 'up',
	easing: 'swing',
	speed: 'slow',
	interval: 2000,
	height: '268px',
	visible: 0,
	mousePause: 1,
	controls: {
		up: '',
		down: '',
		toggle: '',
		playText: 'Play',
		stopText: 'Stop'
	}
});

// slick carousel
$('.vertical-slider').slick({
  dots: true,
  vertical: true,
  slidesToShow: 1,
  autoplay:true,
  speed: 2000,
  autoplaySpeed:5000,
  slidesToScroll: 1
  
  
});

});

</script>

<!-- <script type="text/javascript">
$(window).on('scroll', function() {
  var scrollValue = $(window).scrollTop();
  var elementOffset = $('.navbar-course-navigation').offset().top;
  var distance  = (elementOffset - scrollValue);
  console.log(scrollValue);
  if (scrollValue>distance) {
       $('.navbar-course-navigation').addClass('fixed-top');
  }
  else {
    $('.navbar-course-navigation').removeClass('fixed-top');
  }
});

</script> -->
<script>
  
$(function(){
  var path = window.location.pathname;
  var page = path.split("/").pop();
  console.log( page );

    var current = location.pathname;
    $('#sb_menu li a').each(function(){
        var $this = $(this);
        console.log($this.attr('href').indexOf(page));
        // if the current path is like this link, make it active
        if($this.attr('href').indexOf(page) !== -1){
            $this.addClass('active-li');


        }
    })
})



</script>


<!-- <script>  
var menuHeight = document.getElementById('navigation-links').clientHeight;
var navMenuDistance = document.getElementById('course-nav-id').offsetTop;
var scrollDistance  = navMenuDistance - menuHeight;
  
function courseNav(){
  if(window.pageYOffset > scrollDistance){
  document.getElementById("course-nav-id").classList.add("fixed-top");
  document.getElementById("course-nav-id").style.top = menuHeight+'px';
  }

  else{
  document.getElementById("course-nav-id").classList.remove("fixed-top");
  }

}
window.addEventListener("scroll", courseNav);

</script> -->

<script>  
var menuHeight = document.getElementById('navigation-links').clientHeight;
var navMenuDistance = document.getElementById('tutorial-nav-id').offsetTop;
var scrollDistance  = navMenuDistance - menuHeight;

function courseNav(){
  if(window.pageYOffset > scrollDistance){
  document.getElementById("tutorial-nav-id").classList.add("fixed-top");
  document.getElementById("tutorial-nav-id").style.top = menuHeight+'px';
  }

  else{
  document.getElementById("tutorial-nav-id").classList.remove("fixed-top");
  }


}
window.addEventListener("scroll", courseNav);

</script>


<script>
  $(document).ready(function() {
$(".tab").click(function () {
    $(".tab").removeClass("active-tab");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).addClass("active-tab");   
});
});
</script>

<!-- <script>
  $(function(){
  $("#countdowntimer").countdowntimer({
    hours : 2,
    size : "lg"
        
  });
  console.log("working");
});
</script> -->


<script>
  $(document).ready(function(){

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');
            
        }
    });

});


  // Get the container element
var btnContainer1 = document.getElementById("exam-filter-list-1");

// Get all buttons with class="btn" inside the container
var btns1 = btnContainer1.getElementsByClassName("btn");

// Loop through the buttons and add the active class to the current/clicked button

for (var i = 0; i < btns1.length; i++) {
  btns1[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("filter-active");
    current[0].className = current[0].className.replace(" filter-active", "");
    this.className += " filter-active";
  });
} 


  // Get the container element
var btnContainer2 = document.getElementById("exam-filter-list-2");

// Get all buttons with class="btn" inside the container
var btns2 = btnContainer2.getElementsByClassName("btn");

// Loop through the buttons and add the active class to the current/clicked button

for (var i = 0; i < btns2.length; i++) {
  btns2[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("filter-active");
    current[0].className = current[0].className.replace(" filter-active", "");
    this.className += " filter-active";
  });
} 


</script>





<script>
  
var paperSidebar = document.getElementById('paper-sidebar');
var mobileFilter = document.getElementById('mobile-filter');
var mobileFilterClose = document.getElementById('mobile-filter-close');

function sideBarOpen(){
  paperSidebar.style.right = "0%";
  mobileFilter.style.display = "none";
  mobileFilterClose.style.display = "block";

}



function sideBarClose(){
  paperSidebar.style.right = "-80%";
  mobileFilter.style.display = "block";
  mobileFilterClose.style.display = "none";

}
document.getElementById('mobile-filter').addEventListener("click", sideBarOpen);

document.getElementById('mobile-filter-close').addEventListener("click", sideBarClose);

// window.addEventListener("scroll", courseNav);
</script>

<script>
  
var testStatus = document.getElementById('test-status-id');
var qboxOpen = document.getElementById('open-qbox-id');
var qboxClose = document.getElementById('close-qbox-id');

function openqbox(){
  testStatus.style.left = "0%";
  qboxOpen.style.display = "none";
  qboxClose.style.display = "block";

}


function closeqbox(){
  testStatus.style.left = "-80%";
  qboxOpen.style.display = "block";
  qboxClose.style.display = "none";

}
document.getElementById('open-qbox-id').addEventListener("click", openqbox);

document.getElementById('close-qbox-id').addEventListener("click", closeqbox);

// window.addEventListener("scroll", courseNav);
</script>
<!-- <script type="text/javascript" src="JS/mobile.js"></script> -->

</body>
</html>
