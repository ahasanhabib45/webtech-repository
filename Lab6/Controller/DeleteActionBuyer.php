<?php
    session_start(); 
    if(!isset($_SESSION['username'])) {
        header("Location: /ProjectDH/View/login.php");
    }

    require '../Model/BuyerDB.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Delete Action</title>
</head>
<body>
    <?php include('../View/Adminbar.php'); ?>
    <fieldset style="width: 50%; height: 450px;">
        <legend><b>Buyer</b></legend>
        <?php
            if (isset($_GET['id'])) {		
                $id = $_GET['id'];

                delete($id);
            }
            else {
                die("Invalid Request");
            }
            echo "✅Buyer Removed<br>";
        ?>
        <a href="/ProjectDH/View/Buyer.php">Go Back</a>
    </fieldset>

    <fieldset style="width: 98%;">
        <?php include '../View/Footer.php'; ?>
    </fieldset>
</body>
</html>