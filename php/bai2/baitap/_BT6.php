<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style type="text/css">
	.login {
		height:220px;
		width:230px;
		margin:0;
		border:1px #CCC solid;
		padding:10px;
	}
	.login input {
		padding:5px;
		margin:5px
	}
</style>
</head>
<body>
	<form method="POST">
		<div class="login">
			<input type="number" name="so" size="20"/>
			<input type="submit" value="Calculate"/>
		</div>
	</form>
	<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$array = $_POST["so"];
		
	}
	 ?>
</body>
</html>