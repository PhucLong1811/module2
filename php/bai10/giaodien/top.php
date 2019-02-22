<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Manager</h1>
	<table style="line-height: 30px;">
		<thead>
			<tr>
				<th>STT</th>
				<th>UserName</th>
				<th>PassWord</th>
				<th>Handling</th>
			</tr>
			<?php 
			$sql = "SELECT UserName,PassWord FROM managerment";
			$result = mysqli_query($conn,$sql);
			if (mysqli_num_rows($result) > 0) {
				$i=0;
				while ($row = mysqli_fetch_assoc($result)) {
					$i++;
					$user = $row["UserName"];
					$pass = $row["PassWord"];
					echo '<tr>';
					echo '<td>'.$i.'</td>';
					echo '<td>'.$user.'</td>';
					echo '<td>'.$pass.'</td>';
					echo '</tr>';
				}
			}else{
				echo "asdas";
			}
			?>
			<form method="post" >
				<table>
					<thead>
						<tr>
							<td><input type="text" name="username" style="width: 100px;"></td>
							<td><input type="text" name="password" style="width: 100px;"></td>
						</tr>
						<tr>
							<td><input type="submit" value="Thêm" name="insert"></td>
						</tr>
					</thead>
				</table>
			</form>
			<?php 
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$user = $_POST["username"];
				$pass = $_POST["password"];
				$sql1 = mysqli_query($conn,"INSERT INTO `managerment` VALUES('$user','$pass')");
				if ($sql1) {
					echo 'aaaaa';
				} else{
					echo 'không nhận';
				}
			}
			?>
		</thead>
	</table>
