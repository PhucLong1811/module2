<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="post">
		Từ: <input id = "from" type="text" name="from" placeholder="yyyyy/mm/dd"/>
		Đến: <input id = "to" type="text" name="to" placeholder="yyyy/mm/dd" />
		<input type = "submit" id = "submit" value = "Lọc"/>
	</form>
	<?php
	$customer_list = array(
		"1" => array("name" => "Mai Văn Hoàn", "day_of_birth" => "1983/08/20", "address" => "Hà Nội", "profile" => "images/img1.jpg"),
		"2" => array("name" => "Nguyễn Văn Nam", "day_of_birth" => "1983/08/21", "address" => "Bắc Giang", "profile" => "images/img2.jpg"),
		"3" => array("name" => "Nguyễn Thái Hòa", "day_of_birth" => "1983/08/22", "address" => "Nam Định", "profile" => "images/img3.jpg"),
		"4" => array("name" => "Trần Đăng Khoa", "day_of_birth" => "1983/08/17", "address" => "Hà Tây", "profile" => "images/img4.jpg"),
		"5" => array("name" => "Nguyễn Đình Thi", "day_of_birth" => "1983/08/19", "address" => "Hà Nội", "profile" => "images/img5.jpg")
	);
	?>
</body>
</html>