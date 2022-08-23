// sélectionner le button
document.querySelector("#menuButton").addEventListener('click', ()=>{
    // console.log("Cliiiiick");
    // sélectionner l menu
    let menu = document.querySelector('#menu');

    // si le menu est visible
    if(menu.style.left == "0px"){
        // on cache le menu
        menu.style.left = "-100%";
        // sinon, on cache le menu
    } else{
        // sinon, on cache le menu
        // et on affiche le menu
        menu.style.left = "0px";
    }
});