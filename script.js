'use strict';


document.querySelector('.check').addEventListener('click', function() {


    // Number or not
    ph = Number(ph);
    let ph_check = Number.isInteger(ph);
    if (!ph_check) {
        alert("Number Should be entered");
    }


    //  Password
    let pass = document.querySelector('.pswd').value;
    if (pass == '') {
        alert("Enter Password");
    }

    let cpass = document.querySelector('.cpswd').value;
    if (pass == '') {
        alert("Enter Password");
    }

    if (pass != cpass) {
        alert("The new password and confirm password you have entered is not matched");
    }
});