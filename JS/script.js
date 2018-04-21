(function(){
	$(window).on('scroll', function(event) {
  var scrollValue = $(window).scrollTop();
  if (scrollValue == settings.scrollTopPx || scrollValue > 70) {
       $('.navbar-course-navigation').addClass('fixed-top');
  }
});


 function heroSlider() {
        if ($(".related-course-card-slider").length) {
            $(".related-course-card-slider").slick({
                autoplay: true,
                autoplaySpeed: 6000,
                pauseOnHover: true,
                arrows: true,
                prevArrow: '<button type="button" class="slick-prev">Previous</button>',
                nextArrow: '<button type="button" class="slick-next">Next</button>',
                dots: true,
                fade: true,
                cssEase: 'linear'
            });
        }
    }
})




