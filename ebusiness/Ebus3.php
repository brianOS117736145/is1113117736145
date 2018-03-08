<?php
session_start()
?>
<DOCTYPE html>
    <html>
        <head>
            <title>RECEIPT</title>
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
            <h4>RECEIPT</h4>
            
            <?php
            // echo session variables that were set on previous page
            echo "Total is " . $_SESSION["total"] . ".";
            ?>
        </body>
    </html>
</DOCTYPE>