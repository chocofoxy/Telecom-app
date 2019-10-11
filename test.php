<?php
session_start();
if ( isset($_SESSION['id'])) {
if ( $_SESSION['id'] === 'ROOT' || $_SESSION['id'] === 'EMP' )
{ header("Location:./Dashboard.php"); } }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="./auth.css">

</head>
<body>
	<form name="Index" action='./login.php' method=POST >
		<h1>Gestion de Stock</h1>
		<div>
			<table align="center">
				<tr><th colspan="2">Authentification</th></tr>
				<tr><td>Login :</td><td><input type="Login" name="login"></td></tr>
				<tr><td>Password :</td><td><input type="Password" name="password"></td></tr>
				<tr><td></td><td><button >Submit</button></td></tr>
				<?php
                                  if ( isset($_SESSION['id']) ) {
                                  if ( $_SESSION['id'] === 'WRONG' )
                                   { echo '<tr><td></td><td> Wrong Password Or  Username !! </td></tr>' ;} } ?>
			</table>
		</div>
	</form>
	<script src="Index.js"></script>
</body>
</html>
