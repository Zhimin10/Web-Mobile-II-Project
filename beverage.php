
<!-- 
Zhimin Lin
2/24/2017
Individual Project Part 1
-->
<?php 
	$page = "beverage";
?>

<?php
	include "assets/php/header.php"
?>
<?php
	include "assets/php/mobile.php"
?>
		<div id = "title_area">
			<div id = "adi_titles">Beverage</div>
		</div>
<?php
	include "assets/php/comments_link.php"
?>		
		<!-- 
			content_area include all the content in my website
			beverage.html include the introduction for some beverage store in Rochester 
			 include picture and store information
			 -include footer and "back to top button"
		-->
			
		
		<div id ="content_area">
			
						
				<div class = "food">
							<img class = "food_img" src="assets/image/taichi.jpg" alt="Tai Chi Bubble Tea">
							
							<div class= "food_information">
								<h1>Tai Chi Bubble Tea</h1>							
								<span class="Introduction_Q">
								$ - Cafe, Asian, Sushi Burrito <br>
								3300 W Henrietta Rd, Rochester, NY 14623<br>
								+1.5852708130<br>
								Hours: Mon-Thur,Sun:11am-10pm <span class = "bold_text">|</span> Fri-Sat:11am-11pm <br>			
								</span>
								
							</div>
							<div id= "B_pic1" class="small_pic"> </div>
							<div id= "B_pic2" class="small_pic"> </div>
						
				</div>

				<div class = "food">
								<img class = "food_img" src="assets/image/chacha.jpg" alt="Cha Chat Cafe" >
							
							<div class= "food_information">
								<h1>Cha Chat Cafe</h1>	
								<span class="Introduction_Q">
								$$ - Creperies, Coffee, Tea <br>
								1455 E Henrietta Rd Rochester, NY 14623<br>
								+1.5852925788<br>
								Hours: 11am - 9pm<span class = "bold_text">|</span>Tuesday Closed<br>
								</span>
							</div>
							<div id= "B_pic3" class="small_pic"> </div>
							<div id= "B_pic4" class="small_pic"> </div>
				
				</div>
				
<?php
	include "assets/php/go_to_top.php"
?>			
<?php
	include "assets/php/footer.php"
?>	
