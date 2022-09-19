let str = "This is a String";

function reverseString(str) {
    document.getElementById("app").innerHTML = str.split(" ").reverse().join(" ");

}
document.getElementById("app").innerHTML = str;