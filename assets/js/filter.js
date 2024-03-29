/* DEBUT: Durée */

let duration = document.getElementById("duree");
let durationValue = document.getElementById("duration_value");

duration.addEventListener("change", function(){
  durationValue.textContent = duration.value;

  // On remet à zero la selection si il y en avait une
  let estimation = document.getElementById("estimation");
  let infoChoice = document.getElementById("info_choice");
  estimation.classList.add("d-none");
  infoChoice.classList.add("d-none");

  // On remet à zéro les focus sur les jours
  for(let j =0; j < days.length; j++){
    days[j].style.outline = "none";
    days[j].style.outlineOffset = "0";
  }

});


/* FIN: Durée */

/* DEBUT: Budget */
const range = document.querySelector(".range-selected");
const rangeInput = document.querySelectorAll(".range-input input");
const rangePrice = document.querySelectorAll(".range-price input");
let rangeMin = 200;

let calendar = document.getElementById("calendar-body");
let priceDay = calendar.getElementsByClassName("price_value");

for(let i = 0; i < priceDay.length; i++){
 
  switch (true){
    case (parseInt(priceDay[i].textContent) < 200):
      priceDay[i].parentNode.parentNode.style.background = "rgb(151, 223, 252)"
      priceDay[i].parentNode.style.color = "rgb(37, 48, 80)"
      break;
    case (parseInt(priceDay[i].textContent) > 200 && parseInt(priceDay[i].textContent) < 400):
      priceDay[i].parentNode.parentNode.style.background = "rgb(121, 160, 232)"
      priceDay[i].parentNode.style.color = "rgb(37, 48, 80)"
      break;
    case (parseInt(priceDay[i].textContent) > 400 && parseInt(priceDay[i].textContent) < 600):
      priceDay[i].parentNode.parentNode.style.background = "rgb(0, 70, 228)"
      priceDay[i].parentNode.style.color = "white"
      priceDay[i].parentNode.parentNode.children[0].style.color = "white"
      break;
    case (parseInt(priceDay[i].textContent) > 600 && parseInt(priceDay[i].textContent) < 800):
      priceDay[i].parentNode.parentNode.style.background = "rgb(140, 71, 162)"
      priceDay[i].parentNode.style.color = "white"
      priceDay[i].parentNode.parentNode.children[0].style.color = "white"
      break;
    case (parseInt(priceDay[i].textContent) > 800 && parseInt(priceDay[i].textContent) < 1000):
      priceDay[i].parentNode.parentNode.style.background = "rgb(247, 37, 133)"
      priceDay[i].parentNode.style.color = "white"
      priceDay[i].parentNode.parentNode.children[0].style.color = "white"
      break;
    case (parseInt(priceDay[i].textContent) > 1000):
      priceDay[i].parentNode.parentNode.style.background = "rgb(247, 37, 133)"
      priceDay[i].parentNode.style.color = "white"
      priceDay[i].parentNode.parentNode.children[0].style.color = "white"
      break;
  }
  
}

