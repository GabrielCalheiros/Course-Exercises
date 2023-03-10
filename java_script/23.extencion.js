
const BoardLink = document.getElementById("input_element");// creates an variable and links it with the element
let myBoards = ["Board 1", "Board 2", "Board 3"];
const boardList = document.getElementById("boardsList");
const Button = document.getElementById("inputButton");// creates an variable and links it with the element

listBoards();

Button.addEventListener("click", function(){//adds the event once the button is clicked 
    myBoards.push(BoardLink.value);
    listBoards();
    console.log(myBoards);
    BoardLink.value = "";
});


function listBoards(){
    let listElement = "";
    for(let i = 0; i < myBoards.length; i++){
        //listElement += "<li><a href='"+myBoards[i]+"' target='_blank'>"+myBoards[i]+"</a></li>";
        // using the template string you have better reading
        listElement += `
        <li>
        <a href="${myBoards[i]}" target="_blank"> ${myBoards[i]} </a>
        </li>`;
    }
    boardList.innerHTML = listElement;



}