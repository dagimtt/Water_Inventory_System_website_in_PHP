const sizeError=document.getElementById('order1');
const quantityError=document.getElementById('order2');

const emailError=document.getElementById('order3');
const phoneError=document.getElementById('order4');
const placeError=document.getElementById('order5');
const remarkError=document.getElementById('order6');
const submitError=document.getElementById('order7');
function validateSize(){
    let size=document.getElementById('size').value;
    if(size.length==0){
        sizeError.innerHTML='choose size';
        return false;
    }
    sizeError.innerHTML='';
}
function validateQuantity(){
    var quantity=document.getElementById('quantity').value;
    if(quantity=="" || quantity==null){
        quantityError.innerHTML='please insert quantity';
    }

        
            if (isNaN(quantity) && !quantity==0) {
                quantityError.innerHTML='only digit possible';
                return false;
            }
            quantityError.innerHTML='';
            return true;
        }
function validateEmail(){
    var email=document.getElementById('email').value;
        if(email.length==0){
            emailError.innerHTML='please enter email';
            return false;
        }
        if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
            emailError.innerHTML='invalid';
            return false;
        }
        emailError.innerHTML='';
        return true;
    }
    function validatePhone(){
        var phone=document.getElementById('phone').value;
        if(phone.length==0){
            phoneError.innerHTML='please enter phone';
            return false;
        }
        if(phone.length!==10){
    phoneError.innerHTML='digit should be 10';
    return false;
        }
        if(!phone.match(/^[0-9]{10}$/)){
    phoneError.innerHTML='only digit possible';
    return false;
        }
        phoneError.innerHTML='';
        return true;
    }


    function validatePlace(){
        var place=document.getElementById('place').value;
        var reg= /^[a-zA-Z]+$/;
        if(place.length==0){
            placeError.innerHTML='choose place';
            return false;
        }
        if(!place.match(reg)){
            placeError.innerHTML='place only contians letter';   
            return false;
        }
        placeError.innerHTML='';
        return true;
    }

    function validateRemark(){
        var remark=document.getElementById('remark').value;
        var required=20;
        var left=required-remark.length;
        if(left>0){
            remarkError.innerHTML=left+'more char is left';
            return false;
        }
        remarkError.innerHTML='';
        return true;
    }

    function validateForm(){
        if(!validateQuantity()|| !validateEmail() || !validatePhone() || !validatePlace() || !validateRemark()){
            submitError.style.display='block';
            submitError.innerHTML='please fill the form correctly';
           setTimeout(function(){
            submitError.style.display='none';
        },3000)
            return false; 
        }
    }