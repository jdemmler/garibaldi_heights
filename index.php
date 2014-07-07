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
<div class="wrapper">

<main>

<!-- (   - > _   )  ;) i'll keep doing what you've started though -->

<section class="container">

	<img class="hp_bg_img" src="images/bg_home_page_pano.jpg">

	<article class="tagline">

		<h1>How nature was meant to be experienced!</h1>

	</article><!-- end tagline -->

	<article class="book_tee_time">
		<h2>Book you tee-time today!</h2>
	</article><!-- end book_tee_time -->

</section><!--end hp_image_area -->

<section class="welcome">

		<h2>Welcome to Garibaldi Heights Golf Course.</h2><br>
		<p>This championship course is where timeless golf tradition meets modern luxury while being surrounded by the spectacular views of the Coastal Mountains.<br> If you are looking for a breathtaking experience, look no further.</p>  
		<p>How nature was meant to be experienced!</p>

	</section><!-- end welcome -->

</main>

<div class="spacemaker5000"></div>
<?php
include('./templates/footer.php');
?>