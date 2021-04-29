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
						Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna 
					</p>
					
					<p class="para">
						 sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoSunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamcoSunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit,  
					</p>
				
				</div>
				
			</div>
	
		
	</body>
</html>