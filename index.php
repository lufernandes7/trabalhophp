<?php
	session_start();
	
	$_SESSION['status'] = 0;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		
		<title>Login</title>
	</head>
	<body>
		
		<section class="corpo">
			<?php require("login.php"); ?>
		</section>
	</body>
</html>