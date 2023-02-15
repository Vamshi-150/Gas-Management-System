
<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home_page</title>
    <style>
        .header{
            border: 1px solid;
            justify-content: space-between;
            align-items: center;
            display: flex;
            flex-direction: row;
            padding: 10px;
            background-color: #2b2b2b  ;
            margin: -10px;
        }
        .head-btn{
            height:50px;
            width: auto;
            font-size: 18px;
            border: none;
            background-color: white;
            border-radius: 30px;
            font-weight: bold;
        }
        .head-btn:hover{
            cursor: pointer;
            color: rgb(33, 83, 220);
        }
        body{
            background-image: url("image/b1.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            
            
        }
        .b{
            color: white;
            font-size: 75px;
            margin-top: 80px;
            margin-left: 500px;
        }
        .about{
            width: 1200px;
            color:  white;
            margin: auto;
            font-size: 35px;
          
        }
       
    </style>
</head>
<body>
    <div class="header">
        <div>
          <img src="image/logo.jpg" height="50px" >
        </div>
        <div>
            <a href="index.php"><button class="head-btn">&nbsp;&nbsp;Shop&nbsp;&nbsp;</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="new.html"><button class="head-btn">&nbsp;Connection&nbsp;</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
        <div style="display:flex; flex-direction:row;">
            <a href="home.html"><button class="head-btn">&nbsp;Logout&nbsp;</button></a>&nbsp;&nbsp;&nbsp;
            <p style="color:white;" ><?php echo $user_data['name']; ?></p><button  style="border-radius:40px; border: none; cursor: pointer;"><img src="image/avatar.jpg" height="50px"></button>
        </div>
    </div>
    <div style="display:flex; flex-direction:column;">
    <p class="b">Welcome to Gasmark Pro !!</p>
    <div class="about">
        <p>From fueling kitchens across urban and rural 
            lanscapes to delivering clean fuel to industries
            ,all the while complying with internation 
            standards of safety , Gasmark Pro is aptly known as 
            'your friendly gas', as it promptly responds to the call of duty 
            even in the most challenging times and continues Delivering Happiness.</p>
    </div>
    </div>
</body>
</html>