rangeInput.forEach((input) => {
  input.addEventListener("input", (e) => {
    let minRange = parseInt(rangeInput[0].value);
    let maxRange = parseInt(rangeInput[1].value);
  
    // On empêche les curseurs de se croisé
    if (maxRange - minRange < rangeMin) {  
        
      if (e.target.className === "min") { 
        rangeInput[0].value = rangeInput[0].value - rangeInput[0].value;     
        minRange = rangeInput[0].value
      } else {
        rangeInput[1].value = minRange + rangeMin;        
      }

    } else {
      rangePrice[0].value = minRange;
      rangePrice[1].value = maxRange;
    }

    minRange = parseInt(rangeInput[0].value);
    maxRange = parseInt(rangeInput[1].value);

    // On créer un tableau avec toutes les couleur du gradient pour la barre
    let step = [
        "rgb(151, 223, 252) 0%, rgb(151, 223, 252) 20%", 
        "rgb(121, 160, 232) 20%, rgb(121, 160, 232) 40%", 
        "rgb(0, 70, 228) 40%, rgb(0, 70, 228) 60%", 
        "rgb(140, 71, 162) 60%, rgb(140, 71, 162) 80%", 
        "rgb(247, 37, 133) 80%, rgb(247, 37, 133) 100%"
    ];
    
    // On détermine un gradiant de gray par defaut sur toute la barre
    let gradientGenerate = [
        "rgb(209, 209, 209) 0%, rgb(209, 209, 209) 20%",
        "rgb(171, 171, 171) 20%, rgb(171, 171, 171) 40%",
        "rgb(99, 99, 99) 40%, rgb(99, 99, 99) 60%",
        "rgb(124, 124, 124) 60%, rgb(124, 124, 124) 80%",
        "rgb(139, 139, 139) 80%, rgb(139, 139, 139) 100%"
    ];

    // On determine les step possible et on commece le début de notre propriété css à générer
    let val = [0, 200, 400, 600, 800, 1000];
    let background = "linear-gradient(to right,";

    // On détermine l'emplacement des curseur pour connaitre les couleurs à garder
    let min_step = val.indexOf(minRange);
    let max_step = val.indexOf(maxRange);

    // On modifie le tableau "gradientGenerate" en insérant à l'intérieur les case coloré que l'on souhaite affiché
    for(let i = min_step; i < max_step; i++){
        gradientGenerate[i] = step[i]
    }
    
    // On génère le gradiant via le tableau "gradientGenerate"
    for(let i = 0; i < gradientGenerate.length; i++){
       
        if(i == 4){
            background += gradientGenerate[i];
        }else{
            background += gradientGenerate[i] + "," + " ";
        }

    }
    
    // On modifie le style de la barre avec l'état actuel du gradient
    document.getElementsByClassName("range-selected")[0].style.background = background + ")";

      let calendar = document.getElementById("calendar-body");
      let priceDay = calendar.getElementsByClassName("price_value");

      // On remet à zero la selection si il y en avait une
      let estimation = document.getElementById("estimation");
      let infoChoice = document.getElementById("info_choice");
      estimation.classList.add("d-none");
      infoChoice.classList.add("d-none");

      // On remet à zéro les focus sur les jours
      for(let j =0; j < days.length; j++){
        days[j].style.outline = "none";
        days[j].style.outlineOffset = "0";
      }


      // On fait une boucle sur tous les jours du calendrier et on modifie sa couleur selon le filtre du budget
      for(let i = 0; i < priceDay.length; i++){

        switch (true){
          case (parseInt(priceDay[i].textContent) < 200):
            priceDay[i].parentNode.parentNode.style.background = "linear-gradient(to right," + gradientGenerate[0] + ")";
            priceDay[i].parentNode.style.color = "rgb(37, 48, 80)"
            break;
          case (parseInt(priceDay[i].textContent) > 200 && parseInt(priceDay[i].textContent) < 400):
            priceDay[i].parentNode.parentNode.style.background = "linear-gradient(to right," + gradientGenerate[1] + ")";
            priceDay[i].parentNode.style.color = "rgb(37, 48, 80)"
            break;
          case (parseInt(priceDay[i].textContent) > 400 && parseInt(priceDay[i].textContent) < 600):
            priceDay[i].parentNode.parentNode.style.background = "linear-gradient(to right," + gradientGenerate[2] + ")";
            priceDay[i].parentNode.style.color = "white"
            priceDay[i].parentNode.parentNode.children[0].style.color = "white"
            break;
          case (parseInt(priceDay[i].textContent) > 600 && parseInt(priceDay[i].textContent) < 800):
            priceDay[i].parentNode.parentNode.style.background = "linear-gradient(to right," + gradientGenerate[3] + ")";
            priceDay[i].parentNode.style.color = "white"
            priceDay[i].parentNode.parentNode.children[0].style.color = "white"
            break;
          case (parseInt(priceDay[i].textContent) > 800 && parseInt(priceDay[i].textContent) < 1000):
            priceDay[i].parentNode.parentNode.style.background = "linear-gradient(to right," + gradientGenerate[4] + ")";
            priceDay[i].parentNode.style.color = "white"
            priceDay[i].parentNode.parentNode.children[0].style.color = "white"
            break;
          case (parseInt(priceDay[i].textContent) > 1000):
            priceDay[i].parentNode.parentNode.style.background = "linear-gradient(to right," + gradientGenerate[4] + ")";
            priceDay[i].parentNode.style.color = "white"
            priceDay[i].parentNode.parentNode.children[0].style.color = "white"
            break;
        }
      }

  });
});

/* FIN: Budget */

/* DEBUT: Price estimation */

let estimation = document.getElementById("estimation");
let priceValue = document.getElementById("price_value");
let infoChoice = document.getElementById("info_choice");
let hotelSelected = document.getElementById("hotel");
let hotelValue = document.getElementById("hotel_value");
let dureeSelected = document.getElementById("duree");
let jourValue = document.getElementById("jour_value");
let nuitValue = document.getElementById("nuit_value");
let days = document.getElementsByClassName("days");

hotelSelected.addEventListener("change", function(){
    hotelValue.textContent = hotelSelected.value;

    // On remet à zero la selection si il y en avait une
    estimation.classList.add("d-none");
    infoChoice.classList.add("d-none");

    // On remet à zéro les focus sur les jours
    for(let j =0; j < days.length; j++){
      days[j].style.outline = "none";
      days[j].style.outlineOffset = "0";
    }

});

// Au clique sur un des jours du calendrier on affiche les informations séléctionnées
for(let i = 0; i < days.length; i++){

  days[i].addEventListener("click", function(){
    estimation.classList.remove("d-none");
    priceValue.textContent = days[i].children[1].children[0].textContent;
    infoChoice.classList.remove("d-none");
    hotelValue.textContent = hotelSelected.value;
    jourValue.textContent = dureeSelected.value + " jours";

    if(parseInt(dureeSelected.value) > 2){
      nuitValue.textContent = parseInt(dureeSelected.value) - 1 + " nuits";
    }else{
      nuitValue.textContent = parseInt(dureeSelected.value) - 1 + " nuit";
    }

    // On remet à zéro les focus sur les jours
    for(let j =0; j < days.length; j++){
      days[j].style.outline = "none";
      days[j].style.outlineOffset = "0";
    }

    // On attribue un focus sur le jour concerner
    days[i].style.outline = "1px solid #0046e4";
    days[i].style.outlineOffset = "2px";
    
  });

}

/* FIN: Price estimation */