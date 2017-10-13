<!-- 
Zhimin Lin
2/24/2017
Individual Project Part 1
-->
<?php 
	$page = "chinese";
?>

<?php
	include "assets/php/header.php"
?>
<?php
	include "assets/php/mobile.php"
?>
		<div id = "title_area">
			<div id = "adi_titles">Chinese Food</div>
		</div>
<?php
	include "assets/php/comments_link.php"
?>		
		<!-- 
			content_area include all the content in my website
			chinese_food.html include the introduction for some Chinese food restaurants in Rochester 
			 include picture and restaurant information
			 include footer and "back to top button"
		-->
		
		<div id ="content_area">
						
				<div class = "food">
							
								<img class = "food_img" src="assets/image/han_noodle.jpg" alt="han noodle bar" >
							
							<div class= "food_information">
								<h1>Han Noodle Bar</h1>							
								<span class="Introduction_Q">
								$ - Chinese Food, Noodles Bowls, Rice Plates, Kids Menu, Appetizer<br>
								687 Monroe Ave Rochester, NY 14607<br>
								+1.5852427333<br>
								Hours: Mon-Thur,Sun:11am-10pm <span class = "bold_text">|</span> Fri-Sat:11am-11pm <br>							
								Website：<a href="http://www.hannoodlebar.com/" target="_blank">http://www.hannoodlebar.com/</a>
								
								</span>
								
							</div>
							<div id= "pic1" class="small_pic"> </div>
							<div id= "pic2" class="small_pic"> </div>
				</div>

				<div class = "food">
								<img class = "food_img" src="assets/image/chen_garden.jpg" alt="chen garden restaurant" >
							
							<div class= "food_information">
								<h1>Chen Garden Restaurant</h1>	
								<span class="Introduction_Q">
								$$ - Chinese Food, Appetizer, Soup<br>
								1750 Monroe Ave Rochester, NY 14618<br>
								+1.5852413070<br>
								Hours: Mon-Thur:11:30am-9:30am <span class = "bold_text">|</span> Fri-Sat:11:30am-10:30pm <span class = "bold_text">|</span> Sun:12pm-9:30pm <br>
								Website：<a href="http://www.chengarden.com/" target="_blank">http://www.chengarden.com/</a>
								</span>
							</div>
							<div id= "pic3" class="small_pic"> </div>
							<div id= "pic4" class="small_pic"> </div>
				</div>
				
				<div class = "food">
								<img class = "food_img" src="assets/image/hotpot.jpg" alt="Yummy garden hot pot">
							
							<div class= "food_information">
								<h1>Yummy Garden Hot Pot</h1>	
								<span class="Introduction_Q">
								$$ - Chinese Food, Hot Pot(Asian Fusion), Noodle Bowls, Bento box, Spicy Mala Dishes<br>
								2411 W Henrietta Rd Rochester, NY 14623<br>
								+1.5853689888<br>
								Hours: Mon-Thur: 11am-10pm <span class = "bold_text">|</span> Fri-Sat: 11am-11pm <span class = "bold_text">|</span> Sun: 12pm-9:30pm
								</span>
							</div>
							<div id= "pic5" class="small_pic"> </div>
							<div id= "pic6" class="small_pic"> </div>
							<div id= "pic7" class="small_pic"> </div>
				</div>
				
				<div class = "food">
								<img class = "food_img" src="assets/image/white_swans.jpg" alt="white swans asia cafe">
							<div class= "food_information">
								<h1>White Swans Asia Cafe</h1>	
								<span class="Introduction_Q">
								$$ - Chinese Food, Dim Sum, Asian Fusion, Thai<br>
								798 S Clinton Ave Rochester, NY 14620<br>
								+1.5852704431<br>
								Hours: Mon, Wed, Thur, Sun:10am-9:30pm <span class = "bold_text">|</span> Fri-Sat:10am-10:30pm<br>
								Website：<a href="https://www.white-swans.com/" target="_blank">https://www.white-swans.com/</a>
								</span>
							</div>
							<div id= "pic8" class="small_pic"> </div>
							<div id= "pic9" class="small_pic"> </div>
							<div id= "pic10" class="small_pic"> </div>
				</div>
<?php
	include "assets/php/go_to_top.php"
?>			
<?php
	include "assets/php/footer.php"
?>	
