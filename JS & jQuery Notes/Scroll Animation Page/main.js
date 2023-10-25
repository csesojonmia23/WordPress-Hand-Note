window.addEventListener("scroll", function(){
     var services = this.document.getElementById("service");
     var contentPosition = services.getBoundingClientRect().top;
     var scrolls = window.scrollY;

     if(contentPosition < scrolls){
          services.classList.add("active");
     }else{
          services.classList.remove("active");
     }
});

// =================================
window.addEventListener("scroll", function(){
     var portfolios = this.document.getElementById("portfolio");
     var contentPosition2 = portfolios.getBoundingClientRect().top;
     var scrolls1 = window.scrollY / 2;

     if(contentPosition2 < scrolls1){
          portfolios.classList.add("active2");
     }else{
          portfolios.classList.remove("active2");
     }
});