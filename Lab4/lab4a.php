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
    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>
    <form action="#" method="POST">
        <table  cellpadding="0">
            <tr>
                <td style="padding: 7px 10px">Xcompany
                <a href = "publicHome.php" name="hbutton">Home</a>|
                <a href = "login.php" name="lbutton">Login</a>|
                <a href = "registration.html"  name="rbutton">Registration</a>
            </td>
    
            </tr>

            <tr style="padding: 15px 10px" align="center">
                <td style="padding: 15px 10px"> Welcome to xCompany</td>
            </tr>
            <tr align="center">
                <td>Copyright&copy 2017</td>
            </tr>
        </table>
    </form>
    

</body>
</html>