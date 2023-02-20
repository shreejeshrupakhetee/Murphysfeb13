
console.log('error isabdsahdvjhvh')
const toggleButton = document.querySelector("#sidebarToggleTop"); 
const navbar = document.querySelector(".navbar-nav");
const wrapper = document.querySelector("#content-wrapper");
const bodyOverlay = document.querySelector(".body-overlay");
const body = document.querySelector("body");
toggleButton.addEventListener("click", toggle);

function toggle() {
navbar.classList.toggle("navabar-open");
wrapper.classList.toggle("wrapper-open");
bodyOverlay.classList.toggle("overlay-open");
toggleButton.classList.toggle('button-open');
body.classList.toggle('body-open');
toggleButton.classList.toggle('activeToggleBtn')
}
