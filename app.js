// Mobile menu

const menuopener = document.querySelector(".menu-opener");
const menu = document.querySelector(".menu");
const links = document.querySelectorAll(".menu li");


menuopener.addEventListener("click", () => {
    
    menu.classList.toggle("open");
    
    links.forEach(link => {
        link.classList.toggle("fade")
    });

    document.body.classList.toggle('lock-scroll');
    
});

// Radio refresh function

function song_info() {
    $("#radiozlin").load("./Components/Radio.php");
};

// Refresh song_info() every x seconds
setInterval("song_info()", 15 * 1000);