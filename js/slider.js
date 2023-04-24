function init() {
    // Rôle : Initialiser les sliders de la page et mettre en place les évènements de click sur les cercles
    // Retour : aucun
    // Paramètres : aucun
    
    // On récupère les sliders
    let sliders = document.querySelectorAll(".slider");

    // On parcourt la liste des sliders afin d'initiliaser les classes
    for (let i = 0; i < sliders.length; i++) {
        // On ôte toutes les classes block des sliders
        sliders[i].classList.remove("large-block");

        // On récupère les cercles de chaque slider
        let circles = sliders[i].querySelectorAll(".circle");

        // On parcourt les cercles présents en recherchant celui qui a la classe "active"
        for(let k = 0; k < circles; k++) {
            if (!circles[k].classList.contains(".active")) {

                // Puis on cache les sliders inactifs
                sliders[i].classList.add("large-none");
            } 
        }
        
        // On ajoute les évènements de "click" à chaque cercle de chaque slider
        for(let j = 0; j < circles.length; j++) {
            circles[j].addEventListener("click", function() {
                // On parcourt à nouveau les sliders
                for (let l = 0; l < sliders.length; l++) {
                    // On efface les classes "block" et on cache les sliders
                    sliders[i].classList.remove("large-block");
                    sliders[l].classList.add("large-none");
                }
                // Le cercle sur lequel on clique, on lui ajoute la classe "active" et on fait apparaître le slider correspondant
                sliders[j].classList.remove("large-none");
                sliders[j].classList.add("large-block");
                sliders[j].querySelectorAll(".circle")[j].classList.add("active");
            })
        }
    }
}

// Lancement de l'initialisation
init();


let indexSlider = 0;

function changeSlider(direction) {
    // Rôle : Changer de slider, pour passer au suivant jusqu'au dernier, puis revenir au premier
    // Retour : aucun
    // Paramètre : 
    //      direction : sens de défilement des sliders

    // On récupère les sliders
    let sliders = document.querySelectorAll(".slider");

    // On initialise les classes, en cachant tous les sliders
    for(let i = 0; i < sliders.length; i++) {
        sliders[i].classList.remove("large-block");
        sliders[i].classList.add("large-none");
    }

    // On part de l'index 0, puis on avance
    indexSlider = indexSlider + direction;

    // Si le slider est en sens inverse et qu'on tombe en-dessous de 0, alors on passe au dernier index
    if (indexSlider < 0) {
        indexSlider = sliders.length - 1;
    }
        
    // Si l'index arrive au dernier slider, alors on passe au premier index
    if (indexSlider > sliders.length - 1) {
        indexSlider = 0;
    }
    
    // On fait apparaître le slider à l'index actuel et on ajoute la classe "active" au cercle correspondant
    sliders[indexSlider].classList.add("large-block");
    sliders[indexSlider].classList.remove("large-none");
    sliders[indexSlider].querySelectorAll(".circle")[indexSlider].classList.add("active");
}

// On lance le timer
setInterval("changeSlider(1)", 6000);