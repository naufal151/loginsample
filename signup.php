<?php  
	require "signin.php";
?>

<main>
	<div class="center">
		<h1>Signup</h1>
		<form action="includes/signup.inc.php" method="post">
			<div class="txt_field">
				<input type="text" name="uid" required>
				<span></span>
				<label>Username</label>
			</div>
			<div class="txt_field">
				<input type="text" name="mail" required>
				<span></span>
				<label>E-mail</label>
			</div>
			<div class="txt_field">
				<input type="password" name="pwd" required>
				<span></span>
				<label>Password</label>
			</div>
			<div class="txt_field">
				<input type="password" name="pwd-repeat" required>
				<span></span>
				<label>Confirm Password</label>
			</div>
			<input type="submit" name="signup-submit" value="Signup">
		</form>
	</div>
</main>

<?php 
	require "footer.php";
 ?>