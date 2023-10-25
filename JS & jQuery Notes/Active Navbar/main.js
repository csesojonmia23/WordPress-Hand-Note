// Active Navbar
var item = document.querySelectorAll("a");
var currentLucation = location.href;
for(var i = 0; i<item.length; i++){
     if(item[i].href==currentLucation){
          item[i].className = "active_item";
     }
}

