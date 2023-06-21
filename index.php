<?php
	include "dbcont.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}

		.container {
			width: 400px;
			margin: 0 auto;
			padding: 20px;
			background-color: #ffffff;
			border-radius: 10px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
		}

		h1 {
			color: #0c3294;
			font-size: 24px;
			margin-top: 0;
		}

		button {
			background-color: #0c3294;
			border: none;
			padding: 12px 20px;
			border-radius: 6px;
			color: white;
			margin: 10px;
			cursor: pointer;
			font-size: 16px;
			transition: background-color 0.3s ease;
		}
		
		button:hover {
			background-color: #144aad;
		}
		
		a {
			text-decoration: none;
			color: #0c3294;
			font-size: 16px;
		}

		a:hover {
			text-decoration: underline;
		}
	</style>
</head>
<body>	
	
	<div class="container">
		<h1>Welcome To PHP Class</h1>
		<a href="registration.php"><button>Registration</button></a>
		<p>Already have an account? <a href="login.php">Login</a></p>
	</div>
	
</body>
</html>
