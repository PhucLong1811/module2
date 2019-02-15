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
			<h3>Chuyển đổi tiền</h3>
			Số tiền: <input type="number" name="Money" size="20"/>
			Chuyển: <input list="browsers" name="browser"><br>
			<datalist id="browsers">
				<option value="USD">
				<option value="VND">
					</datalist>
					<input type="submit" value="Calculate"/>
				</div>
			</form>
			<?php 
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$Money = $_POST["Money"];
				$Select = $_POST["browser"];
				switch ($Select) {
					case "VND":
					$result=$Money*23000;
					break;
					case "USD":
					$result=$Money/23000;
					break;
				}
				echo "$".$result;
			}
			?>
		</body>
		</html>