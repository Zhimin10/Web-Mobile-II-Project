<?php
	//connect to database
	include "../../db240.php";
	
	//check if I got the connection
	if($conn){
	
	//check if I have a new user
	if( $_POST['userName']!=''&& $_POST['userComment']!=''){
		
		$stmt=$conn->prepare("INSERT INTO 240FP_comments (name, comment) VALUES(?,?)");
		$stmt->bind_param("ss",$_POST['userName'],$_POST['userComment']);
		$stmt->execute();
		$stmt->close();
	} 

	//get information from database
	$result=$conn->query("SELECT name, comment FROM 240FP_comments");
	
	//capture the results
	if($result){
		// put all of the data in an array 
		while($tempRowHolder= $result->fetch_assoc()){ 
			$records[]=$tempRowHolder;
		}
	}
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Comments</title> 
		<script type="text/javascript" src="assets/JS_project1.js"></script>
		<link rel="stylesheet" type="text/css" href="assets/CSS_project1.css">
	</head>
	
	<body>
	
<?php
	include "assets/php/mobile.php"
?>
		<div class = "comment_content">
			<h1 class = "comment_title">Comments</h1>
			
			<div class = "homepage_link">
				<a  href="index.php">Home page</a><br>
			</div>
			
			<form action="comments.php" method="post" onsubmit="return validate();">
				<fieldset class = "name_fieldset">
					<legend>Name </legend> 
					<input  type="text" id="name" name="userName" />
				</fieldset>
				
				<fieldset class = "comment_fieldset">
					<legend>Comment </legend> 
					<textarea id = "comment" name="userComment"></textarea>
					
				</fieldset>
				
				<div id = "comment_hint">
				* Please enter your name and your comment
				</div>
				
				
				<div class = "button_div">
					<input class = "submit_button" type="submit" value="Submit"/>
				</div>
			</form>
			
			<?php	
				 foreach($records as $this_row){
					 echo '<div class="comment_box"><div class = "comment_name">'.$this_row['name'].'</div>
				<div class = "comment_comment">'.$this_row['comment'].'</div></div>';
					 
					 
					 
					 
				}	
				
			 ?>
		 
		
				 
<?php
	include "assets/php/go_to_top.php"
?>			
<?php
	include "assets/php/footer.php"
?>	
