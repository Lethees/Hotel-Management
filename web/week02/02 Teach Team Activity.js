function clickMe(){
    alert("Clicked!");
    console.log("alert clicked!");
}

function changeColor() {
    var color;
    color = document.getElementById("colorText").value;
    document.getElementById("first").style.color = color;
}