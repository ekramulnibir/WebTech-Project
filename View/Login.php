<?php
	include 'Header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login page</title>
	<script src="script.js"> </script>
	<link rel="stylesheet" href="style.css">
</head>
<body id="loginBody">
	<form id="loginFrom" method="post" action="../Controller/LoginAction.php" novalidate>
		<h2 id="h2_1">Login Page</h2>
		<table align="center">
			<tr>
				<td>
					<table>
						</tr>
							<td  id="errortd">
								<?php 
									if (isset($_GET['msg1'])) {
										echo $_GET['msg1'];
									}
								?>
							</td>
						<tr>
						<tr>
							<td><input type="email" id="email" name="email" placeholder="Email" size="30px"></td>
						</tr>
						<tr>
							<td><input type="password" id="password" name="password" placeholder="Password" size="30px"></td>
						</tr>
						<tr>
							<td colspan="2" id="tdCenter"><input type="submit" name="submit" value="Login" onclick="checkUser()"></td>
						</tr>
						<tr>
							<td colspan="2" id="tdCenter"><button id="Linkbutton"><a href="ForgetPassword.php" style="text-decoration:none;">Forget password?</a></button></td>
						</tr>
						<tr>
							<br>
						</tr>
						<tr>
							<td colspan="2" id="tdCenter"><button id="Linkbutton"><a href="Registration.php" >Create new account</a></button></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
		
	</form>

</body>
</html>

<?php
	include 'Footer.php';
?>