<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}		
?>

<!DOCTYPE html>
<html  >
	<head>
		<title>Student Management System</title>
		<link rel="stylesheet" type="text/css" href="css/style4.css">
	</head>
	<body >
	
		<?php include"navbar.php";?><br>
		
		
		<img src="https://d2gg9evh47fn9z.cloudfront.net/800px_COLOURBOX24504100.jpg" style="margin-left:20px; margin-right: 20px" class="sha">
			
			<div id="section">
			
				<?php include"sidebar.php";?><br>
				
				<div class="content">
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
						<h3 > School Information</h3><br>

					
					<p class="para">
						Our school's mission is to learn leadership, the common core, and relationships for life. Our mission is to provide a safe, disciplined learning environment that empowers all students to develop their full potential. We feel strongly about helping to build leaders that have the ability to succeed in whatever endeavor they undertake. Winning is not always the measure of success. Our students understand the "Win, win" philosophy and use it in their daily life. Common standards keeps us focused on learning appropriate content and preparing our students to graduate. Last but just as importantly, setting examples for our students of meaningful and lasting relationships will go with them throughout their lifetime.
					</p>
					
					<p class="para">
						While adopting our own unique mission stated in the introduction, we embrace the district mission of providing a safe, disciplined learning environment that empowers all students to develop their full potential. We strongly agree with and uphold the district's belief statement: "In a consistently safe and healthy environment, all students can become responsible, respectful, and resourceful. We believe students learn best when actively engaged in the learning process. Education is a collaborative partnership involving school, family, and community." At Berry Elementary School, we strive to build lasting relationships among students and staff that encourage open discussion and provide activities that develop our students' strengths.
					</p>
				
				</div>
				
			</div>
	
		
	</body>
</html>