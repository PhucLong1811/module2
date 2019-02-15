<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style type="text/css">
	.login {
		height:300px;
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
	<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$Money = $_POST["Investment"];
		$Percent = $_POST["Interest"];
		$Years = $_POST["Year"];
		for ($i = 1; $i <= $Years; $i++ ){
			$Money = ($Money + ($Money * $Percent * 0.01));
		}
	}
	echo "$".$Money;
	?>
	<form method="POST">
		<div class="login">
			<h2 style="text-align: center;">Future Value Calculator Assignment</h2>
			<input type="number" name="Investment" size="25"/>
			<input type="number" name="Interest" size="25"/>
			<input type="number" name="Year" size="25"/>
			<input type="submit" value="Calculate"/>
		</div>
	</form>
</body>
</html>