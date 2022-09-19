let firstName = "Vadim"
let lastName = "Uncu"
let fullName = firstName + " " + lastName;
console.log(fullName);

document.getElementById('app').innerHTML = fullName;

let text = "Dublin Coding School";
document.getElementById('app1').innerHTML = text;

let newText = text.replace("Coding", "CODING");
document.getElementById('app2').innerHTML = newText;


let school = text.split(" ").reverse().join(" ");
document.getElementById('app3').innerHTML = school;