
window.onscroll= function(){
     // Total Clients
var count1 = 0;
var clients = setInterval(client, 50);

function client(){
     count1++;
     document.getElementById("client_counter").innerHTML = count1;
     if(count1==200){
          clearInterval(clients);
     }
}

// Total Projects
var count2 = 0;
var projects = setInterval(project, 50);

function project(){
     count2++;
     document.getElementById("project_counter").innerHTML = count2;
     if(count2==500){
          clearInterval(projects);
     }
}

// Total Clients satisfaction
var count3 = 0;
var satisfactions = setInterval(satisfaction, 50);

function satisfaction(){
     count3++;
     document.getElementById("satisfaction_counter").innerHTML = count3;
     if(count3==199){
          clearInterval(satisfactions);
     }
}
     
}

