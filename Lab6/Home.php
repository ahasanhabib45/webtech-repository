<?php 
    $ezl = new mysqli("localhost", "root", "", "dream house");
    if ($ezl->connect_error) {
        die("Data base Connection failed: " . $ezl->connect_error);
    }

    $sql = "SELECT * FROM news";
    $qry = $ezl->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="Home.css">
    <title>Home</title>
    <style>
        * {
            box-sizing: border-box;
        }

        .menu {
            float: left;
            width: 20%;
            text-align: center;
        }

        .menu a {
            background-color: #e5e5e5;
            padding: 8px;
            margin-top: 7px;
            display: block;
            width: 100%;
            color: black;
        }

        .main {
            float: left;
            width: 40%;
            padding: 0 20px;
        }

        .right {
            background-color: #e5e5e5;
            float: left;
            width: 40%;
            padding: 15px;
            margin-top: 7px;
            text-align: center;
        }

        .button {
            background-color: #4CAF50;
            /* Green */
            border: none;
            color: white;
            padding: 8px 25px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button1 {
            background-color: white;
            color: black;
            border: 2px solid #008CBA;
            border-radius: 4px;
        }

        .button1:hover {
            background-color: #008CBA;
            color: white;
            border-radius: 4px;
        }

        .button2 {
            background-color: white;
            color: black;
            border: 2px solid #008CBA;
            border-radius: 4px;
        }

        .button2:hover {
            background-color: #008CBA;
            color: white;
            border-radius: 4px;
        }

        /*Image slide css
*/

        * {
            box-sizing: border-box
        }

        body {
            font-family: Verdana, sans-serif;
            margin: 0
        }

        .mySlides {
            display: none
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 10px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }
    </style>
</head>

<body style="font-family: Verdana">

    <fieldset>
        <span><b>Dream House!</b></span>
        <div style="padding: 5px; text-align:right;">

            <a href="/ProjectDH/View/login.php">
                <button class="button button1">
                    Login
                </button>
            </a>

            <a href="/ProjectDH/View/Registration.php">
                <button class="button button2">
                    Sign Up
                </button>
            </a>
        </div>
    </fieldset>

    

    

    <div style="overflow: auto;">

        <div class="menu">
            <p><b>News and events</b></p>
            <ul>
            <?php 
                if ($qry->num_rows > 0) {
                    while ($data = $qry->fetch_assoc()) {
                        echo "<li>" . $data['News'] . "</li>";
                    }
                }
            ?>
            </ul>
        </div>

        <div class="main">
            <p style="color:blue; text-align:center"><b>Welcome to Dream House</b></p>
        </div>

      
    <?php include '../ProjectDH/View/Footer.php' ?>

    

</body>

</html>