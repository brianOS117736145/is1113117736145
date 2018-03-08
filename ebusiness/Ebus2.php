<?php
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Enter Details</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
          <nav id="mainnav" class="fluid ">
      <div id="minMenu" class="fluid listitems hide_tablet hide_desktop" >Menu</div>
      <ul id="navlist" class="fluid fluidList navlist">
        <li class="fluid listitems"><a href="#" class="fluid listitems thispage">Home</a></li>
        <li class="fluid listitems"><a href="cv/cv_page1.html">CV</a></li>
        <li class="fluid listitems"><a href="Interests/sports.html">Interests</a></li>
        <li class="fluid listitems"><a href="ebusiness/Ebus1.php">Ebus</a></li>
        <li class="fluid listitems"><a href="cloud/cloud.html">About Cloud</a></li>
      </ul>
    </nav>
        <h4>Please enter your payment details</h4>
        
        <form action="Ebus3.php" method="POST">
            
            <label for="user_pin">PIN</label>
            <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4">
            
            <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
        </form>
        
        <br/>
        <button onClick="validateDetails()">Validate</button>
        
        <script type="text/javascript" src="ebus2_validator.js"></script>
        
        <?php
        //set session variables
        $_SESSION["total"] = $_POST["total"];
        ?>
        
    </body>
</html>