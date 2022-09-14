function validatestdfee(){

    var enroll = document.forms.myform.txtenroll;
    var regfee = document.forms.myform.txtregfee;
    var tufee = document.forms.myform.txttufee;
    var libfee = document.forms.myform.txtlibfee;
    var examfee = document.forms.myform.txtexamfee;
    var trfee = document.forms.myform.txttrfee;       
    var labfee = document.forms.myform.txtlabfee;
    var sportsfee = document.forms.myform.txtsportsfee;

    if ((enroll.value == 'Select Enrollment')) 
    {
        alert('Select Student Enrollment Number');
        enroll.focus();
        return false;
    }    

    
    if(regfee.value.length <=0)
    {
        alert("Please enter Registration Fee.",regfee);
        regfee.focus();
        return false;
    } 
    
    if(tufee.value.length <=0)
    {
        alert("Please enter Tution Fee.",tufee);
        tufee.focus();
        return false;
    }
    
    if(libfee.value.length <=0)
    {
        alert("Please enter Library Fee.",libfee);
        libfee.focus();
        return false;
    }

   if(examfee.value.length <=0)
    {
        alert("Please enter Examination Fee.",examfee);
        examfee.focus();
        return false;
    }

    if(trfee.value.length <=0)
    {
        alert("Please enter Transportation Fee.",trfee);
        trfee.focus();
        return false;
    } 

    if(labfee.value.length <=0)
    {
        alert("Please enter a Lab Fee.",labfee);
        labfee.focus();
        return false;
    }

    if(sportsfee.value.length <=0)
    {
        alert("Please enter Sports Fee.",sportsfee);
        sportsfee.focus();
        return false;
    }

}

function findTotal(){
    var arr = document.getElementsByClassName('amount');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value)){
        tot += parseFloat(arr[i].value);
        } 
    }
    document.getElementById('tltfee').value = tot;
}