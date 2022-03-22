
setInterval(function(){
    let width = window.innerWidth;
    if(width>800){
        document.getElementById("sideNav").style.width = "0";
    }
}, 1);

window.onscroll = function() {
    const menu = document.querySelector("#menu")
    const scroll = window.scrollY;

    scroll>=50 ? menu.classList.add("shadow-lg","bg-white") : menu.classList.remove("shadow-lg","bg-white");




}

let openBtns = document.querySelectorAll(".openBtn");
let closeBtns = document.querySelectorAll(".closeBtn");

openBtns.forEach(element => {
    element.onclick = function open(){
        openNav();
    };
});
closeBtns.forEach(element => {
    element.onclick = function close(){
        closeNav();
    };
});

function openNav() {
    let width = document.querySelectorAll(".sideNav")[0].style.width;
    document.querySelectorAll(".openBtn")[0].innerHTML = "&times;";
    document.querySelectorAll(".openBtn")[0].style.fontSize = "40px";
    if(width==="250px"){
        closeNav();
    }
    else{
        document.querySelectorAll(".sideNav")[0].style.width = "250px";
    }
}

function closeNav() {
    document.querySelectorAll(".openBtn")[0].innerHTML = "&#9776;";
    document.querySelectorAll(".openBtn")[0].style.fontSize = "30px";
    document.querySelectorAll(".sideNav")[0].style.width = "0";
}
