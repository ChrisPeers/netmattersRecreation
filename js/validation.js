let nameError = false;
let emailError = false;
let telephoneError = false;
let subjectError = false;
let messageError = false;

// A function which adds the error class or removes it on the input fields in the form
function errorClass() {
    if (nameError){
        document.getElementById('name').classList.add('error');
    } else {
        document.getElementById('name').classList.remove('error');
    }

    if (emailError){
        document.getElementById('email').classList.add('error');
    } else {
        document.getElementById('email').classList.remove('error');
    }

    if (telephoneError){
        document.getElementById('telephone').classList.add('error');
    } else {
        document.getElementById('telephone').classList.remove('error');
    }

    if (subjectError){
        document.getElementById('subject').classList.add('error');
    } else {
        document.getElementById('subject').classList.remove('error');
    }

    if (messageError){
        document.getElementById('message').classList.add('error');
    } else {
        document.getElementById('message').classList.remove('error');
    }
}

// A function which makes sure none of the fields are empty. 
function validateForm() {
    let a = document.forms["contactForm"]["contactName"].value;
    let b = document.forms["contactForm"]["contactEmail"].value;
    let c = document.forms["contactForm"]["contactTelephone"].value;
    let d = document.forms["contactForm"]["contactSubject"].value;
    let e = document.forms["contactForm"]["contactMessage"].value;

    if (a == "") {
        nameError = true;
        return false;
    } else if (b == "") {
        nameError = false;
        emailError = true;
        return false;
    } else if (c == "") {
        emailError = false;
        telephoneError = true;
        return false;
    } else if (d == "") {
        telephoneError = false;
        subjectError = true;
        return false;
    } else if (e == "") {
        subjectError = false;
        messageError = true;
        return false;
    } else {
        messageError = false;
        return true;
    }
} 

// A function which ensures only numbers can be typed into the phone number field (instantly checks on key press)
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    let charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        alert("Please enter only Numbers.");
        return false;
    }

    return true;
}

// A function which is used to validate the phone number field. 
function validatePhone() {

    let phone = document.getElementById('telephone').value;
    let temp = true;
    
    if(phone.length > 0 && phone.length < 10) {
        alert('Incorrect amount of phone digits.');
        temp = false;
        telephoneError = true;
        return temp;
    }
  
    if(phone.length > 0 && !phone.match(/^[+]?[\s./0-9]*[(]?[0-9]{1,4}[)]?[-\s./0-9]*$/g)) {
        alert('Please enter normal phone digits only.');
        temp = false;
        telephoneError = true;
        return temp;
    }
    telephoneError = false;
    return temp;
  }

// A function used to validate the email field.
function validateEmail() {

    let email = document.getElementById('email').value;

    if(email.length > 0 && !email.match(/^\S+@\S+\.\S+$/)) {

        alert('Email Invalid');
        emailError = true;
        return false;
    } else {
        emailError = false;
        return true;
    }
}

// A function used to ensure the fields are less than the max length. 
function validateLength() {

    let nameLength = document.getElementById('name').value;
    let emailLength = document.getElementById('email').value;
    let telephoneLength = document.getElementById('telephone').value;
    let subjectLength = document.getElementById('subject').value;
    let messageLength = document.getElementById('message').value;

    if (nameLength.length > 100) {
        alert('Please enter less than 100 characters in the Name field.');
        nameError = true;
        return false;
    } else if (emailLength.length > 100) {
        alert('Please enter less than 100 characters in the Email field.');
        nameError = false;
        emailError = true;
        return false;
    } else if (telephoneLength.length > 30) {
        alert('Please enter less than 30 characters in the Telephone Number field.');
        emailError = false;
        telephoneError = true;
        return false;
    } else if (subjectLength.length > 100) {
        alert('Please enter less than 100 characters in the Subject field.');
        telephoneError = false;
        subjectError = true;
        return false;
    } else if (messageLength.length > 1500) {
        alert('Please enter less than 1500 characters in the Message field.');
        subjectError = false;
        messageError = true;
        return false;
    } else {
        messageError = false;
        return true;
    }
}

// The main function that is called, it does the final validation check. 
function validate() {

    let validated = true;

    if (!validateForm()) {
        validated = false;
        console.log(validated + "  form validation");
        errorClass(); 
    }
    if (!validateEmail()) {
        validated = false;
        console.log(validated + "  email validation");
        errorClass();
    }
    if (!validatePhone()) {
        validated = false;
        console.log(validated + "  phone validation");
        errorClass();
    }
    if (!validateLength()) {
        validated = false;
        console.log(validated + "  length validation");
        errorClass();
    }
    console.log(validated);
    if (validated) {
        alert('Message was sent successfully!');
    }
    return validated;
}

