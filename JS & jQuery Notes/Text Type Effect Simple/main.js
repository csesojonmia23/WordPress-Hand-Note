var title = document.querySelector("h1");

var animated_title = "Learn With Engineer Sojon Mia";
var index = 0;

setInterval(animated_func, 200);
function animated_func(){
     title.innerHTML = animated_title.slice(0, index++);
     if(index > animated_title.length){
          index = 0;
     }
}


