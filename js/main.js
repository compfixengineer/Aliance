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

/*Запрет ввода цифр в поле Имя в инпуте*/
const setReplacer = (target, expression) => {
  target.addEventListener('input', () => {
    const parsedValue = target.value.replace(expression, '');
    
    if (parsedValue !== target.value) {
      target.value = parsedValue;
    }
  });
};

setReplacer(document.querySelector('#user-name'), /\d/g);
setReplacer(document.querySelector('#modal-user-name'), /\d/g);

let currentModal; // Текущее модальное окно
let modalDialog;
let alertModal = document.querySelector("#alert-modal"); // Окно с благодарностью; Обращение к идентификатору id = alert-modal
const closeAlertButton = document.getElementById("close-alert-modal");
const modalButtons = document.querySelectorAll("[data-toggle=modal]"); // Все кнопки которые имеют атрибут data-toggle=modal

modalButtons.forEach((button)  => {
  /*Событие клик по кнопке*/
  button.addEventListener("click", (event) => {
    /*Определение текущего открытого окна*/
    event.preventDefault();
    currentModal = document.querySelector(button.dataset.target);
    currentModal.classList.toggle("is-open");
    modalDialog = currentModal.querySelector(".modal-dialog");
    currentModal.addEventListener("click", (event) => {
      if (!event.composedPath().includes(modalDialog)) {
        currentModal.classList.remove("is-open");
      }
    });
  });
});

document.getElementById("close-alert-modal").onclick = function () {
  currentModal.classList.remove("is-open");
}

document.addEventListener("keyup", (event) => {
  if (event.key == "Escape" && currentModal.classList.contains("is-open")) {
    currentModal.classList.toggle("is-open");
  }
});

const forms = document.querySelectorAll("form"); // собираем все формы

forms.forEach((form) => {
  const validation = new JustValidate (form, {
    errorFieldCssClass: 'is-invalid',
  });
  validation
  .addField("[name=username]", [
    {
      rule: 'required',
      errorMessage: 'Укажите Ваше имя',
    },
    {
      rule: 'maxLength',
      value: 50,
      errorMessage: 'Максимальное количество символов 50',
    },
  ])
  .addField("[name=userphone]", [
    {
      rule: 'required',
      errorMessage: 'Укажите номер телефона',
    },
  ])
  .onSuccess((event) => {
    const thisForm = event.target; // Наша форма
    const formData = new FormData(thisForm); // Получаеи данные из формы
    const ajaxSend = (formData) => {
      fetch(thisForm.getAttribute("action"), {
        method: thisForm.getAttribute("method"),
        body: formData, 
      }).then((responce) => {
        if (responce.ok) {
          thisForm.reset(); 
          currentModal.classList.remove("is-open");
          alertModal.classList.add("is-open");
          currentModal = alertModal;
          modalDialog = currentModal.querySelector(".modal-dialog");
          currentModal.addEventListener("click", (event) => {
            if (!event.composedPath().includes(modalDialog)) {
              currentModal.classList.remove("is-open");
            }
          });
        } else {
          alert(responce.statusText);
        }
      });
    };
    ajaxSend(formData);
  });
})