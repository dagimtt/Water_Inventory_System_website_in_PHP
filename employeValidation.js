var lastScrollTop = 0;
navbar = document.getElementById("navbar");
window.addEventListener("scroll", function () {
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if (scrollTop > lastScrollTop) {
        navbar.style.top = "-80px";
    } else {
        navbar.style.top = "0";
    }
    lastScrollTop = scrollTop;
})


// validation
const fnameError=document.getElementById('error1');
const lnameError=document.getElementById('error2');
const contactError=document.getElementById('error3');
const addressError=document.getElementById('error4');
const accountError=document.getElementById('error5');
const salaryError=document.getElementById('error6');
const submitError=document.getElementById('error7');


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

function validateContact(){
var contact=document.getElementById('contact').value;
if(contact.length==0){
contactError.innerHTML='please enter contact';
return false;
}
if(contact.length!==10){
contactError.innerHTML='digit should be 10';
return false;
}
if(!contact.match(/^[0-9]{10}$/)){
contactError.innerHTML='only digit possible';
return false;
}
contactError.innerHTML='';
return true;
}

function validateAddress(){
var address=document.getElementById('address').value;
var regular = /^[a-zA-Z]+$/;
if(address.length==0){
addressError.innerHTML='address is required';
return false;
}
if(!address.match(regular)){
addressError.innerHTML='lname only contians letter';   
return false;
}
addressError.innerHTML='<i class="fa-solid fa-check"></i>';
return true;
}
function validateAccount(){
let account=document.getElementById('account').value;
if(account.length==0){
accountError.innerHTML='choose Account stutus';
return false;
}
accountError.innerHTML='';
}
function validateSalary(){
var salary=document.getElementById('salary').value;
if(salary=="" || salary==null){
salaryError.innerHTML='please insert salary';
}


    if (isNaN(quantity) && !quantity==0) {
        salaryError.innerHTML='only digit possible';
        return false;
    }
    salaryError.innerHTML='';
    return true;
}





function validateForm(){
if(!validateFirstName()|| !validateLastName()||!validateContact()||!validateAddress()||!validateAccount() || !validateSalary()){
submitError.style.display='block';
submitError.innerHTML='please fill the form properly';
setTimeout(function(){
submitError.style.display='none';
},3000)
return false; 
}
}
