const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");


const lightModeOn = (event) => {
    navbar.classList.add("navbar-light");
    logo.href.baseVal = "img/sprite.svg#logo";
};

const lightModeOff = (event) => {
    navbar.classList.remove("navbar-light");
    logo.href.baseVal = "img/sprite.svg#logo-light";
};

const openMenu = (event) => {  // функция открытия меню
    menu.classList.add("is-open"); // добавление класса is-open
    mMenuToggle.classList.add("close-menu");
    document.body.style.overflow = "hidden"; // запретить прокрутку сайта под открытым меню
    lightModeOn();
};

const closeMenu = (event) => {  // функция закрытия меню
    menu.classList.remove("is-open"); // удаление класса is-open
    mMenuToggle.classList.remove("close-menu");
    document.body.style.overflow = ""; // разрешить прокрутку сайта
    lightModeOff();
};

window.addEventListener("scroll", ()=>{

    this.scrollY > 1 ? lightModeOn() : lightModeOff(); 
    /*Если окно прокуручно больше чем на 1px, если да (знак ?) 
    то выполнить условие "включить светлый режим" lightModeOn()
    иначе (:) выполнить следующее условие lightModeOff()*/ 

    // if (this.scrollY > 1 ) {
    //     lightModeOn();
    // } else {
    //     lightModeOff();
    // }
});

mMenuToggle.addEventListener("click", (event) => {
    event.preventDefault();
    menu.classList.contains("is-open") ? closeMenu() :  openMenu();

    // if (menu.classList.contains("is-open")) {
    //     closeMenu();
    // } else {
    //     openMenu();
    // }
});