<?php

$pageTitle = 'Course Information';
$homeSelected = '';
$informationSelected = 'selected'; 
$holeSelected = ''; 
$aboutSelected = ''; 
$contactSelected = '';

include('./templates/header.php');
?>
<!doctype html>
<main>

<section class="container hp_img_relative">
	<img class="hp_bg_img" src="images/golf_woods.jpg">

		<article class="book_tee_time">
		<h2>Book a Time</h2>
	</article><!-- end book_tee_time -->
</section><!-- end container -->


<section class="information_container">
						

							<article class="restaurant general_image_settings">

								<img class="restaurant_trans01" src="images/heights_restaurant.jpg" alt="Picture of Heights Restaurant">

								<figcaption class="course_info_transbox restaurant_trans02">

									<h1 class="restaurant_trans03">Heights Restaurant</h1>
									<h2 class="restaurant_trans03">Opening Hours</h2>
									<p class="restaurant_trans03">8:00am to 11:00pm</p>	
									
								</figcaption><!-- end course_info_transbox -->

							</article><!-- end restaurant -->

							<article class="pro_shop general_image_settings">

								<img class="pro_shop_trans01" src="images/pro_shop.jpg" alt="Picture of Pro Shop">

								<figcaption class="course_info_transbox pro_shop_trans02">

									<h1 class="pro_shop_trans03">Pro Shop</h1>
									<h2 class="pro_shop_trans03">Opening Hours</h2>
									<p class="pro_shop_trans03">6:00am to 9:00pm</p>
									
								</figcaption><!-- course_info_transbox -->

							</article><!-- end pro_shop -->

								<article class="green_fees general_image_settings">

									<img class="green_fees_trans01" src="images/green_fees.jpg" alt="Green Fees">

									<figcaption class="course_info_transbox green_fees_trans02">

										<h1 class="green_fees_trans03">Green Fees</h1>
										<p class="green_fees_trans03">18 Holes $30</p>
										<p class="green_fees_trans03">9 Holes $20</p>
										
									</figcaption><!-- end course_info_transbox -->

								</article><!-- end green_fees -->

								<article class="tee_time general_image_settings .tee_time_trans01">

									<div class="tee_time_bg">

									<figcaption class="tee_time_transbox tee_time_trans01">

										<h1>Tee Time</h1>
										<p>Please select a date and time from the drop box below.</p>
										<p>Only available dates and times will show below</p>

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
								<p>Available Times</p>
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
																	
																</figcaption><!-- course_info_transbox -->

																</div> <!-- end bg box -->

															</article><!-- end tee_time -->

																<div class="clear">
															</div><!-- end of clear -->

</section><!-- end information_container -->

</main>





<?php
include('./templates/footer.php');
?>