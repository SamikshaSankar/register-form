function myFun(){
    var a = document.myForm.Email.value;
    if(a==""){
        document.getElementById("message").innerHTML="Please enter your email";
        return false;
    }
    if(a.indexOf('@')<=0){
        document.getElementById("message").innerHTML="Enter valid email";
        return false;
    }
    if(a.charAt(a.length-4)!="."){
        document.getElementById("message").innerHTML="Enter valid email";
        return false;
    }
    var b = document.myForm.mobile.value;
    if(b==""){
        document.getElementById("number").innerHTML="Please enter mobile no.";
        return false;
    }
    if(isNaN(b)){
        document.getElementById("number").innerHTML="Must be digit";
        return false;
    }
    if(b.length<10){
        document.getElementById("number").innerHTML="Must be 10 digit";
        return false;
    }
    if(b.length>10){
        document.getElementById("number").innerHTML="Must be 10 digit";
        return false;
    }
}