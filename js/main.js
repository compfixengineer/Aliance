const navbar = document.querySelector(".navbar");
const logo = document.querySelector(".logo-svg use");
const mMenuToggle = document.querySelector(".mobile-menu-toggle");
const menu = document.querySelector(".mobile-menu");

const swiper = new Swiper('.features-slider', {
    speed: 400,
    autoHeight: false,
    slidesPerView: 1,
    navigation: {
        nextEl: ".slider-button-next",
        prevEl: ".slider-button-prev",
    },
    breakpoints: {
        // when window width is >= 320px
        576: {
          slidesPerView: 2,
        },
        // when window width is >= 768px
        768: {
          slidesPerView: 3,
        },
        // when window width is >= 1024px
        1024: {
          slidesPerView: 4,
        },
        // when window width is >= 1200px
        1200: {
            slidesPerView: 5,
          }
    }   
  });
  
  const swiperSteps = new Swiper('.steps-slider', {
    speed: 400,
    slidesPerView: 1,
    navigation: {
        nextEl: ".slider-button-next_steps",
        prevEl: ".slider-button-prev_steps",
    },
      breakpoints: {
          // when window width is >= 320px
          576: {
            slidesPerView: 1,
          },
          // when window width is >= 768px
          768: {
            slidesPerView: 2,
          },
          // when window width is >= 1024px
          1024: {
            slidesPerView: 2,
          },
          // when window width is >= 1200px
          1200: {
              slidesPerView: 4,
            }
      }   
  });  
        
const lightModeOn = (event) => {
    navbar.classList.add("navbar-light");
    // logo.href.baseVal = "img/sprite.svg#logo";
};

const lightModeOff = (event) => {
    navbar.classList.remove("navbar-light");
    // logo.href.baseVal = "img/sprite.svg#logo-light";
};

const isFront = document.body.classList.contains("front-page");
const changeNavHeight = (height) => {
  navbar.style.height = height;
}

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

window.addEventListener("scroll", ()=> {

    // this.scrollY > 1 ? lightModeOn() : lightModeOff(); 
    /*Если окно прокуручно больше чем на 1px, если да (знак ?) 
    то выполнить условие "включить светлый режим" lightModeOn()
    иначе (:) выполнить следующее условие lightModeOff()*/ 

    // if (this.scrollY > 1 ) {
    //     lightModeOn();
    // } else {
    //     lightModeOff();
    // }
    this.scrollY > 1 ? changeNavHeight('4.5rem') : changeNavHeight('5.875rem');
    if (isFront) {
      this.scrollY > 1 ? lightModeOn() : lightModeOff();
    }
    
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


const swiperBlog = new Swiper(".blog-slider",{
  speed: 400,
  spaceBetween: 30,
  slidesPerView: 2,
  navigation: {
    nextEl: ".blog-button-next",
    prevEl: ".blog-button-prev",
},
breakpoints: {
  // when window width is >= 320px
  320: {
    slidesPerView: 1,
  },
  // when window width is >= 320px
  576: {
    slidesPerView: 1,
  },
  // when window width is >= 768px
  768: {
    slidesPerView: 1,
  },
  // when window width is >= 1024px
  1024: {
    slidesPerView: 1,
  },
  // when window width is >= 1200px
  1200: {
      slidesPerView: 2,
    }
}
});

// const modal = document.querySelector(".modal");
// const modalToggle = document.querySelectorAll("[data-toggle=modal]");
// const modalClose = document.querySelector(".modal-close");
// modalToggle.forEach((element) => {
//   element.addEventListener ("click",(event) => {
//     event.preventDefault();
//     modal.classList.add("is-open");
//   });
// });

// modalClose.addEventListener("click", (event) => {
//   event.preventDefault();
//   modal.classList.remove("is-open");
// });

// modal.addEventListener("click", (element) => {
//   if (element.target === modal) {
//     modal.classList.remove("is-open");
//   }
// });

// window.addEventListener("keydown", (element) => {
//   if (element.code === "Escape" && modal.classList.contains("is-open")) {
//     modal.classList.remove("is-open");
//   }
// });

const modal = document.querySelector(".modal");
const modalDialog = document.querySelector(".modal-dialog");

document.addEventListener ("click", (event) => {
  if (event.target.dataset.toggle == "modal" ||
      event.target.parentNode.dataset.toggle == "modal" ||
      (!event.composedPath().includes(modalDialog) && 
        modal.classList.contains("is-open"))
  ) {
    event.preventDefault();
    modal.classList.toggle("is-open");
  }
});

document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && modal.classList.contains("is-open")) {
    modal.classList.toggle("is-open");
  }
});