
const BoardLink = document.getElementById("input_element");// creates an variable and links it with the element
let myBoards = JSON.parse(localStorage.getItem("boards"));
const boardList = document.getElementById("boardsList");
const Button = document.getElementById("inputButton");// creates an variable and links it with the element


const saveTab = document.getElementById("saveTab");// creates an variable and links it with the element




saveTab.addEventListener("click",function(){

    chrome.tabs.query({active: true, currentWindow: true}, function(tabs){
        if(myBoards){console.log("");}
        else{myBoards = [" "];}//for some reason if its null, a lot of stuff dont work, so this is a ganbiarra
        myBoards = [...myBoards,tabs[0].url];//adds value to the end of the array, push was not working
        localStorage.setItem("boards",JSON.stringify(myBoards));//saving on local storage
        listBoards();
    });



});





//turning from array to string
//myBoards = JSON.stringify(myBoards)
//console.log(typeof myBoards)
//console.log(myBoards)
//turning it from string into an array
//myBoards = JSON.parse(myBoards);
//console.log(typeof myBoards)
//console.log(myBoards)


listBoards();

Button.addEventListener("click", function(){//adds the event once the button is clicked 
    if(myBoards){console.log("");}
    else{myBoards = [" "];}//for some reason if its null, a lot of stuff dont work, so this is a ganbiarra
    myBoards = [...myBoards,BoardLink.value];//adds value to the end of the array, push was not working
    localStorage.setItem("boards",JSON.stringify(myBoards));//saving on local storage
    BoardLink.value = "";//clear the input
    listBoards();


});



function listBoards(){
    let listElement = "";
    if(myBoards){
        for(let i = 0; i < myBoards.length; i++){
            listElement += `
            <li>
            <a href="${myBoards[i]}" target="_blank"> ${myBoards[i]} </a>
            </li>`;
    }
    }else{
        console.log("listBoards: No Boards Saved Yet.");

        }
    boardList.innerHTML = listElement;

}

function clearData(){
    localStorage.clear();
    myBoards = [];
    listBoards();
}