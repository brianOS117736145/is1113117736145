<!DOCTYPE html>
<html>
    <head>
        <title>Select Product</title>
        
        <!--jQuery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        <script type="text/javascript" src="clearChoice.js"></script>
        
        <link href="../boilerplate.css" rel="stylesheet" type="text/css">
        <link href="../fluidstyle03.css" rel="stylesheet" type="text/css">
        <link href="../cloudcss.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
         
        
        
        <br/>
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
    <div id="wrapper">
        <form method="POST" action="Ebus2.php">
            <h4>Select a product</h4>
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                Salesforce @ $100
            </label>
            
            <br/><br/>
            
            <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                Amazon Web Services @ $200
            </label>
            
            <br/><br/>
            
            <label for="c9">
                <input type="radio" id="c9" name="product" onClick="disablebtnProceed()"/>
                Cloud 9 @ $300
            </label>
            
            <br/><br/>
            
            <label for="gmail">
                <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ $400
            </label>
            
            <br/>
            <br/>
            
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
            </label>
            
            <br/><br/>
            
            <label for="discount">
                Discount @ 5%
                <input type="text" id="discount" value="0.00" readonly/>
            </label>
            
            <br/><br/>
            
            <label for="vat">
                V.A.T. @ 10%
                <input type="text" id="vat" value="0.00" readonly/>
            </label>
            
            <br/><br/>
            
            <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
            
            <br/><br/>
            
            
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
        </form>
        
        <br/>
        
        <button onClick="calcSub()">Calculate Cost</button><br/><br/>
        <button onClick="clearChoice()">Clear Choices</button>
       
        </div>
    </div>
    </body>
    
</html>