var add = document.getElementById("add");
add.addEventListener("click", function(){
     var listItem = document.getElementById("listItems");
     var inputs = document.getElementById("input").value;
     var text = document.createTextNode(inputs);
     var newItem = document.createElement("li");
     newItem.appendChild(text);
     listItem.appendChild(newItem);
});