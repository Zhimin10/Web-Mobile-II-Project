<!-- 
Zhimin Lin
2/24/2017
Individual Project Part 1
-->

<?php 
	$page = "index";
?>


<?php
	include "assets/php/header.php"
?>
<?php
	include "assets/php/mobile.php"
?>
		

		
		
		<div id = "title_area">
			<div id = "adi_titles">Rochester</div>
		</div>
		
<?php
	include "assets/php/comments_link.php"
?>
		
		<!-- 
			content_area include all the content in my website
			index.html include the introduction for Rochester
			  include picture and map
			  include information chart
			  include footer and "back to top button"
		-->
		
		<div id ="content_area">
			
			<div id ="index_box">
				
				<img id = "roc_1" class = "rochester_img" src="assets/image/rochester.jpg" alt="Rochester" >
				
				<img id = "roc_2" class = "rochester_img" src="assets/image/rochester1.jpg" alt="Rochester" >
				
				<img id = "roc_3" class = "rochester_img" src="assets/image/rochester2.jpg" alt="Rochester" >
				
				<img id = "roc_4" class = "rochester_img" src="assets/image/rochester3.jpg" alt="Rochester" >
				
				<img id = "roc_5" class = "rochester_img" src="assets/image/rochester4.jpg" alt="Rochester" >
			</div>
			
			<div id ="summary">
				<h3>Rochester is a city in the western of the state of New York, it sits on Lake Onrario's southern shore. The total area is 
				about 37.1 square mile, and 1.3 square miles of it is water. The population of it is about 209,802 (2015), is the state's third 
				largest.</h3>
			</div>
			
			<div id = "tables_c">
				<table class = "table">
					  <tr>
						<th>Population(2012)</th>
						<th>Rochester, NY</th>
					  </tr>
					  <tr>
						<td>Total Population</td>
						<td>211,289</td>
					  </tr>
					  <tr>
						<td>1990 Population</td>
						<td>231,245</td>
					  </tr>
					  <tr>
						<td>2000 Population</td>
						<td>220,818</td>
					  </tr>
					  <tr>
						<td>2010 Population</td>
						<td>210,965</td>
					  </tr>
					  <tr>
						<td>Male Population</td>
						<td>48.08%</td>
					  </tr>
					  <tr>
						<td>Female Population</td>
						<td>51.92%</td>
					  </tr>
				</table>
				
				
				<table class = "table">
					  <tr>
						<th>Race(2015)</th>
						<th>Rochester, NY</th>
					  </tr>
					  <tr>
						<td>Black</td>
						<td>38.6%</td>
					  </tr>
					  <tr>
						<td>White</td>
						<td>36.3%</td>
					  </tr>
					  <tr>
						<td>Hispanic</td>
						<td>18.1%</td>
					  </tr>
					  <tr>
						<td>Asian</td>
						<td>3.7%</td>
					  </tr>
					  <tr>
						<td>American Indian</td>
						<td>0.3%</td>
					  </tr>
					  <tr>
						<td>other</td>
						<td>0.07%</td>
					  </tr>
				</table>
			</div>
			
			<div id = "map_div">
				<iframe id = "map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d186184.78449475794!2d-77.75658848221394!3d43.1856307441982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d6b3059614b353%3A0x5a001ffc4125e61e!2sRochester%2C+NY!5e0!3m2!1sen!2sus!4v1490279980486" ></iframe>
			</div>
			
<?php
	include "assets/php/go_to_top.php"
?>			
<?php
	include "assets/php/footer.php"
?>	
