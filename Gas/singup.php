<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email = $_POST['email'];
		$password = $_POST['password'];
        $name=$_POST['name'];
		if(!empty($email) && !empty($password) && !is_numeric($email))
		{

			//save to database
            $user_id = random_num(20);
			$query = "insert into users (user_id,name,email,password) values ('$user_id','$name','$email','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
            function_alert("Enter Valid Information !!");
		}
	}
?>

















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup_page</title>
    <link rel="stylesheet" href="CSS/general.css">
    <link rel="stylesheet" href="CSS/singup.css">
</head>
<body>

    <center>    <img src="image/fevicon.png" style="height: 100px;"><h1 class="heading">GAS AGENCY</h1></center>
    <div class="out">
     <div class="layout">
        <form method="post">
            <div><label>Full Name</label></div><br>
            <div><input type="text" name="name" placeholder="Full Name"></div><br><br>
            <div><label>Username</label></div><br>
            <div><input type="email" name="email" placeholder="User Name"></div><br><br>
            <div><label>Password</label></div><br>
            <div><input type="password" name="password" placeholder="Password"></div><br><br>
            <div><label>Confirm Password</label></div><br>
            <div><input type="password" name="confirm_password" placeholder="Confirm Password"></div><br><br>
            <button type="submit" name="submit" class="btn">Signup</button><br><br>
            <a href="login.html"><h4>already have account ?? Login</h4></a>
        </form>
        
     </div>
     <div>
        <img src="image/banner3.jpg" style="height:700px">
     </div>
    </div>
</body>
</html>