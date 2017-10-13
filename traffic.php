<!-- 
Zhimin Lin
2/24/2017
Individual Project Part 1
-->
<?php 
	$page = "traffic";
?>
<?php
	include "assets/php/header.php"
?>
<?php
	include "assets/php/mobile.php"
?>
		<div id = "title_area">
			<div id = "adi_titles">Traffic</div>
		</div>
<?php
	include "assets/php/comments_link.php"
?>		
		<!-- 
			content_area include all the content in my website
			traffic.html include the introduction for some traffic in Rochester 
			  include picture and traffic information
			  include footer and "back to top button"
		-->
		
		<div id ="content_area"> 
			<div class = "traffic_box">
			<img class = "traffic_img" src="assets/image/greyhound.jpg" alt="Greyhound Bus Stations in Rochester" >
			<div class="traffic_info">
			<span class = "traffic_name">Greyhound Bus Stations in Rochester</span><br><br>
			Directions to 3,800 stops across America.<br><br>
			<span class = "list">Address: </span>186 Cumberland St Rochester, New York 14605<br><br>
			<span class = "list">Call:</span>585-232-5121  <br><br>
			<span class = "list">Website:</span>&emsp;&nbsp;&nbsp;<a href="http://locations.greyhound.com/us/new-york/rochester" target="_blank">http://locations.greyhound.com/us/new-york/rochester</a>	
			</div>
			</div>
			
			<div class = "traffic_box">
			<img class = "traffic_img" src="assets/image/rts.jpg" alt="RTS Transit Center">
			<div class="traffic_info">
			<span class = "traffic_name">RTS Transit Center</span><br><br>
			Bus service in Rochester<br><br>
			<span class = "list">Address:</span>60 St. Paul Street, Rochester, NY 14604<br>
			&emsp;&emsp;&emsp;&emsp;71 North Clinton Ave., Rochester, NY 14604  <br><br>
			<span class = "list">Call:</span>585-288-1700  <br><br>
			<span class = "list">Real-Time information:</span><a href="http://wmb.rgrta.com/" target="_blank"> http://wmb.rgrta.com/</a>  <br><br>
			<span class = "list">Website:</span>&emsp;&nbsp;&nbsp;<a href="https://www.myrts.com/" target="_blank">https://www.myrts.com/</a>	
			</div>
			</div>
			
			<div class = "traffic_box">
			<img class = "traffic_img" src="assets/image/roc.png" alt="ROC airport" >
			<div class="traffic_info">
			<span class = "traffic_name">Greater Rochester International Airport (ROC)</span><br><br>
			Airport in Rochester<br><br>
			<span class = "list">Address:</span>1200 Brooks Ave, Rochester, NY 14624<br>
			&emsp;&emsp;&emsp;&emsp;71 North Clinton Ave., Rochester, NY 14604  <br><br>
			<span class = "list">Call:</span> 585-753-7000 <br><br>
			</div>
			</div>
			
			
<?php
	include "assets/php/go_to_top.php"
?>			
<?php
	include "assets/php/footer.php"
?>	
