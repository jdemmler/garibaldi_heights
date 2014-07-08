	<?php

	$pageTitle = 'Book a Time';
	$homeSelected = '';
	$informationSelected = ''; 
	$holeSelected = ''; 
	$aboutSelected = 'selected'; 
	$contactSelected = '';

	include('./templates/header.php');
	?>
	<!doctype html>

	<main>

		<section class="container hp_img_relative">
			<img class="hp_bg_img" src="images/dear_golf_course.jpg" alt="Picture of the 8th Fairway with dear on the golf Course">
			<article class="book_tee_time">
				<h2>Book a Time</h2>
			</article><!-- end book_tee_time -->
		</section><!-- end course section hero -->

		<div class="outer_form">
			<div class="inner_form">
				<h1>Tee Time</h1>
				<h2>Please select a date and time from the drop box below</h2>
				<h2>Only available dates and times will show below</h2>


				<section class="booking_form">

					<form action="../adelaide/thank_you.php" method="post" name="more_info" class="more_info" id="more-info">
						<fieldset class="months">
							<p>Please pick a month:</p>
							<select id="month" name="month" multiple>


								<option value=""> -Month- </option>
								<option value="January">January</option>
								<option value="Febuary">Febuary</option>
								<option value="March">March</option>
								<option value="April">April</option>
								<option value="May">May</option>
								<option value="June">June</option>
								<option value="July">July</option>
								<option value="August">August</option>
								<option value="September">September</option>
								<option value="October">October</option>
								<option value="November">November</option>
								<option value="December">December</option>

							</select>

						</fieldset>

						<fieldset class="dates">
							<p>Please pick a date:</p>
							<select id="date" name="date" multiple>


								<option value=""> - Day - </option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>

							</select>
						</fieldset>

						<fieldset class="times">
							<p>Available Times:</p>
							<select id="times" name="times" multiple>


								<option value=""> -Time- </option>
								<option value="1">6.30am</option>
								<option value="2">6.45am</option>
								<option value="3">8.00am</option>
								<option value="4">8.30am</option>
								<option value="5">10.45am</option>
								<option value="6">11.15am</option>
								<option value="7">1.15pm</option>
								<option value="8">1.30pm</option>
								<option value="9">2.45pm</option>
								<option value="10">3.15pm</option>
								<option value="11">4.30pm</option>
								<option value="12">5.15pm</option>

							</select>
						</fieldset>

						<fieldset class="submit">
							<input name="btn_submit" type="submit" id="btn_submit" value="Submit">
						</fieldset>
					</form>

				</section><!-- end booking form -->

			</div><!-- end inner form -->
		</div><!--end out_form -->

	</main>
	<?php
	include('./templates/footer.php');
	?>