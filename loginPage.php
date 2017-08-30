<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
	<style>
	input:focus {
	    background-color: cyan;
	}
	div{
		padding : 30px;
		border : 1px solid black;
		margin-top : 20px;
		margin-left: 500px;
		margin-right: 500px;
		background-color: #fff;
	}
    </style>
</head>
<body>
<form action = "loginProcess.php" method = "POST">
<h1 align = "center">LOGIN FORM</h1>
<div align = "center">
    <input type = "text" name = "name" placeholder="Username"><br/><br/>
    <input type = "password" name = "password" placeholder="Password"><br/><br/>
    <input type = "submit" name = "submit" value = "Login"><br/><br/>
    <a href = "registrationPage.php" target="_blank">Create New User</a>&nbsp &nbsp
    <a href = "updateUser.php">Forgot Password</a><br/>
    <p style = "visibility: hidden"><a href = "loginCredentials.php" target = "_blank">Login Credential</a></p>
</div>
</form>
</body>
</html>