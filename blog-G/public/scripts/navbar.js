document.querySelector('#menuButton').addEventListener("click", function () {
    const menu = document.querySelector(".menu");
    if (menu.style.left === "0px") {
        menu.style.left = '-100%';
    } else {
        menu.style.left = '0px';
    }
})
