const toggleBUtton = document.querySelector("#sidebarToggleTop");
const navbar = document.querySelector(".navbar-nav");
const wrapper = document.querySelector("#content-wrapper");
const body = document.querySelector("body");
toggleBUtton.addEventListener("click", toggle);

function toggle() {
    navbar.classList.toggle("navabar-open");
    wrapper.classList.toggle("wrapper-open");
    body.classList.toggle("body-open");
}
