var myInput = document.getElementById("passfield");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var len = document.getElementById("length");
var special_characters = document.getElementById("special");
var passcheck = document.getElementById("passconfirm");
var passvar = document.getElementById("passcheck");




var checkLowerCase = /[a-z]/g;
var checkUpperCase = /[A-Z]/g;
var checkDigits = /[0-9]/g;
var checkSpecial = /[!@#\$%\^\&*\),\(+=._-]/g;



$(document).ready(function(){
    $("#signupbtn").click(function(){
        validateform();
    });
  });

//console.log("Welcome to the console!");

myInput.onfocus = () => document.getElementById("message").style.display = "flex";
myInput.onblur = () => document.getElementById("message").style.display = "none";

myInput.onkeyup = () =>
{

    if(myInput.value.match(checkLowerCase))
        letter.classList.add("valid"), letter.classList.remove("invalid");
    else
        letter.classList.add("invalid"), letter.classList.remove("valid");



    if(myInput.value.match(checkUpperCase))
        capital.classList.add("valid"), capital.classList.remove("invalid");
    else
        capital.classList.add("invalid"), capital.classList.remove("valid");



    if(myInput.value.match(checkDigits))
        number.classList.add("valid"), number.classList.remove("invalid");
    else
        number.classList.add("invalid"), number.classList.remove("valid");
    

    if(myInput.value.length >= 8)
        len.classList.add("valid"), len.classList.remove("invalid");
    else
        len.classList.add("invalid"), len.classList.remove("valid");


    if(myInput.value.match(checkSpecial))
        special_characters.classList.add("valid"), special_characters.classList.remove("invalid");
    else
        special_characters.classList.add("invalid"), special_characters.classList.remove("valid");

}


validateform = () =>
{
    let form = document.forms["signupform"];

    let username = form["username"];
    let password = form["pass"];
    let num = form["phone"];

    if(username.value.match(checkDigits))
        return false;//return alert("Username cannot contain digits.");

    if(num.value.length < 11 || num.value.length > 11)
        return false;//return alert("Phone number must be 11 digits");

    if(!(password.value.match(checkSpecial) && password.value.length >= 8 && password.value.match(checkDigits) && password.value.match(checkUpperCase) && password.value.match(checkLowerCase)))
        return false //return alert("Your password must contain a special character, minumum length of 8 characters, a digit, an uppercase character and a lowercase character");

    return true;

}

passcheck.onfocus = () => 
{
    passvar.style.visibility = "visible";
    checkpass();
}


passcheck.onblur = () => passvar.style.visibility = "hidden";


passcheck.onkeyup = () =>
{
    checkpass();   
}


checkpass = () =>
{
    if(passcheck.value === myInput.value && passcheck.value != "")
        passvar.classList.add("valid"), passvar.classList.remove("invalid"), passvar.innerHTML = "Password matches", passvar.style.color = "green";
    else
        passvar.classList.add("invalid"), passvar.classList.remove("valid"), passvar.innerHTML = "Password doesn't match", passvar.style.color = "red";
}





