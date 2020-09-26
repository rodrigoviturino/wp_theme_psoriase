
const btnMobile = document.querySelector("[data-menu='mobile']");
const listMenu = document.querySelector("[data-menu='list']");

function handleClick(event){
    listMenu.classList.toggle("active")
    event.target.classList.toggle("active")
}

btnMobile.addEventListener("click", handleClick);

