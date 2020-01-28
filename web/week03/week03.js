var count = 1;
function plus(){
    count++;
    document.getElementById("count").value = count;
}
function minus(){
  if (count > 1) {
    count--;
    document.getElementById("count").value = count;
  }  
}