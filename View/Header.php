<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Header page</title>
</head>
<body>

	<?php
		if(empty($_SESSION['login_email']) || empty($_SESSION['login_password'])){
			echo '<h2 align="center"><a href="../View/Homepage.php" style="text-decoration:none;">WT Hospital Managment System</a></h2>';
		}else{
			echo '<h2 align="center"><a href="../View/Homepage.php" style="text-decoration:none;">WT Hospital Managment System</a></h2>

				<div align="right">
					<button ><a href="Profile.php?" style="text-decoration:none;"> Profile</a></button>
				</div>';
		}
		?>

	

</body>
</html>