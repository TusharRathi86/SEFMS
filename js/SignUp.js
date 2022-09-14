function validateSignup(){
    var name = document.forms.myform.txtname;   
    var email = document.forms.myform.txtemail;
    var pnum = document.forms.myform.txtpnumber;
    var addr = document.forms.myform.txtaddress;
    var uname = document.forms.myform.txtuser;
    var pass = document.forms.myform.txtpasswd;
    var gender= document.forms.myform.txtgender;
    var cpass = document.forms.myform.txtcpasswd;
    
    if(name.value.length <=0)
    {
        alert("Please enter Your Name.",name);
        name.focus();
        return false;
    }

    //Regular Expression For Name.
    function namecheck(str) {
        var nameconts;
        var reN = /^[a-zA-Z ]*$/;
        if (reN.test(str)) {
            nameconts = true;
        }
        else {
            nameconts = false;
        }
        return nameconts;  
    }
    if ((name.value.length > 0)) {
        if (namecheck(name.value) == false) {
            alert("Invalid input. Please enter your name in alphabets only.");
            name.focus();
            return false;
        }
    }

    if(email.value.length <=0)
    {
        alert("Please enter a Valid email.",email);
        email.focus();
        return false;
    }

    //Regular Expression For E-mail.
    function emailcheck(str) {
        var emailcont;
        var reN = /^([a-zA-Z0-9\.-]+)@([a-zA-Z0-9]+).([a-zA-Z]{2,8})(.[a-z]{2,3})$/;
        if (reN.test(str)) {
            emailcont = true;
        }
        else {
            emailcont = false;
        }
        return emailcont;  
    }
    if ((email.value.length > 0)) {
        if (emailcheck(email.value) == false) {
            alert("Please enter a valid email.");
            email.focus();
            return false;
        }
    }

    if(pnum.value.length <=0)
    {
        alert("Please enter a Valid Number.",pnum);
        pnum.focus();
        return false;
    }

    //Regular Expression For Phone Number.
    function numbercheck(str) {
        var numcont;
        var reN = /^[6-9][0-9]{9}$/;
        if (reN.test(str)) {
            numcont = true;
        }
        else {
            numcont = false;
        }
        return numcont;  
    }
    if ((pnum.value.length > 0)) {
        if (numbercheck(pnum.value) == false) {
            alert("Please enter a valid Mobile number.");
            pnum.focus();
            return false;
        }
    }

    if(addr.value.length <=0)
    {
        alert("Please enter your Address.",addr);
        addr.focus();
        return false;
    }
    
    if ((gender.value == 'Select Gender')) {

        alert('Please Select Gender');
        gender.focus();
        return false;

    }    

    if(uname.value.length <=0)
    {
        alert("Please enter User Name.",uname);
        uname.focus();
        return false;
    }

    //Regular Expression For Username.
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
            alert("Please enter Only Alphanumwric Characters in UserID. Space is also not allowed");
            uname.focus();
            return false;
        }
    }
       
    if(pass.value.length <=0)
    {
        alert("Please enter Your Password.",pass);
        pass.focus();
        return false;
    }

    //Regular Expression Password.
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
    if ((pass.value.length > 0)) {
        if (passcheck(pass.value) == false) {
            alert("Please enter a valid password. Should be 6 to 12 characters - Atleast one special character - Alphanumeric - Space is not allowed");
            pass.focus();
            return false;
        }
    }
   
    if(cpass.value.length <=0)
    {
        alert("Please Confirm Your Password.",cpass);
        cpass.focus();
        return false;
    }
   
    if ((pass.value.length > 0) && (cpass.value.length > 0)) {
        var str1 =pass.value;
        var str2 =cpass.value;
        var n = str1.localeCompare(str2);
        if (n != 0) {
            alert("Password Mismatch. Re-enter the Password");
            pass.value = '';
            cpass.value = ''; 
            pass.focus();           
            return false;
        }
    }
}