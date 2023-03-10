let current_operation = 1;
let resultado = 0;

//1 = sum
//2 = sub
//3 = mult
//4 = div
document.getElementById("operation_symbol")

//botoçes de operação mudam texto e número da operação
//cada botão chama a função com um número
function operação(opera){
    if(opera == 1){current_operation = 1;document.getElementById("operation_symbol").innerText = "+";}
    if(opera == 2){current_operation = 2;document.getElementById("operation_symbol").innerText = "-";}
    if(opera == 3){current_operation = 3;document.getElementById("operation_symbol").innerText = "*";}
    if(opera == 4){current_operation = 4;document.getElementById("operation_symbol").innerText = "/";}


}

function enter(){
    //botão enter roda o cálculo e printa no paragrafo "resultado"
    //1 = sum
    //2 = sub
    //3 = mult
    //4 = div
    let first_number = document.getElementById("number1").valueAsNumber;//gets first number
    let second_number = document.getElementById("number2").valueAsNumber;//gets second number
    if(current_operation == 1){resultado = first_number+second_number;}
    if(current_operation == 2){resultado = first_number-second_number;}
    if(current_operation == 3){resultado = first_number*second_number;}
    if(current_operation == 4){resultado = first_number/second_number;}
    document.getElementById("result").innerText = resultado;
}


//botão clear seta tudo pro padrão

function clearS(){
    document.getElementById("result").innerText = "0";
    document.getElementById("number1").valueAsNumber = "0";
    document.getElementById("number2").valueAsNumber = "0";
    document.getElementById("operation_symbol").innerText = "+";
}