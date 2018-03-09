/* global $ */

function clearChoice() {
    
    var cleared = 0.00;
    
   
        
        
        
    
    
    clearDisplay(cleared);
}

function clearDisplay(parm1){
    document.getElementById("subtotal").value = parm1;
    document.getElementById("discount").value = parm1;
    document.getElementById("vat").value = parm1;
    document.getElementById("total").value = parm1;

    disablebtnProceed()();
}

function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed(){
    $('#btnProceed').prop('disabled', true);
}