<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="login.css">
	<link rel="stylesheet" href="D:\bootstrap\css/bootstrap.min.css">
	<style type="">
	body{

		background-size: cover;
		background-image: url(D:\codegym\baicuoiky\img\anhe/12.jpg);

	}
	.login{
		width: 360px;

		margin: auto;
	}
	.form{
		position: relative;
		z-index: 1;
		background: rgba(230, 230, 255,0.1);
		max-width: 360px;
		margin: 0 auto 100px;
		padding: 45px;
		text-align: center;
	}
	.form input{
		font-family: "Roboto",sans-serif;
		outline: 1;
		background:#f2f2f2;
		width: 95%;
		border: 0;
		margin: 0 0 15px;
		padding: 15px;
		font-size: 14px;
		box-sizing: border-box;
	}
	.form button{
		font-family: "Roboto",sans-serif;
		text-transform: uppercase;
		outline: 0;
		background:#4ACF50;
		width: 95%;
		border: 0;
		padding: 15px;
		color: #ffffff;
		font-size: 14px;
		cursor: pointer;
	}
	.form button:hover,.form button:active{
		background: #43A047;
	}
	.form .message{
		margin: 15px 0 0;
		color: aliceblue;
		font-size: 12px;
	}
	.form .message a{
		color: #4ACF50;
		text-decoration: none;
	}
	table{
		border-collapse: collapse;
		width: 100%;
	}
	td, th{
		border: solid 1px #ccc;
	}
</style>
</head>
<body>
	<?php
	function loadRegistrations($filename){
		$jsondata = file_get_contents($filename);
		$arr_data = json_decode($jsondata, true);
		return $arr_data;
	}
	function saveDataJSON($filename, $name, $email, $phone)
	{
		try {
			$contact = array(
				'name' => $name,
				'email' => $email,
				'phone' => $phone
			);
                // converts json data into array
			$arr_data = loadRegistrations($filename);
                // Push user data to array
			array_push($arr_data, $contact);
                //Convert updated array to JSON
			$jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
                //Viết
			file_put_contents($filename, $jsondata);
			echo "Lưu dữ liệu thành công!";
		} catch (Exception $e) {
			echo 'Lỗi: ', $e->getMessage(), "\n";
		}
	}
	$nameErr = NULL;
	$emailErr = NULL;
	$phoneErr = NULL;
	$name = NULL;
	$email = NULL;
	$phone = NULL;
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = $_POST["name"];
		$email = $_POST["email"];
		$phone = $_POST["phone"];
		$has_error = false;
		if (empty($name)) {
			$nameErr = "Tên đăng nhập không được để trống!";
			$has_error = true;
		}
		if (empty($email)) {
			$emailErr = "Email không được để trống!";
			$has_error = true;
		} else {
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$emailErr = "Định dạng email sai (xxx@xxx.xxx.xxx)!";
				$has_error = true;
			}
		}
		if (empty($phone)) {
			$phoneErr = " Số điện thoại không được để trống!";
			$has_error = true;
		}
		if ($has_error === false) {
			saveDataJSON("data.json", $name, $email, $phone);
			$name = NULL;
			$email = NULL;
			$phone = NULL;
		}
	}
	?>
	<?php
	$registrations = loadRegistrations('data.json');
	?>
	<h2>Registration list</h2>
	<table>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
		</tr>
		<?php foreach ($registrations as $registration): ?>
			<tr>
				<td><?= $registration['name']; ?></td>
				<td><?= $registration['email']; ?></td>
				<td><?= $registration['phone']; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
	<div class="login">
		<div class="form">
			<form action="" name="form" method="post"class="login">
				<input type="text" placeholder="fullname"name="name">
				<span class="error">* <?php echo $nameErr; ?></span>
				<input type="text" placeholder="email"name="email">
				<span class="error">* <?php echo $emailErr; ?></span>
				<input type="text" placeholder="user"name="phone">
				<span class="error">* <?php echo $phoneErr; ?></span>

				<button onclick="create()">Create</button>
			</form>
		</div>
	</div> 
</body>
</html>