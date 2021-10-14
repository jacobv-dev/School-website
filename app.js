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

// Radio refresh

function song_info() {
    $("#radiozlin").load("Radio.php");
};

// Refresh song_info() every 30 seconds
setInterval("song_info()", 30000);