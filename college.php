<!-- 
Zhimin Lin
2/24/2017
Individual Project Part 1
-->
<?php 
	$page = "college";
?>
<?php
	include "assets/php/header.php"
?>
<?php
	include "assets/php/mobile.php"
?>
		<div id = "title_area">
			<div id = "adi_titles">College</div>
		</div>
<?php
	include "assets/php/comments_link.php"
?>		
		<!-- 
			content_area include all the content in my website
			college.html include the introduction for three college in Rochester
			 include picture and college information
			 include footer and "back to top button"
		-->
		
		 <div id ="content_area"> 
			
			<div class = "college_box">
			
				<img  class = "img_colleges" src="assets/image/RIT.jpg" alt="RIT">
			
				<div class="college_info">
					<span class = "colleges_name">Rochester Institute of Technology</span><br>
					<span class = "list">Type:</span>&emsp;&emsp;&emsp;Private<br>
					<span class = "list">Address:</span>&emsp;&nbsp;&nbsp;1 Lomb Memorial Dr, Rochester, NY 14623<br>
					<span class = "list">President:</span>&nbsp;&nbsp;&nbsp;&nbsp;William W. Destler<br>
					<span class = "list">Founded：</span>&nbsp;&nbsp;1829<br> 
					<span class = "list">Colleges:</span> &emsp;College of Applied Science and Technology<br> 
								&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;College of Health Sciences and Technology<br>
								&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;College of Imaging Arts and Sciences<br>
								&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;Saunders College of Business<br> 
								&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;Kate Gleason College of Engineering<br> 
								&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;B. Thomas Golisano College of Computing and Information Sciences<br> 
								&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;College of Liberal Arts<br> 
								&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;College of Science<br>
								&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;National Technical Institute for the Deaf. <br>
					<span class = "list">Website:</span>&emsp;&nbsp;&nbsp;<a href="http://www.rit.edu/" target="_blank">http://www.rit.edu/</a>
				</div>
					
			</div>
			
			<div class = "college_box">
				<img  class = "img_colleges" src="assets/image/UR.jpg" alt="UR" >
			
			<div class="college_info">
				<span class = "colleges_name">University of Rochester</span><br>
				<span class = "list">Type:</span>&emsp;&emsp;&emsp;Private<br>
				<span class = "list">Address:</span>&emsp;&nbsp;&nbsp;Rochester, NY 14611<br>
				<span class = "list">President:</span>&nbsp;&nbsp;&nbsp;&nbsp;Joel Seligman<br>
				<span class = "list">Founded：</span>&nbsp;&nbsp;1850<br>
				<span class = "list">Colleges:</span> &emsp;College of Arts, Sciences and Engineering<br>
						&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;School of Medicine and Dentistry <br>
						&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;Simon Business School <br>
						&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;School of Nursing<br>
						&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;Graduate School of Education and Human Development <br>
				<span class = "list">Website:</span>&emsp;&nbsp;&nbsp;<a href="https://www.rochester.edu/" target="_blank">https://www.rochester.edu/</a>
			</div>
			
			</div>
			
			<div class = "college_box">
				<img class = "img_colleges" src="assets/image/MCC.jpg" alt="MCC" >
				
			<div class="college_info">	
				<span class = "colleges_name">Monroe Community College </span><br>
				<span class = "list">Type:</span>&emsp;&emsp;&emsp;Community college<br>
				<span class = "list">Address:</span>&emsp;&nbsp;&nbsp;1000 E Henrietta Rd, Rochester, NY 14623<br>
				<span class = "list">President:</span>&nbsp;&nbsp;&nbsp;&nbsp;Anne M. Kress<br>
				<span class = "list">Founded：</span>&nbsp;&nbsp;1961<br> 
				<span class = "list">Colleges:</span> &emsp;School of Arts and Humanities<br>
						&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;School of Science, Technology, Engineering and Math<br>
						&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;School of Business, Hospitality and Entrepreneurism<br>
						&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;School of Social Sciences and Global Studies<br>
						&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;School of Health Sciences and Physical Wellness<br>
						&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;School of Community Engagement and Development<br>
				<span class = "list">Website:</span>&emsp;&nbsp;&nbsp;<a href="http://www.monroecc.edu/" target="_blank">http://www.monroecc.edu/</a>
			</div>
		</div>
		
<?php
	include "assets/php/go_to_top.php"
?>			
<?php
	include "assets/php/footer.php"
?>	
