//логин
const loginValid = document.getElementById("loginValid");
loginValid.addEventListener("input", function (e){
    var inputValue = e.target.value;
    var regex = /^[A-Za-z]+$/;
    var result = regex.test(inputValue);
    if (!result){
        document.getElementById("msg-login").style.display = "block";
        loginValid.style.border = "1px solid #EF4234";
    }
    else{
        document.getElementById("msg-login").style.display = "none";
        loginValid.style.border = "1px solid #3aef34";
    }
});
//эл почта
const emailValid = document.getElementById("emailValid");
emailValid.addEventListener("input", function (e){
    var inputValue = e.target.value;
    var regex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var result = regex.test(inputValue);
    if (!result){
        document.getElementById("msg-email").style.display = "block";
        emailValid.style.border = "1px solid #EF4234";
    }
    else{
        document.getElementById("msg-email").style.display = "none";
        emailValid.style.border = "1px solid #3aef34";
    }
});
const passValid = document.getElementById("passValid");
passValid.addEventListener("input", function (e){
    var inputValue = e.target.value;
    var regex = /[0-9]/;
    var result = regex.test(inputValue);
    if (!result){
        passValid.style.border = "1px solid #EF4234";
    }
    else{
        passValid.style.border = "1px solid #3aef34";
    }
});