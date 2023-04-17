<!DOCTYPE html>
<html>
<head>
	<title>Login Customer</title>
	<style>
		body {
			background-color: #323164;
			color: white;
			font-family: Arial, sans-serif;
			font-size: 16px;
		}
		h1 {
			text-align: center;
			margin-top: 50px;
		}
		form {
			width: 400px;
			margin: 10px auto;
			background-color: #D9D9D9;
			padding: 20px;
			border-radius: 10px;
			box-shadow: px 0px 20px 0px rgba(0,0,0,0.2);
		}
		label {
			display: block;
			margin-bottom: 8px;
		}
		input[type=text], input[type=password] {
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		button[type=submit] {
			background-color: #323164;
			color: #D9D9D9;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			width: 100%;
			font-size: 16px;
			font-weight: bold;
			text-transform: uppercase;
			transition: background-color 0.3s ease;
		}
		button[type=submit]:hover {
			background-color: #0b05b5;
		}
		.signup-link {
			display: block;
			text-align: center;
			margin-top: 20px;
			color: #000000;
			text-decoration: none;
			cursor: pointer;
		}
		.signup-link:hover {
			color: #9f9696;
			text-decoration: underline;
		}
	</style>
</head>
<body>
	<h1>Welcome Back!</h1>
	<form>
		<label for="username"><b>Username</b></label>
		<input type="text" placeholder="Enter Username" name="username" required>

		<label for="password"><b>Password</b></label>
		<input type="password" placeholder="Enter Password" name="password" required>

		<button type="submit">Login</button>
		<a href="{{Route('custRegister')}}" class="signup-link">Dont Have An Account? Sign up</a>
	</form>
</body>
</html>
