
const custNameError=document.getElementById('cust');
const contactError=document.getElementById('cust2');
const addressError=document.getElementById('cust3');
const amountError=document.getElementById('cust4');
const quantityError=document.getElementById('cust5');
function validateCustName(){
    var custName=document.getElementById('custName').value;
    var reg = /^[a-zA-Z]+$/;
    if(custName.length==0){
        custNameError.innerHTML='name req';
        custNameError.style.color='red';
        return false;
    }
    if(!custName.match(reg)){
        custNameError.innerHTML='name must be letter';
        custNameError.style.color='red';
        return false;
    }
    custNameError.innerHTML='valid';
    custNameError.style.color='green';
    return true;
}
function validateContact(){
    var contact=document.getElementById('contact').value;
    if(contact.length==0){
        contactError.innerHTML='con req';
        contactError.focus();
        return false;
    }
    if(!contact.match(/^[0-9]{10}$/)){
        contactError.innerHTML='only digit';
        contactError.style.color='red';
return false;
    }
    if(contact.length!==10){
        contactError.innerHTML='digit should be 10';
        contactError.style.color='red';
        return false;
            }
         
     contactError.innerHTML='valid';
           contactError.style.color='green';
            return true;
        }

        function validateAddress(){
            var address=document.getElementById('address').value;
            var regu = /^[a-zA-Z]+$/;
            if(address.length==0){
                addressError.innerHTML='address is required';
                addressError.style.color='red';
                return false;
            }
            if(!address.match(regu)){
                addressError.innerHTML='only letter'; 
                addressError.style.color='red';  
                return false;
            }
            addressError.innerHTML='valid';
            addressError.style.color='green';
            return true;
        }
        function validateAmount(){
            var amount=document.getElementById('amount').value;
            var regular=/^[0-9]+$/;
            if(amount.length==0){
                amountError.innerHTML='amount required';
                amountError.style.color='red';
                return false;
            }
            if(amount.length>12){
                amountError.innerHTML='amount should be less ten(10)';
                amountError.style.color='red';
                return false;
            }
            if(!amount.match(regular)){
                amountError.innerHTML='only digit possible';
                amountError.style.color='red';
                return false;
            }
            amountError.innerHTML='valid';
            amountError.style.color='green';
            return true;
        }
        function validateQuantity(){
            var quantity=document.getElementById('quantity').value;
            var regul=/^[0-9]+$/;
            if(quantity.length==0){
                quantityError.innerHTML='quantity required';
                quantityError.style.color='red';
                return false;
            }
            if(!quantity.match(regul)){
                quantityError.innerHTML='quantity only digit';
                quantityError.style.color='red';
                return false;
            }
            if(quantity.length>10){
                quantityError.innerHTML='quantity digit must be less than ten(10)';
                quantityError.style.color='red';
                return false;
            }
            quantityError.innerHTML='valid';
            quantityError.style.color='green';
            return true;
        }