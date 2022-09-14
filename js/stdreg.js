function validatestdreg(){

    var deptname = document.forms.myform.txtdeptlst;
    var stryear = document.forms.myform.txtyr;
    var name = document.forms.myform.txtname;
    var fname = document.forms.myform.txtfname;
    var strcls = document.forms.myform.txtcls;       
    var email = document.forms.myform.txtemail;
    var pnum = document.forms.myform.txtphnumber;
    var addr = document.forms.myform.txtaddress;
    var stat = document.forms.myform.txtstate;    
    var gender= document.forms.myform.txtgender;

   if ((deptname.value == 'N')) {

        alert('Please Select Department');
        deptname.focus();
        return false;

    } 

   if ((stryear.value == 'Select Year')) {

        alert('Please Select Year');
        stryear.focus();
        return false;

    }   
    
   
    if(name.value.length <=0)
    {
        alert("Please enter Student Name.",name);
        name.focus();
        return false;
    }

    //Regular Expression For Student Name.
    function namecheck(str) {
        var nameconts;
        var reN = /^[a-zA-Z ]+$/;
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
            alert("Invalid input. Please enter student name in alphabets only.");
            name.focus();
            return false;
        }
    }

   if(fname.value.length <=0)
    {
        alert("Please enter Father's Name.",fname);
        fname.focus();
        return false;
    }

    //Regular Expression For Father Name.
    function fnamecheck(str) {
        var fnameconts;
        var reN = /^[a-zA-Z ]+$/;
        if (reN.test(str)) {
            fnameconts = true;
        }
        else {
            fnameconts = false;
        }
        return fnameconts;  
    }
    if ((fname.value.length > 0)) {
        if (fnamecheck(fname.value) == false) {
            alert("Invalid input. Please enter father name in alphabets only.");
            fname.focus();
            return false;
        }
    }

    if(strcls.value.length <=0)
    {
        alert("Please enter Student Class.",strcls);
        strcls.focus();
        return false;
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
        alert("Please enter a Valid Mobile Number.",pnum);
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
            alert("Please enter a valid Phone number.");
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
    


    if(stat.value.length <=0)
    {
        alert("Please enter State.",stat);
        stat.focus();
        return false;
    }

    if ((gender.value == 'Select Gender')) {

        alert('Please Select Gender');
        gender.focus();
        return false;

    }    

}

