<!-- Including Header -->
<?php
include_once('INCLUDES/header.php');
?>
<!-- Including Header Menu -->
<?php
include_once('INCLUDES/menu.php');
?>

<div class="video-page">
	<section>
		<div class="video-box embed-responsive embed-responsive-16by9" align="center" >
		    <video controls  class="embed-responsive-item">
		        <source src="http://techslides.com/demos/sample-videos/small.mp4" type="video/mp4">
		    </video>
			
		</div>
	</section>


	<section class="container">
		 <div class="title-2 text-left mt-4" style="margin-bottom: 0px;">
		 आगामी वीडियो
		  </div>
		<ul class="list-unstyled video-list-thumbs row" style="padding-top: 20px;">
			<li class="col-lg-3 col-sm-4 col-xs-6">
				<a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
					<h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
					<span class="play-button"><i class="fas fa-play"></i></span>
					<span class="duration">03:15</span>
				</a>
			</li>

			<li class="col-lg-3 col-sm-4 col-xs-6">
				<a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
					<h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
					<span class="play-button"><i class="fas fa-play"></i></span>
					<span class="duration">03:15</span>
				</a>
			</li>


			<li class="col-lg-3 col-sm-4 col-xs-6">
				<a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
					<h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
					<span class="play-button"><i class="fas fa-play"></i></span>
					<span class="duration">03:15</span>
				</a>
			</li>


			<li class="col-lg-3 col-sm-4 col-xs-6">
				<a href="#" title="Claudio Bravo, antes su debut con el Barça en la Liga">
					<h2>Claudio Bravo, antes su debut con el Barça en la Liga</h2>
					<span class="play-button"><i class="fas fa-play"></i></span>
					<span class="duration">03:15</span>
				</a>
			</li>

		</ul>
</section>

	<section class="container">
		<div class="discussion-box">
		<div id="disqus_thread" style="padding: 50px 0" ></div>
        <script>
          /**
          *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
          *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
          /*
          var disqus_config = function () {
          this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
          this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
          };
          */
          (function() { // DON'T EDIT BELOW THIS LINE
          var d = document, s = d.createElement('script');
          s.src = 'https://civilhindipedia-1.disqus.com/embed.js';
          s.setAttribute('data-timestamp', +new Date());
          (d.head || d.body).appendChild(s);
          })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
		</div>
	</section>
</div>



<!-- Including Footer menu -->
<?php
include_once('INCLUDES/footer-menu-2.php');
?>
<!-- Including Footer -->
<?php
include_once('INCLUDES/footer.php');
?>
