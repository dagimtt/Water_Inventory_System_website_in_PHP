
    //alert("alert")
    const forme = document.getElementById('forme');
    const fname = document.getElementById('fname');
    const lname = document.getElementById('lname');
    const contact = document.getElementById('contact');
    const address = document.getElementById('address');
    const account = document.getElementById('account');
    const salary = document.getElementById('salary');
 forme.addEventListener('submit', e=>{
            e.preventDefault();
            validation();
 });


    const validation=()=>{
    const fnamevalue = fname.ariaValueMax.trim();
    const lnamevalue = lname.ariaValueMax.trim();
    const contactvalue = contact.ariaValueMax.trim();
    const addressvalue = address.ariaValueMax.trim();
    const accountvalue = account.ariaValueMax.trim();
    const salaryvalue = salary.ariaValueMax.trim();

    
}