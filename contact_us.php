<?php

$pageTitle = 'Contact Us';
$homeSelected = '';
$informationSelected = ''; 
$holeSelected = ''; 
$aboutSelected = ''; 
$contactSelected = 'selected';

include('./templates/header.php');
?>
<!doctype html>

<section class="course_info_hero hp_img_relative">
	<img class="hp_bg_img" src="images/stormy_golf.jpg">
	<article class="book_tee_time">
		<h2>Book a Time</h2>
	</article><!-- end book_tee_time -->
</section><!-- end course section hero -->


<section class="information_container">

	<h1>Meet the Team</h1>
	<p>We are here to help</p>

	<article class="gm general_image_settings">

							
								<figcaption class="contact_info_transbox">

									<h1>General Manager</h1>
									<h2>Matthew Wellein</h2>
									<p>604 895 6526</p>
									<p>matt@garibaldiheights.com</p>

								</figcaption><!-- course_info_transbox -->

							</article><!-- end gm -->
							<article class="golf_pro general_image_settings">

								<img src="images/golf_pro.jpg" alt="Picture of Gold Pro Jo Demmler">

								<figcaption class="contact_info_transbox">

									<h1>Golf Pro</h1>
									<h2>Jo Demmler</h2>
									<p>604 895 6523</p>
									<p>jo@garibaldiheights.com</p>	
									
								</figcaption><!-- end contact_info_transbox -->

							</article><!-- end golf_pro -->

							<article class="green_keeper general_image_settings">

								<img src="images/green_keeper.jpg" alt="Picture of Pro Shop">

								<figcaption class="contact_info_transbox">

									<h1>Green Keeper</h1>
									<h2>Nick Orr</h2>
									<p>604 895 6524</p>
									<p>nick@garibaldiheights.com</p>	
									
									
								</figcaption><!-- course_info_transbox -->

							</article><!-- end green_keeper -->

							<article class="restaurant_manager general_image_settings">

								<img src="images/restaurant_manager.jpg" alt="Green Fees">

								<figcaption class="contact_info_transbox">

									<h1>Restaurant Manager</h1>
									<h2>Taren Brockhouse</h2>
									<p>604 895 6525</p>
									<p>harry@garibaldiheights.com</p>
									
								</figcaption><!-- end course_info_transbox -->

							</article><!-- end restaurant_manager -->

							

								<div class="clear">
							</div><!-- end of clear -->

</section><!-- end information_container -->







<?php
include('./templates/footer.php');
?>