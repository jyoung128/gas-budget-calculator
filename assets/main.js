/*
Jonah Young
Assignment 3: Gas Budget Calculator
10/13/2020
**/
function check(){
    var checkBox = document.getElementById("discounted");
    
    if(checkBox.checked == true){

        document.getElementById("perks").innerHTML +=
        "<label for='perks'>Weekly grocery cost: </label>";
        document.getElementById("perks").innerHTML +=
        "<input type='text' name='groceries' id='groceries'>";
        
    } else {
        document.getElementById("perks").innerHTML = "";
    }
}