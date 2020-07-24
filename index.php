<?php  
	require "signin.php";
?>

<main>

	<?php  
	if (isset($_SESSION['userId'])) {
		echo '<p>You are logged in!</p>';
	}
	
	?>

</main>

<?php 
	require "footer.php";
 ?>