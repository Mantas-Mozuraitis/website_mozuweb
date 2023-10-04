var cards = document.querySelectorAll(".card");

cards.forEach((card) => {
    card.addEventListener("click", ()=>{
        displayForm(card.getAttribute("id"));
    })
})
function toggleForm(){
    document.querySelector("fieldset").classList.toggle("hidden");
    document.querySelector("form").classList.toggle("hidden");
}

function displayForm(cardID){
    toggleForm();
}