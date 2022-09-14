function validateDept(){
    var deptname = document.forms.myform.txtDeptName;
    var deptcode = document.forms.myform.txtDeptCode;
    if(deptname.value.length <=0)
    {
        alert("Please enter a valid Department Name.");
        deptname.focus();
        return false;
    }
    if(deptname.value.length > 75)
    {
        alert("INVALID Departm,ent Name!!!. Department length should not be greater than 75 characters.");
        deptname.focus();
        return false;
    }
    if(deptcode.value.length <=0)
    {
        alert("Please enter a valid Department Code.");
        deptcode.focus();
        return false;
    }  

        if(deptcode.value.length > 5)
    {
        alert("INVALID Department Code!!!. Department Code length should not be greater than 5 characters.");
        deptcode.focus();
        return false;
    }



}