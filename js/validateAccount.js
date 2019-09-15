function validateFormEmail(){
    var emailfield = document.forms["validateEmail"]["inputEmail"].value;
    var emailfield2 = document.forms["validateEmail"]["inputEmail2"].value;
    if (emailfield === emailfield2) {
        return true;
    } else{
        alert("Invoer komt niet overeen!");
        return false;
    }

}

function validateFormPwd(form){
    var pwdField = document.forms["validatePwd"]["inputPwd"].value;
    var pwdField2 = document.forms["validatePwd"]["inputPwd2"].value;
    if (pwdField === pwdField2) {
        return true;
    } else{
        alert("Invoer van wachtwoorden komen niet overeen!");
        return false;
    }
}