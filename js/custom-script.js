document.querySelector(".check-button").addEventListener("click", function () {
    const menu = document.querySelector(".menu-main-menu-container");
    
    if (menu.style.display === "block") {
        menu.style.display = "none";   // hide
    } else {
        menu.style.display = "block";  // show
    }
});