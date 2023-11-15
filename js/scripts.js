// VANILLA JS
// NAV BAR OPACITY
const navBar = document.getElementById("menu")

window.addEventListener("scroll", () => {
    if (window.scrollY > 100) {
        navBar.classList.add("navScrolled")
    } else if (window.scrollY <= 100){
        navBar.classList.remove("navScrolled")
    }
})

// MENU MOV
function openMenu() {
    "use strict";
    document.getElementById("menu").children[1].classList.toggle("openMenu");
}

function closeMenu() {
    "use strict";
    document.getElementById("menu").children[1].classList.remove("openMenu");
}

// AOS
AOS.init();