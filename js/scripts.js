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

// AOS
AOS.init();