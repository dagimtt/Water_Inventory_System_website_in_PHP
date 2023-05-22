const fnameError=document.getElementById('spann');
const lnameError=document.getElementById('spann2');
const emailError=document.getElementById('spann3');
const passwordError=document.getElementById('spann4');
const confirmError=document.getElementById('spann5');
const addressError=document.getElementById('spann6');
const genderError=document.getElementById('spann7');
const submitError=document.getElementById('spann8');
var password;
function validateFirstName(){
    var fname=document.getElementById('fname').value;
    var reg = /^[a-zA-Z]+$/;
    if(fname.length==0){
        fnameError.innerHTML='fname is required';
        return false;
    }
    if(!fname.match(reg)){
        fnameError.innerHTML='fname only contians letter';   
        return false;
    }
    fnameError.innerHTML='<i class="fa-solid fa-check"></i>';
    return true;
}
function validateLastName(){
    var lname=document.getElementById('lname').value;
    var regular = /^[a-zA-Z]+$/;
    if(lname.length==0){
        lnameError.innerHTML='lname is required';
        return false;
    }
    if(!lname.match(regular)){
        lnameError.innerHTML='lname only contians letter';   
        return false;
    }
    lnameError.innerHTML='<i class="fa-solid fa-check"></i>';
    return true;
}

function validEmail(){
    var email=document.getElementById('email').value;
        if(email.length==0){
            emailError.innerHTML='please enter email';
            return false;
        }
        if(!email.match(/^[A-Za-z\._\-[0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
            emailError.innerHTML='invalid';
            return false;
        }
        emailError.innerHTML='<i class="fa-solid fa-check"></i>';
        return true;
    }

    function validPassword(){
         password=document.getElementById('password').value;
        if(password.length==0){
            passwordError.innerHTML='please enter password';
            return false;
        }
        if(password.length<6){
            passwordError.innerHTML='password length must be greater than six';
            return false;
        }
        if(password.length>10){
            passwordError.innerHTML='password must be less than ten';
            return false;
        }
        passwordError.innerHTML='<i class="fa-solid fa-check"></i>';
        return true;
            }
function validConfirm(){
    var confirm=document.getElementById('confirm').value;
    if(confirm!=password){
        confirmError.innerHTML='password must be the same';
        return false;
    }
    confirmError.innerHTML='<i class="fa-solid fa-check"></i>';
    return true;
}

function validateAddress(){
    var address=document.getElementById('address').value;
    var regu = /^[a-zA-Z]+$/;
    if(address.length==0){
        addressError.innerHTML='address is required';
        return false;
    }
    if(!address.match(regu)){
        addressError.innerHTML='address only contians letter';   
        return false;
    }
    addressError.innerHTML='<i class="fa-solid fa-check"></i>';
    return true;
}

function validateGender(){
    var gender=document.getElementById('gender').value;
    var re = /^[a-zA-Z]+$/;
    if(gender.length==0){
        genderError.innerHTML='please enter your gender';
        return false;
    }
    if(!gender.match(re)){
        genderError.innerHTML='gender only contians letter';
        return false; 
    }
    if(gender=='male'|| gender=='female'){
        genderError.innerHTML='<i class="fa-solid fa-check"></i>';
        return true;
   }

}



function validateForm(){
    if(!validateFirstName()|| !validateLastName() || !validEmail() || !validPassword() || !validConfirm()
     || !validateAddress() || !validateGender()){
        submitError.style.display='block';
        submitError.innerHTML='please fill the form properly';
       setTimeout(function(){
        submitError.style.display='none';
    },3000)
        return false; 
    }
}





