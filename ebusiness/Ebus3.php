<?php
session_start()
?>
<DOCTYPE html>
    <html>
        <head>
            <title>RECEIPT</title>
        </head>
        <body>
            <h4>RECEIPT</h4>
            
            <?php
            // echo session variables that were set on previous page
            echo "Total is " . $_SESSION["total"] . ".";
            ?>
        </body>
    </html>
</DOCTYPE>