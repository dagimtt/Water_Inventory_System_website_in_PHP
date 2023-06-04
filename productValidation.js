// validation
const fnameError=document.getElementById('error1');
const priceError=document.getElementById('error2');
const quantityError=document.getElementById('error3');
const deprectionError=document.getElementById('error4');
const submitError=document.getElementById('error5');


function validateProductName(){
  var fname=document.getElementById('productname').value;
  var reg = /^[0-9]+[a-zA-Z]+$/;
  if(fname.length==0){
    fnameError.innerHTML='product name is required';
    return false;
  }
  if(!fname.match(reg)){
    fnameError.innerHTML='name only contians letter';   
    return false;
  }
  fnameError.innerHTML='<i class="fa-solid fa-check"></i>';
  return true;
}

function price() {
  var price=document.getElementById('price').value;
  var regular=/^[0-9]+$/;
  if(price.length==0){
    priceError.innerHTML='price required';
    priceError.style.color='red';
    return false;
  }
  if(price.length>12){
    priceError.innerHTML='price should be less than 12 digits';
    priceError.style.color='red';
    return false;
  }
  if(!price.match(regular)){
    priceError.innerHTML='only digits are allowed';
    priceError.style.color='red';
    return false;
  }
  priceError.innerHTML='valid';
  priceError.style.color='green';
  return true;
}

function validateQuantity() {
  var quantity=document.getElementById('quantity').value;
  var regular=/^[0-9]+$/;
  if(quantity.length==0){
    quantityError.innerHTML='Quantity required';
    quantityError.style.color='red';
    return false;
  }
  if(quantity.length>12){
    quantityError.innerHTML='quantity should be less than 12 digits';
    quantityError.style.color='red';
    return false;
  }
  if(!quantity.match(regular)){
    quantityError.innerHTML='only digits are allowed';
    quantityError.style.color='red';
    return false;
  }
  quantityError.innerHTML='valid';
  quantityError.style.color='green';
  return true;
}

function validateDepraction() {
  var deprection=document.getElementById('deprection').value;
  var regular=/^[0-9]+$/;
  if(deprection.length==0){
    deprectionError.innerHTML='deprection required';
    deprectionError.style.color='red';
    return false;
  }
  if(deprection.length>12){
    deprectionError.innerHTML='deprection should be less than 12 digits';
    deprectionError.style.color='red';
    return false;
  }
  if(!deprection.match(regular)){
    deprectionError.innerHTML='only digits are allowed';
    deprectionError.style.color='red';
    return false;
  }
  deprectionError.innerHTML='valid';
  deprectionError.style.color='green';
  return true;
}

function validateForm() {
  if(!validateProductName() || !price() || !validateQuantity() || !validateDepraction()) {
    submitError.style.display='block';
    submitError.innerHTML='please fill the form properly';
    setTimeout(function() {
      submitError.style.display='none';
    },3000);
    return false; 
  }
  return true;
}