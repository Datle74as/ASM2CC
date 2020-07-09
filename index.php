<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
</head>
<style type="text/css">
	
	body{
		font-family: 'Poppins', sans-serif;
		margin: 0;
		padding: 0;
		background: url(https://i.ibb.co/FKn4nR4/bg.jpg);
		background-size: cover;
	}
	.form-wrapper{
		width: 320px;
		height: 400px;
		background: rgba(0, 0, 0, 0.5);
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		box-shadow: 3px 15px 22px 6px rgba(0,0,0,0.75);
	}
	.form-wrapper .user{
		height: 100px;
		width: 100px;
		border-radius: 50%;
		overflow: hidden;
		position: absolute;
		top: calc(-100px / 2);
		left: calc(50% - 50px); 
	}
	.form-wrapper h2{
		color: #FBC02D;
		margin-top: 60px;
		font-weight: 700;
		text-align: center;
	}
	form label , form input{
		display: block;
		margin-left: 10px;
	}
	form label{
		color: #FFEB3B;
		font-weight: 700;
		margin: 10px 10px 0px;
	}
	form input{
		width: 90%;
		background: transparent;
		border: 0;
		outline: 0;
		border-bottom: 2px solid #FFC107;
		padding: 5px 10px;
		color: #fff;
		margin-bottom: 20px;
	}
	form button{
		display: block;
		width: 80%;
		text-align: center;
		background: #FFEB3B;
		color: #fff;
		padding: 10px 0;
		cursor: pointer;
		border: 0;
		outline: 0;
		border-radius: 10px;
		margin: 10px auto;
		transition: 0.5s;
		font-size: 18px;
		font-weight: 700;
		letter-spacing: 1px;
	}
	form button:hover{
		background: #FFF9C4;
		color: #212121;
	}
	.forget{
		color: #FFF9C4;
		margin: 20px 10px;
	}
</style>
<body>
	<div class="form-wrapper">
		<img src="https://i.ibb.co/12nDjWB/user.png" class="user">
		<h2>Login</h2>
		<form action="Connect.php" method="POST">
			<label>UserName</label>
			<input type="email" placeholder="Enter UserName" name="username">
			<label>Password</label>
			<input type="password" placeholder="Enter Your Password" name="pass">
			<button type="submit">Login</button>
			<a href="#" class="forget">Forget Password</a>
		</form>
	</div>
</body>
</html>