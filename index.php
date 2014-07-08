<?php

$pageTitle = 'Home';
$homeSelected = 'selected';
$informationSelected = ''; 
$holeSelected = ''; 
$aboutSelected = ''; 
$contactSelected = '';

include('./templates/header.php');
?>

<!doctype html>

<main>

	<section class="container hp_img_relative">

		<img class="hp_bg_img" src="images/fairway.jpg" alt="Picture of the 6th Green at Garibaldi Heights Golf Club">

		<article class="book_tee_time">
			<h2><a href="location.php">Book a Time</a></h2>
		</article><!-- end book_tee_time -->

	</section><!--end hp_image_area -->

	<section class="welcome">
		<article class="inner_welcome">
			<h2>Welcome to Garibaldi Heights Golf Course</h2><br>
			<p>This championship course is where timeless golf tradition meets modern luxury while being surrounded by the spectacular views of the Coastal Mountains.<br> If you are looking for a breathtaking experience, look no further.</p>  
			<p>How nature was meant to be experienced!</p>
			<article><!-- end inner_welcome -->

			</section><!-- end welcome -->

		</main>


		<?php
		include('./templates/footer.php');
		?>