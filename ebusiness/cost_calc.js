/* global $ */

function calcSub() {
    
    var argSubTotal, disc, discSub, vat, total;
    
    if(document.getElementById('salesforce').checked) {
        
        argSubTotal = 100;
        
    }
    else if(document.getElementById('aws').checked) {
        
        argSubTotal = 200;
    }
    else if(document.getElementById('c9').checked) {
        
        argSubTotal = 300;
    }
    else {
        
        argSubTotal = 400;
    }
    
    disc = argSubTotal * 0.05;
    
    discSub = argSubTotal - disc;
    
    vat = discSub * 0.1;
    
    total = discSub + vat;
  
    
    display(argSubTotal, disc, vat, total);
}




function display(parm1, parm2, parm3, parm4){
    document.getElementById("subtotal").value = parm1;
    document.getElementById("discount").value = parm2;
    document.getElementById("vat").value = parm3;
    document.getElementById("total").value = parm4;

    enablebtnProceed();
}

function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed(){
    $('#btnProceed').prop('disabled', true);
}