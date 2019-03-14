<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="../public/css/login.css">
	<link rel="stylesheet" href="D:\bootstrap\css/bootstrap.min.css">
</head>
<body>
	<section>
		<div class="login">
			<div class="form">
				<form action="" class="register-form" name="form" method="post">
					@csrf
					@include('error.note')
					<input type="text" placeholder="username" class="textInput" name="email" value="{{old('email')}}">
					<input type="text" placeholder="email" class="textInput" name="password">
					<input type="checkbox" name="remember" value="Remember_me">Remember
					<button ">Create</button>
					<p class="message">Already Registered? <a href="#"> Login </a></p>
				</form>
				<!-- <form id="login-form" method="POST" role="form">
					<input type="text" placeholder="Username" id="userName">
					<input type="password" placeholder="Password" id="passWord">
					<button type="submit">Login</button>
					<p class="message">Not Registered? <a href="#"> Register </a></p>
				</form> -->
			</div>
		</div>
	</section>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<script>
		$('.message a').click(function(){
			$('form').animate({height:"toggle", opacity:"toggle"},"slow");
		});
	</script>
</body>
</html>