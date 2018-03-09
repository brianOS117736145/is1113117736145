<?php
session_start()
?>
<DOCTYPE html>
    <html>
        <head>
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        <script type="text/javascript" src="clearChoice.js"></script>
        
        <link href="../boilerplate.css" rel="stylesheet" type="text/css">
        <link href="../fluidstyle03.css" rel="stylesheet" type="text/css">
        <link href="../cloudcss.css" rel="stylesheet" type="text/css">
            
            <title>RECEIPT</title>
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
            <h4>RECEIPT</h4>
            
            <?php
            // echo session variables that were set on previous page
            
            echo "Name: " . $_POST["name"] . ". <br>";
            echo "Email: " . $_POST["email"] . "<br>";
            echo "Total is " . $_SESSION["total"] . ".";
            ?>
            
            </div>
        </body>
    </html>
</DOCTYPE>