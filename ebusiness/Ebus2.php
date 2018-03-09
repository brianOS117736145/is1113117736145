<?php
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="../boilerplate.css" rel="stylesheet" type="text/css">
        <link href="../fluidstyle03.css" rel="stylesheet" type="text/css">
        <link href="../cloudcss.css" rel="stylesheet" type="text/css">
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
         <div id="wrapper">
                <header id="top">
        <h1>117736145 Project</h1>
<nav id="mainnav">
        <ul>
            <li><a href="../home.html">Home</a></li>
            <li><a href="../cloud02.html">About Cloud</a></li>
            <li><a href="ebusiness/Ebus1.php" class="thispage">Products</a></li>
            
        </ul>
    </nav>
    </header>
        <h4>Please enter your payment details</h4>
        
        <form action="Ebus3.php" method="POST">
            
            <label for="name">Name: </label>
            <input type="text" id="name" name="name"><br/><br/>
            
            <label for="email">Email: </label>
             <input type="text" id="email" name="email"><br/><br/>
            
            <label for="user_pin">PIN: </label>
            <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4"><br/><br/>
            
            <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
        </form>
        
        <br/>
        <button onClick="validateDetails()">Validate</button>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <?php
        //set session variables
        $_SESSION["total"] = $_POST["total"];
        ?>
        </div>
    </body>
</html>