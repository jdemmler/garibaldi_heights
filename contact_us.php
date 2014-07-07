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

<section class="location settings_google">

	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d82525.04670465493!2d-123.12486079999995!3d49.731362349999515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5486f9a46a868cbd%3A0x599a7861ed442e84!2sSquamish+Valley+Golf+%26+Country+Club!5e0!3m2!1sen!2sca!4v1404599300871" width="900" height="400" frameborder="0" style="border:0"></iframe>

</section><!-- end location -->

<section class="contact_icons">

	<article class="telephone">

	</article><!-- end telephone -->

	<article class="email">

	</article><!-- end email -->

	<article class="hours">

	</article><!-- end hours-->

	<div class="clear">
	</div><!-- end of clear -->


</section><!-- end contact_icons-->

<section class="information_container">

	

	<div class="inner_information">
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
				<p>taren@garibaldiheights.com</p>

			</figcaption><!-- end course_info_transbox -->

		</article><!-- end restaurant_manager -->



		<div class="clear">
		</div><!-- end of clear -->
	</div><!-- end inner_information-->

</section><!-- end information_container -->







<?php
include('./templates/footer.php');
?>