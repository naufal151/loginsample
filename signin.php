<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name='description' content="This is an example of meta description. This will often show up in search result.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Phase 62</title>
	<link rel="icon" type="image/x-icon" href="img/print-10.png">
	<link href="styleme.css" type="text/css" rel="stylesheet">
<body>
	<div class="center">
		<?php  
		if (isset($_SESSION['userId'])) {
			echo "<form action='includes/logout.inc.php' method='post'>
			<button type='submit' name='logout-submit'>Logout</button>
			</form>";
		}

		else {
			echo '<h1>Login</h1>
				<form action="includes/login.inc.php" method="post">
				<div class="txt_field">
					<input type="text" name="mailuid" required>
					<span></span>
					<label>Username/E-mail</label>
				</div>
				<div class="txt_field">
					<input type="password" name="pwd" required>
					<span></span>
					<label>Password</label>
				</div>
				<div class="pass">Forgot Password?</div>
				<input type="submit" name="login-submit" value="Login">
				<div class="signup_link">
				Not a member?<a href="signup.php">Signup</a>
				</div>
				</form>';
		}

		?>
		
	</div>
</body>
</html>