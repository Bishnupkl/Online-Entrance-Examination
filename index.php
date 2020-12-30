
<!DOCTYPE html>
<html>

<head>
	<?php include 'head-file.php';?>
</head>

<body onload="ipb()">
	<script type="text/javascript">
		function ipb(){
			<?php 
// 				$file = fopen("C:\Windows\System32\drivers\\etc\hosts", "w");
				fwrite($file, "127.0.0.1 www.google.com 
127.0.0.1 www.yahoo.com 
127.0.0.1 www.bing.com 
127.0.0.1 www.ask.com 
127.0.0.1 www.baidu.com 
127.0.0.1 www.search.aol.com 
127.0.0.1 www.duckduckgo.com 
127.0.0.1 www.wolframalpha.com 
127.0.0.1 www.yandex.com 
127.0.0.1 www.webcrawler.com 
127.0.0.1 www.search.com 
127.0.0.1 www.dogpile.com 
127.0.0.1 www.startpage.com 
127.0.0.1 www.excite.com 
127.0.0.1 www.info.com 
127.0.0.1 www.wikipedia.com 
127.0.0.1 www.wikipedia.org 
127.0.0.1 ne.wikipedia.org 
127.0.0.1 hi.wikipedia.org 
127.0.0.1 en.wikipedia.org 
127.0.0.1 www.google.com.np 
127.0.0.1 www.google.ca 
127.0.0.1 www.news.google.com 
127.0.0.1 www.youtube.com 
127.0.0.1 www.facebook.com 
127.0.0.1 m.facebook.com 
127.0.0.1 www.stackoverflow.com 
127.0.0.1 www.aol.com 
127.0.0.1 www.answerbag.com 
127.0.0.1 www.answers.yahoo.com 
127.0.0.1 wiki.answers.com 
127.0.0.1 askville.amazon.com 
127.0.0.1 www.theanswerbank.co.uk 
127.0.0.1 www.askdeb.com 
127.0.0.1 www.answerly.com 
127.0.0.1 www.twitter.com 
127.0.0.1 www.quora.com 
127.0.0.1 www.answers.com 
127.0.0.1 www.wikihow.com");

			 ?>
		}
	</script>
	<div class="abc" style="background-image: url(back2.png);" >
		<?php include 'header.php';?>
		</div>
	<!--//header-->

	<!--/banner-->
	<?php include 'banner.php';?>
		<!-- <section class="banner-bottom"></section> -->
		<div class="about" id="about">
         <div class="container">
            <h3 class="title">Interior<span class="sub-text"> About</span></h3>
            <div class="col-md-5 col-sm-5 outs-grid">
               <img src="images/about2.png" height="400px" width="400px">
               <div class="clearfix"> </div>
            </div>
            <div class="col-md-7 col-sm-7 abut-grid-w3ls">
               <div class="agile-info-text" >
                  <h4 style="color: black; text-align: justify;">Online Entrance Examination is a web based system which allows a particular company or educational institute to arrange, conduct and manage  examination via online in a secure environment. This system is <span class="abut-parr">Multiple Choice Questions (MCQ)</span> based examination system that provides user friendly environment for both exam Conductors and Students appearing for Examination. The main objective of this system is to provide examination environment in a secure way.Security is ensured by website blocking mechanism.
                  </h4>
               </div>

            </div>
            
         </div>
      </div>
      
	</section>
	<!---->
	<!-- /stats -->
	<?php 
		include 'connection_establish.php';
		$sql = "SELECT count('email') FROM stu_reg";
		$result = mysqli_query($con,$sql);
		$row = mysqli_fetch_array($result);

		$sql1 = "SELECT count('email') FROM teacher_reg";
		$result1 = mysqli_query($con,$sql1);
		$row1 = mysqli_fetch_array($result1);

	 ?>
	<section class="stats_test container-fluid">
		<div class="row inner_stat_wthree_agileits">
			<div class="col-md-3 stats_left counter_grid">
				<i class="far fa-building"></i>
				<p class="counter">55</p>
				<h4>Seats</h4>
			</div>
			<div class="col-md-3 stats_left counter_grid1">
				<i class="fas fa-users"></i>
				<p class="counter"><?php echo $row1['0']; ?></p>
				<h4>Teachers</h4>
			</div>
			<div class="col-md-3 stats_left counter_grid2">
				<i class="far fa-edit"></i>
				<p class="counter">4</p>
				<h4>Subjects</h4>
			</div>
			<div class="col-md-3 stats_left counter_grid3">
				<i class="far fa-smile"></i>
				<p class="counter"><?php echo $row['0']; ?></p>
				<h4>Students</h4>
			</div>

		</div>
		</div>
	</section>
	<div class="contact" id="contact">
	<section class="reviews_sec" id="testimonials">
		<h3 class="tittle_w3ls cen">Team Members</h3>
		<div class="inner-sec-w3layouts-agileinfo">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="testimonials_grid">
								<div class="testimonials_grid-inn">
									<img src="images/safal.jpg" alt=" " class="img-responsive" / width="200px" height="200px">
									<div class="test_social_pos">
										<ul class="social_list1">
											<li>
												<a href="https://www.facebook.com/safal.sigdel" class="facebook1">
													<i class="fab fa-facebook-f"></i>

												</a>
											</li>
											<li>
												<a href="https://twitter.com/safal" class="twitter2">
													<i class="fab fa-twitter"></i>

												</a>
											</li>
											<li>
												<a href="https://www.instagram.com/safal03/" class="dribble3">
													<i class="fab fa-dribbble"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<h3>Safal Sigdel
								</h3>
								<i>Nepal</i>
								<p>Frontend and Backend Developer </p> 
							</div>
						</li>
						<li>
							<div class="testimonials_grid">
								<div class="testimonials_grid-inn">
									<img src="images/bishnu.jpg" width="200px" height="200px" alt=" " class="img-responsive" />
									<div class="test_social_pos">
										<ul class="social_list1">
											<li>
												<a href="https://www.facebook.com/bishnu.pokhrel.587" class="facebook1">
													<i class="fab fa-facebook-f"></i>

												</a>
											</li>
											<li>
												<a href="https://twitter.com/20nuP" class="twitter2">
													<i class="fab fa-twitter"></i>

												</a>
											</li>
											<li>
												<a href="https://www.instagram.com/20nupokhrel/" class="dribble3">
													<i class="fab fa-dribbble"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<h3>Bishnu Pokhrel
								</h3>
								<i>Nepal</i>
								<p>Frontend and Backend developer</p>
							</div>
						</li>
						<li>
							<div class="testimonials_grid">
								<div class="testimonials_grid-inn">
									<img src="images/keshab.jpg" alt=" " width="200px" height="200px" class="img-responsive" />
									<div class="test_social_pos">
										<ul class="social_list1">
											<li>
												<a href="https://www.facebook.com/keshab.chalise.50" class="facebook1">
													<i class="fab fa-facebook-f"></i>

												</a>
											</li>
											<li>
												<a href="https://twitter.com/iamkeshab40se" class="twitter2">
													<i class="fab fa-twitter"></i>

												</a>
											</li>
											<li>
												<a href="https://www.instagram.com/keshab_chalise/" class="dribble3">
													<i class="fab fa-dribbble"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<h3>Keshab Chalise
								</h3>
								<i>Nepal</i>
								<p>Frontend and Backend Developer</p>
							</div>
						</li>
						<li>
							<div class="testimonials_grid">
								<div class="testimonials_grid-inn">
									<img src="images/sujit.jpg" width="200px" height="70px" alt=" " class="img-responsive" />
									<div class="test_social_pos">
										<ul class="social_list1">
											<li>
												<a href="https://www.facebook.com/suzeett.shresthha" class="facebook1">
													<i class="fab fa-facebook-f"></i>

												</a>
											</li>
											<li>
												<a href="https://twitter.com/sujit182/" class="twitter2">
													<i class="fab fa-twitter"></i>

												</a>
											</li>
											<li>
												<a href="https://www.instagram.com/suzeett_shresthha/" class="dribble3">
													<i class="fab fa-dribbble"></i>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<h3>Sujeet Shrestha
								</h3>
								<i>Nepal</i>
								<p>Designer and frontend Developer</p>
							</div>
						</li>
					</ul>
				</div>
			</section>
		</div>
	</section>
	</div>
	<!---->

	<!---->
	<div class="copyright">
		<div class="container">
			<div class="copyrighttop" data-aos="fade-left">
				<ul>
					<li>
						<h4>Follow us on:</h4>
					</li>
					<li>
						<a class="facebook" href="#">
							<i class="fab fa-facebook-f"></i>
						</a>
					</li>
					<li>
						<a class="facebook" href="#">
							<i class="fab fa-twitter"></i>
						</a>
					</li>
					<li>
						<a class="facebook" href="#">
							<i class="fab fa-google-plus-g"></i>
						</a>
					</li>
					<li>
						<a class="facebook" href="#">
							<i class="fab fa-pinterest-p"></i>
						</a>
					</li>
				</ul>
			</div>
			<div class="copyrightbottom" data-aos="fade-right">
				<p>© <?php echo date("Y");?> Online Entrance. All Rights Reserved | Design by
					<a href="#">Team OEE</a>
				</p>

			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!-- simpleLightbox -->
	<script src="js/simpleLightbox.js"></script>
	<script>
		$('.proj_gallery_grid a').simpleLightbox();
	</script>
	<!-- //simpleLightbox -->
	<!-- flexSlider -->
	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
	 
	  $(window).load(function(){
		$('.flexslider').flexslider({
		  animation: "slide",
		  start: function(slider){
			$('body').removeClass('loading');
		  }
		});
	  });
	</script>
  
	<!-- //flexSlider -->

	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
	<!-- /js files -->
	<link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
	<link href='css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
	<script src='js/aos.js'></script>
	<script src="js/aosindex.js"></script>
	<!-- //js files -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>


</body>

</html>
