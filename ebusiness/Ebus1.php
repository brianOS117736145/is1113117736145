<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
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
        <h4>Select a product</h4>
        
        <br/>
        
        <form method="POST" action="Ebus2.php">
            
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                Salesforce @ $100
            </label>
            
            <br/>
            
            <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
            </label>
            
            <br/>
            <br/>
            
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
            
            <br/>
            
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
        </form>
        
        <br/>
        <button onClick="calcSub()">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choices</a>
    
    </body>
    
</html>