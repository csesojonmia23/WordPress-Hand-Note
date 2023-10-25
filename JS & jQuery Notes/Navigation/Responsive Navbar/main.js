var toggle_bar = document.getElementById("toggle_bar");
var mobile_nav = document.getElementById("mobile_nav");

toggle_bar.addEventListener("click", function(){
     mobile_nav.classList.toggle("open");
});