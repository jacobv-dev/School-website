// Galerie

const menuopener = document.querySelector(".menu-opener");
const menu = document.querySelector(".menu");
const links = document.querySelectorAll(".menu li");


menuopener.addEventListener("click", () => {
    
    menu.classList.toggle("open");
    
    links.forEach(link => {
        link.classList.toggle("fade")
    });
    
});

// Scrollování textu na main page

$(document).ready(function(){
    $(".slider").slick({
    vertical: true,
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 350,
    arrows: false,
    swipe: false,
    infinite: true,
    pauseOnHover: false,
    });
});