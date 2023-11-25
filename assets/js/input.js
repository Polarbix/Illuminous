//номер карты
let input = document.querySelector("#bank-card-input"),
numbers = /[0-9]/,
regExp = /[0-9]{4}/
input.addEventListener("input",(ev)=>{
    if(ev.inputType === "insertText" && !numbers.test(ev.data) || input.value.length > 19){
        document.getElementById("msg").style.display = "block";
        input.style.border = "1px solid #EF4234";
        return
    }
    else{
        document.getElementById("msg").style.display = "none";
        input.style.border = "1px solid #3aef34";
    }
    let value = input.value
    if(ev.inputType === "deleteContentBackward" && regExp.test(value.slice(-4))){
        input.value = input.value.slice(0, input.value.length - 1)
        return
    }
    if(regExp.test(value.slice(-4)) && value.length < 19){
        input.value += " "
    }
})

//дата
var date = document.getElementById('date');
function checkValue(str, max){
    if (str.charAt(0) !== '0' || str == '00'){
        var num = parseInt(str);
        if (isNaN(num) || num <= 0 || num > max) num = 1;
        str = num > parseInt(max.toString().charAt(0)) && num.toString().length == 1 ? '0' + num : num.toString();
    };
    return str;
};
date.addEventListener('input', function(e){
    this.type = 'text';
    var input = this.value;
    if (/\D\/$/.test(input)) input = input.substr(0, input.length - 3);
    var values = input.split('/').map(function(v){
    return v.replace(/\D/g, '')
});
if (values[0]) values[0] = checkValue(values[0], 12);
if (values[1]) values[1] = checkValue(values[1], 31);
var output = values.map(function(v, i){
    return v.length == 2 && i < 2 ? v + ' / ' : v;
});
this.value = output.join('').substr(0, 14);
});
date.addEventListener('blur', function(e){
    this.type = 'text';
    var input = this.value;
    var values = input.split('/').map(function(v, i){
        return v.replace(/\D/g, '')
    });
    var output = '';
    if (values.length == 3){
        var year = values[2].length !== 4 ? parseInt(values[2]) + 2000 : parseInt(values[2]);
        var month = parseInt(values[0]) - 1;
        var day = parseInt(values[1]);
        var d = new Date(year, month, day);
        if((year>2050) || (year<2023)){
            document.getElementById("msg-date").style.display = "block";
            date.style.border = "1px solid #EF4234";
        }
        else{
            document.getElementById("msg-date").style.display = "none";
            date.style.border = "1px solid #3aef34";
        }
        if (!isNaN(d)){
            document.getElementById('result').innerText = d.toString();
            var dates = [d.getMonth() + 1, d.getDate(), d.getFullYear()];
            output = dates.map(function(v){
                v = v.toString();
                return v.length == 1 ? '0' + v : v;
            }).join(' / ');
        };
    };
    this.value = output;
});

//cvv код
const cvvCode = document.getElementById("cvvCode");
cvvCode.addEventListener("input", function (e){
    var inputValue = e.target.value;
    var regex = /^\d+[,]?\d{0,2}$/;
    var result = regex.test(inputValue);
    if (!result){
        document.getElementById("msg-code").style.display = "block";
        cvvCode.style.border = "1px solid #EF4234";
    }
    else{
        document.getElementById("msg-code").style.display = "none";
        cvvCode.style.border = "1px solid #3aef34";
    }
});

//имя/фамилия
const firstName = document.getElementById("firstName");
firstName.addEventListener("input", function (e){
    var inputValue = e.target.value;
    var regex = /^[А-Яа-я]+$/;
    var result = regex.test(inputValue);
    if (!result){
        document.getElementById("msg-name").style.display = "block";
        firstName.style.border = "1px solid #EF4234";
    }
    else{
        document.getElementById("msg-name").style.display = "none";
        firstName.style.border = "1px solid #3aef34";
    }
});
const lastName = document.getElementById("lastName");
lastName.addEventListener("input", function (e){
    var inputValue = e.target.value;
    var regex = /^[А-Яа-я]+$/;
    var result = regex.test(inputValue);
    if (!result){
        document.getElementById("msg-surname").style.display = "block";
        lastName.style.border = "1px solid #EF4234";
    }
    else{
        document.getElementById("msg-surname").style.display = "none";
        lastName.style.border = "1px solid #3aef34";
    }
});