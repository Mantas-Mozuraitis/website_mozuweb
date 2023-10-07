document.querySelectorAll(".card").forEach((card) => {
    card.addEventListener("click", ()=>{
        displayForm(card.getAttribute("id"));
    })
})

document.querySelector("#orderForm").addEventListener("submit", ()=>{
    alert("Form has been submitted");
});

function toggleForm(){
    document.querySelector("fieldset").classList.toggle("hidden");
    document.querySelector("form").classList.toggle("hidden");
}

function selectPlan(cardID){
    document.querySelector("#plan_name").value = cardID;
}

function displayForm(cardID){
    toggleForm();
    selectPlan(cardID);
}
