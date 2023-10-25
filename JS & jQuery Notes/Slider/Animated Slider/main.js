// Animated Slider
var photos = ["images/1.jpg", "images/2.jpg", "images/3.jpg", "images/4.jpg"];
var imgTag = document.getElementById("imgSlider");
var count = -1;
function slider(){
     count++;
     if(count >= photos.length){
          count = 0;
          imgTag.src = photos[count];
     }else{
          imgTag.src = photos[count];
     }
     setTimeout("slider()", 1000);
}
window.onload = slider();


