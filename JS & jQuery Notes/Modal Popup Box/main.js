// Modal Box
var open_btn = document.getElementById("open_button");
var close_btn = document.getElementById("close_button");
var modal_bx = document.getElementById("modal_box");
// Open Modal
open_btn.addEventListener("click", function(){
     modal_bx.classList.add("modal_show");
});
// Close Modal
close_btn.addEventListener("click", function(){
     modal_bx.classList.remove("modal_show");
});