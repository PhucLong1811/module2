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
	<?php 
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$Product = $_POST["ProductDescription"];
			$List = $_POST["ListPrice"];
			$Discount = $_POST["DiscountPercent"];
			$Money = ($List * $Discount * 0.01);
			$Bill = $List - $Money;
			echo "Tên sản phẩm :".$Product."</br>";
			echo "Giá giảm là: ".$Money." VND"."</br>";
			echo "Giá còn :".$Bill." VND";
		}
	?>
<form method="POST">
	<div class="login">
		<h3>Product Discount Calculator</h3>
		<input type="text" name="ProductDescription" size="20"/>
		<input type="number" name="ListPrice" size="25"/>
		<input type="number" name="DiscountPercent" size="25"/>
		<input type="submit" value="Calculate"/>
	</div>
</form>
</body>
</html>