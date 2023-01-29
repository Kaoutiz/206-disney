let stickyEl = document.querySelector('#nav-banner')
let offset = 600;
let items = document.getElementsByClassName("items");

for(let i = 0; i < items.length; i++){
    if(items[i].getAttribute("href") == "#actualites"){
        document.getElementById("actualites").children[1].style.animation = "fadeIn 2s forwards"
    }
} 

// On fait un listener sur le scroll
window.addEventListener('scroll',function(){
 
    // Si l'offset déterminé à été dépassé
    if(window.pageYOffset > offset){

        // On modifie la nav en fixed
        stickyEl.style.position='fixed';
        stickyEl.style.top='0px'

        // On cache les icons
        for(let i = 0; i < items.length; i++){
            items[i].children[0].style.display = "none";
            items[i].style.height = "40px";
        }

        // On modifie la taille de la nav
        stickyEl.children[0].style.height = "50px";



        // On vérifie si on est sur la section "actualité" pour modifier le active du nav
        if(window.scrollY + 100 >= document.getElementById("actualites").offsetTop)
        {
            for(let i = 0; i < items.length; i++){
                items[i].classList.remove("active-nav");

                if(items[i].getAttribute("href") == "#actualites"){
                    items[i].classList.add("active-nav");
                }
            } 
        }

        // On démarre l'annimation de la section "herbergements" un peu avant de l'atteindre
        if(window.scrollY + 500 >= document.getElementById("herbergements").offsetTop){
            for(let i = 0; i < items.length; i++){
                document.getElementById("herbergements").children[1].style.animation = "fadeIn 2s forwards"
            } 
        }
        
        // On vérifie si on est sur la section "herbergements" pour modifier le active du nav
        if(window.scrollY + 100 >= document.getElementById("herbergements").offsetTop)
        {
            for(let i = 0; i < items.length; i++){
                items[i].classList.remove("active-nav");

                if(items[i].getAttribute("href") == "#herbergements"){
                    items[i].classList.add("active-nav");
                }
            } 
        }

        // On démarre l'annimation de la section "reservations" un peu avant de l'atteindre
        if(window.scrollY + 500 >= document.getElementById("reservations").offsetTop){
            for(let i = 0; i < items.length; i++){
                document.getElementById("reservations").children[1].style.animation = "fadeIn 2s forwards"
            } 
        }

        // On vérifie si on est sur la section "reservations" pour modifier le active du nav et démarré l'annimation
        if(window.scrollY + 100 >= document.getElementById("reservations").offsetTop)
        {
            for(let i = 0; i < items.length; i++){
                items[i].classList.remove("active-nav");

                if(items[i].getAttribute("href") == "#reservations" && window.scrollY + 500 >= document.getElementById("reservations").offsetTop){
                    items[i].classList.add("active-nav");
                }
            } 
        }

        // On démarre l'annimation de la section "offres" un peu avant de l'atteindre
        if(window.scrollY + 500 >= document.getElementById("offres").offsetTop){
            for(let i = 0; i < items.length; i++){
                document.getElementById("offres").children[1].style.animation = "fadeIn 2s forwards"
            } 
        }

        // On démarre l'annimation de la section "acces-hygiene" un peu avant de l'atteindre
        if(window.scrollY + 500 >= document.getElementById("acces-hygiene").offsetTop){
            for(let i = 0; i < items.length; i++){
                document.getElementById("acces-hygiene").children[1].style.animation = "fadeIn 2s forwards"
            } 
        }

        // On démarre l'annimation de la section "acces-map" un peu avant de l'atteindre
        if(window.scrollY + 500 >= document.getElementById("acces-map").offsetTop){
            for(let i = 0; i < items.length; i++){
                document.getElementById("acces-map").children[1].style.animation = "fadeIn 2s forwards"
            } 
        }

        // On démarre l'annimation du footer un peu avant de l'atteindre
        if(window.scrollY + 800 >= document.getElementById("footer-section").offsetTop){
            for(let i = 0; i < items.length; i++){
                document.getElementById("footer-section").children[0].style.animation = "fadeIn 2s forwards"
            } 
        }


    }else{

        // Si nous sommes tout en haut, on repasse le nav à l'état d'origine
        stickyEl.style.position='static';
        stickyEl.style.top=''

        for(let i = 0; i < items.length; i++){
            items[i].children[0].style.display = "block";
            items[i].style.height = "80px";
        }

        stickyEl.children[0].style.height = "100px";
        
    }

});