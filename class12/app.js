function myFunction() {

    let x = document.getElementById("numb").value;
    let text;

    if (isNaN(x) || x < 0 || x > 17) {
        text = "You are an adult";
        document.getElementById("numb").style.borderColor = "rgb(155, 254, 8)";
    } else {
        text = "You are not an adult";
        document.getElementById("numb").style.borderColor = "rgb(255, 0, 0)";

    }
    document.getElementById("demo").innerHTML = text;

}