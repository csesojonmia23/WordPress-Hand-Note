// Navbar JS
var bg_navbar = document.getElementById("bg_navbar");
window.onscroll = function(){
     var scroll_nav = window.scrollY;

     if(scroll_nav >= 100){
          bg_navbar.classList.add("after_scroll_navbar");
     }else{
          bg_navbar.classList.remove("after_scroll_navbar");
     }
}