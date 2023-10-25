var texts = ["Learn with Sojon", "WordPress Development", "SEO Expert", "SM Suzan Mahmud"];
var count = 0;
var index = 0;
var currentText = 0;
var latter = 0;
setInterval(textType, 200);
function textType(){
     currentText = texts[count];
     latter = currentText.slice(0, index++);
     document.querySelector("h1").innerHTML = latter;

     if(latter.length == currentText.length){
          count++;
          index = 0;
     }
     if(count == texts.length){
          count = 0;
     }
}