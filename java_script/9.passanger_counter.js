let counter = 0; 
let UserName = "Gabriel";
let greeting = "Greeting "+UserName+"!";
let previous = " -"+counter;
let total = 0;

document.getElementById("count-el").innerText = counter;
document.getElementById("greeting").innerText = greeting;

//document.getElementById("save-button") = counter;


function increment(){
    counter ++; 
    total ++;
    document.getElementById("count-el").innerText = counter;
    document.getElementById("total").innerText ="Total: "+ total;
}

function save(){
    previous = " -"+counter+" "+previous;
    counter = 0;
    document.getElementById("previous").innerText = "Previous Entrys: "+previous;
    document.getElementById("count-el").innerText = counter;
}


