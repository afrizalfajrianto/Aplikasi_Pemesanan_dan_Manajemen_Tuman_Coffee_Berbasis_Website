document.addEventListener("DOMContentLoaded", function() {
    const hamburgerMenu = document.getElementById("hamburger-menu");
    const menu = document.querySelector(".nav-left ul.menu");
  
    hamburgerMenu.addEventListener("click", function(event) {
        event.preventDefault();
        menu.classList.toggle("active");
    });
  
    // Event listener untuk klik di luar menu
    document.addEventListener("click", function(event) {
        const isClickInsideMenu = menu.contains(event.target);
        const isClickOnHamburger = hamburgerMenu.contains(event.target);
  
        if (!isClickInsideMenu && !isClickOnHamburger) {
            menu.classList.remove("active");
        }
    });
  });