<?php
	//session_start();
	
	//if($_SESSION['status'] == "Ok"){ 
    
        if(isset($_REQUEST['hbutton']))
        {
            header('location: publicHome.php');
        }
        elseif(isset($_REQUEST['lbutton']))
        {
            header('location: login.html');
        }
        elseif(isset($_REQUEST['rbutton']))
        {
            header('location: Registration.html');
        }
        

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .main{
        /* width: 800px; */
        margin: 0 auto;
        border : 1px solid black;
        padding: 20px 10px;
    }
    .navbar{
        display: flex;
        justify-content: space-between;
    }
    .nav ul {
        list-style: none;
        display: flex;
        padding-right: 150px;

    }
    .nav > ul >  li {
        margin-left: 20px;
        font-size: 18px;
    }
    .logo{
        text-transform: uppercase;
        font-size: 22px;
        margin-top: 10px;
        padding-left: 200px;
    }
    a{
        text-decoration: none;
    }


</style>
<body >

<div class="main">

    <div class="navbar">


    <div class="logo">Dream House Company</div>
    <div class="nav">
    Logged in as <a href = "dashboard.php" name="username" > <?php echo $_COOKIE['uname']; ?></a>|
            <a href = "logout.php" name="logout">Logout</a>
    </div>


    </div>
</div>


