const menuopener = document.querySelector(".menu-opener");
const menu = document.querySelector(".menu");
const links = document.querySelectorAll(".menu li");


menuopener.addEventListener("click", () => {
    
    menu.classList.toggle("open");
    
    links.forEach(link => {
        link.classList.toggle("fade")
    });
    
});
