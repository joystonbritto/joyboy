<?php
	include "database.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>School Management System - Tutor Joe's</title>
		<link rel="stylesheet" type="text/css" href="css/style4.css">
	</head>
	<body class="back">
		<?php include"navbar.php";?>
		<h3 class="haa"><a href="http://localhost/school/index.php"><b>Back to login</b></a></h3>
		
		
		<div class="login">
			<h1 class="heading">Contact Us</h1>
			<div class="cont">
			
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					
					TUTOR JOE'S COMPUTER EDUCATION<BR>
					Vijaya Sree Towers, 1st Floor,<BR>
					Cherry Road, Opp Vincent Bus Stop,<BR>
					Kumarasamypatti, Salem-636 007<BR>
					Mail - tutorjoes@gmail.com<br>Phone - 90430-17689
				</form>
			</div>
		</div>
		
		<script src="js/jquery.js"></script>
		 <script>
		$(document).ready(function(){
			$(".error").fadeTo(1000, 100).slideUp(1000, function(){
					$(".error").slideUp(1000);
			});
			
			$(".success").fadeTo(1000, 100).slideUp(1000, function(){
					$(".success").slideUp(1000);
			});
		});
	</script>
		
	
		
	</body>
</html>