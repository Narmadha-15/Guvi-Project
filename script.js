'use strict';


document.querySelector('.check').addEventListener('click', function() {
    //username
    // let uname = document.querySelector('.uname').value;
    // console.log(uname);
    // if (uname == '') {
    //     alert("Enter Username");
    // }


    // //  E-mail
    // let email = document.querySelector('.uemail').value;
    // console.log(email);
    // if (email == '') {
    //     alert("Enter E-mail");
    // }

    // //  Phone
    // let ph = document.querySelector('.phone').value;
    // console.log(document.querySelector('.phone').value);
    // if (ph == '') {
    //     alert("Enter a Phone number");
    // }

    // Number or not
    ph = Number(ph);
    let ph_check = Number.isInteger(ph);
    if (!ph_check) {
        alert("Number Should be entered");
    }


    //  Password
    let pass = document.querySelector('.pswd').value;
    console.log(pass);
    if (pass == '') {
        alert("Enter Password");
    }

    let cpass = document.querySelector('.cpswd').value;
    console.log(pass);
    if (pass == '') {
        alert("Enter Password");
    }

    if (pass != cpass) {
        alert("The new password and confirm password you have entered is not matched");
    }
});