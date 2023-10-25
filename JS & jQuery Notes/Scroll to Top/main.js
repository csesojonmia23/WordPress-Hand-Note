var scroll_arrow = document.getElementById("scroll_arrow");

window.onscroll = function(){
     var scrolls = scrollY;
     if(scrolls > 100){
          scroll_arrow.classList.add("active");
     }else{
          scroll_arrow.classList.remove("active");
     }
}

