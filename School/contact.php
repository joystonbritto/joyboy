<?php
	include "database.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>School Management System </title>
		<link rel="stylesheet" type="text/css" href="css/style6.css">
	</head>
	<body class="back">
		<?php include"navbar.php";?>
		
		
		
		<div class="login">
			<h1 class="heading">Contact Us</h1>
			<div class="cont">
			
				<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					
					New Horizon School<BR>
					Vijaya Sree Towers, 1st Floor,<BR>
					Cherry Road, Opp Vincent Bus Stop,<BR>
					Kumarasamypatti, Salem-636 007<BR>
					Admin Contact<br>
					Mail - admin@gmail.com<br>Phone - 90430-17689
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