<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password) && !is_numeric($email))
		{

			//read from database
			$query = "select * from users where email = '$email' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: home.php");
						die;
					}
				}
			}
			
            function_alert("wrong username or password!");
		}else
		{
            function_alert("wrong username or password!");
		}
	}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/general.css">
    <link rel="stylesheet" href="CSS/login.css">   

</head>
<body>
    <center><img src="image/logo.jpg" style="height:100px" class="header_logo"></center>
    <div class="layout">
        <form method="post">
            <div><label>Username</label></div><br>
            <div><input type="text" name="email" placeholder="Username"></div> <br><br>  
            <div><label>Password</label></div><br>
            <div><input type="password" name="password" placeholder="Password"></div><br><br>
             <center><button type="submit" name="submit" class="btn">Sign in</button><br><br>
             <div class="links">
                <a href="#">Forgot Password</a><br><br>
                <a href="#">Sign in with  <strong>Google</strong> or <strong> facebook</strong></a>
                <a href="singup.php"> <h2>Create Account</h2></a>
            </div>
        </center>
        </form>
    </div>
</body>
</html>