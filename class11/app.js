/*Inside the function write a for loop
Inside the for loop find if a number is even or odd.
Hint - number%2
If mod is 0 - push number to a new array
Return new array
// Array to be passed to the function
let lottoNumbers = [10, 23, 11, 73, 44, 57]; */



function myFunction() {
    let text = " ";
    let i;
    for (i = 0; i < 6; i++) {
        if (i % 2 === 0) {
            text += i + " is even" + "<br>";
        } else {
            text += i + " is odd" + "<br>";
        }
        document.getElementById("app").onclick = myFunction;
    }
    return text;
}