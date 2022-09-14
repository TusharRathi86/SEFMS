function onbtonclick() {
    document.location.href = "LogOut.php";
}

function validateSignup(){
    var stdname = document.forms.myform.txtstdname;
    var fathername = document.forms.myform.txtfathername;
    var deptname = document.forms.myform.txtdeptname;
    var strcls = document.forms.myform.txtcls;
    var stremail = document.forms.myform.txtemail;    
    var gender= document.forms.myform.txtgender;    
    
    if(stdname.value.length <=0)
    {
        alert("Please enter Student Name.",stdname);
        stdname.focus();
        return false;
    }
    if(fathername.value.length <=0)
    {
        alert("Please enter Father Name.",fathername);
        fathername.focus();
        return false;
    }
    if(deptname.value.length <=0)
    {
        alert("Please enter Department Name.",deptname);
        deptname.focus();
        return false;
    }
    if(strcls.value.length <=0)
    {
        alert("Please enter Class.",strcls);
        strcls.focus();
        return false;
    }
    if(stremail.value.length <=0)
    {
        alert("Please enter Email ID.",stremail);
        stremail.focus();
        return false;
    }
    if ((gender.value == 'S')) {

        alert('Please Select Gender');
        gender.focus();
        return false;

    }    
}