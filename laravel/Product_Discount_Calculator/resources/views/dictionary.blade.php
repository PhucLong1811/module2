<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST" action="dictionary">
		@csrf
			<label>Nhập từ:</label>
			<input type="text" name="eng"/>
			<input type="submit" value="Submit" >
	</form>
</body>
</html>