let a;
let g = 10000000;//iterations
let numbers = [0,0,0,0,0,0,0,0,0,0];

console.log("The amount of generations was "+g+" and the results was:");

for(let i = 0; i < g; i++){
    a = Math.floor(Math.random() * 10) + 0;
    addToPlace();
}
for(let j = 0; j < numbers.length; j++){
    console.log("Amount of '"+j+"'s generated: "+numbers[j]);
}

function addToPlace(){
    if(a===0){numbers[0]++}
    if(a===1){numbers[1]++}
    if(a===2){numbers[2]++}
    if(a===3){numbers[3]++}
    if(a===4){numbers[4]++}
    if(a===5){numbers[5]++}
    if(a===6){numbers[6]++}
    if(a===7){numbers[7]++}
    if(a===8){numbers[8]++}
    if(a===9){numbers[9]++}
}



