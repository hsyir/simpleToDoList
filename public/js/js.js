

function check_password(str,str2){
    let alert_password = document.getElementById(str2);
let a = document.getElementById(str);
    if(a.validity.patternMismatch){
        alert_password.classList.remove("d-none");
        alert_password.classList.add("d-block");
    }
    else{
        alert_password.classList.remove("d-block");
        alert_password.classList.add("d-none");
    }
   
}

