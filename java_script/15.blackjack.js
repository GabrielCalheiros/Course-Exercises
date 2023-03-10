let card;
let sum;
let sumText;
let message;

firstRoll();





//elements
let messageElement = document.getElementById("message_p");
let CardsElement = document.getElementById("cards");
let NewCardButton = document.getElementById("newCard");
let StarGameButton = document.getElementById("startButton");
let RestarGameButton = document.getElementById("restart");
sumElement = document.querySelector("#sum");
//sumElement = document.getElementById("sum");
//query selector is a broader way of getting an element. It uses the css selector. 
// so to get a an id, its "#", to get an class, its "." and etc 




    function checkTurn(){
        CardsElement.textContent ="Cards: "+sumText; // prints cards rolled
        sumElement.textContent ="Sum: "+sum; // prints sum of cards
        if(sum < 21){
            message = "Do you want to draw a new card?";
            NewCardButton.style.display = "inline"; // new card button appear
        }
        else if(sum === 21){
            message = "You got a black jack!";
            RestarGameButton.style.display = "inline"; // restart button appear
            NewCardButton.style.display = "none"; // new card button disappear
        }else {
            message = "You lost!";
            RestarGameButton.style.display = "inline"; // restart button appear
            NewCardButton.style.display = "none"; // new card button disappear
        }
        messageElement.textContent = message; // Prints the messege in the element 
    }


    function startGame (){
        StarGameButton.style.display = "none"; // start button disappear
        checkTurn();
    }

    function newCard(){
        card = rollCard(); // roll new card
        sumText = sumText+" - "+card; // puts the new card in the cards line
        sum = sum + card; // aply the value to the sum
        checkTurn();

    }

    function firstRoll(){
        card = rollCard(); //roll first card
        sum = card; // aply the value to sum 
        sumText = card; // aply to sum Text
        card = rollCard(); // roll the second one
        sum = sum + card; // aply the first value to the second value
        sumText = sumText+" - "+card;
    }

    function rollCard(){
        return Math.floor(Math.random() * 13) + 2;
        //step-by-step generating a random number between two numbers
        //let a = Math.random();
        //console.log("Gerando Número Aleatório: "+a);
        //a = a*11;
        //console.log("Multiplicando pelo teto: "+a)
        //a = Math.floor(a);
        //console.log("Usando Math Floor para arredondar: "+a);
        //a = a+2;
        //console.log("Somando pelo Mínimo: "+a);
    }

    function restart(){
        window.location.reload();
    }