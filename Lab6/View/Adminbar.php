<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset style="width: 98%;">
        <?php include('../View/Header.php'); ?>
        <div style="float: right;">
            <a href="/ProjectDH/View/ChangePass.php">Change Password</a> | <a href="/ProjectDH/Controller/Logout.php">Logout</a>
        </div>
        <br>
        <div style="float: right;">
            <b>Manager Panel</b>
        </div>
    </fieldset>
    <br>
    <div style="width: 30%; float: left;">
        <ul>
            <li><a href="/ProjectDH/View/Dashboard.php"><b> Dashboard</b></a><br><br></li>
            <li><a href="/ProjectDH/View/Admin.php"><b> Profile</b></a><br><br></li>
            <li><a href="/ProjectDH/View/Seller.php"><b> Seller </b></a><br><br></li>
            <li><a href="/ProjectDH/View/Buyer.php"><b> Buyer </b></a><br><br></li>
            <li><a href="/ProjectDH/View/Apartment.php"><b>Transaction </b></a><br><br></li>
            <li><a href="/ProjectDH/View/NnE.php"><b> News and Events</b></a><br><br></li>
            <li><a href="/ProjectDH/View/Query.php"><b> Help Session</b></a><br><br></li>
        </ul>
    </div>
</body>
</html>