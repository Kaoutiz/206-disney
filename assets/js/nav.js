let stickyEl = document.querySelector('#nav-banner')
let offset = 600;
let items = document.getElementsByClassName("items");

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

        // On vérifie si on est sur la section "reservations" pour modifier le active du nav
        if(window.scrollY + 100 >= document.getElementById("reservations").offsetTop)
        {
            for(let i = 0; i < items.length; i++){
                items[i].classList.remove("active-nav");

                if(items[i].getAttribute("href") == "#reservations"){
                    items[i].classList.add("active-nav");
                }
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