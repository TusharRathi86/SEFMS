function validateSignin(){
    var uname = document.forms.myform.txtUser;
    var ypass = document.forms.myform.txtPass;
    if(uname.value.length <=0)
    {
        alert("Please enter a valid User ID.");
        uname.focus();
        return false;
    }
    if(uname.value.length > 15)
    {
        alert("INVALID USER ID!!!. USER ID length should not be greater than 15 characters.");
        uname.focus();
        return false;
    }
    if(ypass.value.length <=0)
    {
        alert("Please enter a valid Password.");
        ypass.focus();
        return false;
    }  
    //Regular Expression For User ID.
    function isAlphaNumeric(str) {
        var IsAlphaN;
        var reN = /^[a-zA-Z0-9]+$/;
        if (reN.test(str)) {
            IsAlphaN = true;
        }
        else {
            IsAlphaN = false;
        }
        return IsAlphaN;  
    }
    if ((uname.value.length > 0)) {
        if (isAlphaNumeric(uname.value) == false) {
            alert("Please enter Only Alphanumeric Characters in UserID..Space is also not allowed");
            uname.focus();
            return false;
        }

    }

    //Regular Expression For Paqssword.
     function passcheck(str) {
        var passcont;
        var reN = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,11}$/;
        if (reN.test(str)) {
            passcont = true;
        }
        else {
            passcont = false;
        }
        return passcont;  
    }
    if ((ypass.value.length > 0)) {
        if (passcheck(ypass.value) == false) {
            alert("Please enter a valid password. Should be 6 to 12 characters - Atleast one special character - Alphanumeric - Space is not allowed");
            ypass.focus();
            return false;
        }
    }
}