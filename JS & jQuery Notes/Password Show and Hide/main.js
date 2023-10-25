// Password Show and Hide
var pass = document.getElementById("password");
function passwordShowHide(){
     if(pass.type == "password"){
          pass.type = "text";
     }else{
          pass.type = "password";
     }
}


