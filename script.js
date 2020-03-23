function getThatVariable(){
    //getting the value of the hidden input 
    var input = document.getElementById("hiddeninput").value;
    var inputElement = document.getElementById("hiddeninput");

    //writing it into our document - we can use it in any different way
    document.getElementById("text").innerHTML = input;

    //delete the input
    inputElement.parentElement.removeChild(inputElement);

    //you can repeat this action any amount of times you - its not the safest of course but it does find itself useful
}