<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital@0;1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,600;1,600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,700;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Noto+Sans:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <title>Aliance Production</title>
</head>
<body class="front-page">
    <div class="mobile-menu">
        <ul class="mobile-menu-nav">
            <li class="mobile-menu-nav-item">
                <a href="./about.php" class="mobile-menu-link">О компании</a>
            </li>
            <li class="mobile-menu-nav-item">
                <a href="./contract-trades.php" class="mobile-menu-link">Контрактное производство</a>
                <ul class="mobile-submenu">
                    <li class="mobile-submenu-item">
                        <a href="./autochemistry.php" class="mobile-submenu-link">Автомобильная химия</a>
                    </li>
                    <li class="mobile-submenu-item">
                        <a href="#" class="mobile-submenu-link">Бытовая химия</a>
                    </li>
                    <li class="mobile-submenu-item">
                        <a href="#" class="mobile-submenu-link">Дезенфицирующие средства</a>
                    </li>
                    <li class="mobile-submenu-item">
                        <a href="#" class="mobile-submenu-link">Пищевые аэрозоли</a>
                    </li>
                    <li class="mobile-submenu-item">
                        <a href="#" class="mobile-submenu-link">Косметическая продукция</a>
                    </li>
                    <li class="mobile-submenu-item">
                        <a href="#" class="mobile-submenu-link">Краски аэрозольные</a>
                    </li>
                </ul>
            </li>
            <li class="mobile-menu-nav-item">
                <a href="#" class="mobile-menu-link">Собственные марки</a>
                <ul class="mobile-submenu">
                    <li class="mobile-submenu-item">
                        <a href="#" class="mobile-submenu-link">Автохимия AG-Tech</a>
                    </li>
                    <li class="mobile-submenu-item">
                        <a href="#" class="mobile-submenu-link">Автохимия AP</a>
                    </li>
                </ul>   
            </li>
            <li class="mobile-menu-nav-item">
                <a href="#" class="mobile-menu-link">Новости</a>
            </li>
            <li class="mobile-menu-nav-item">
                <a href="#" class="mobile-menu-link">Контакты</a>
            </li>
        </ul>
        <a href="tel:+74996861014" class="mobile-phone">+7(499) 686-10-14</a>
        <div class="mobile-info">
            <svg class="geo-icon" width="12" height="16"  >
                <use href="img/sprite.svg#geo"></use>
            </svg>
            <address class="mobile-info-address">
                г. Москва, Холодильный пер. 4к1с8</address>
        </div>
        <div class="mobile-info">
            <svg class="email-icon" width="16" height="12"  >
                <use href="img/sprite.svg#email"></use>
            </svg>
            <a href="mailto:a.dragunov@tdaliance.ru" class="mobile-info-email">
                a.dragunov@tdaliance.ru</a>
        </div>
        
        <a href="#" class="sotial-media-vk">
            <svg class="vkontakte-icon" width="24" height="24"  >
                <use href="img/sprite.svg#vkontakte"></use>
            </svg>
        </a>

        <a href="#" class="sotial-media-inst">
            <svg class="instagram-icon" width="24" height="24"  >
                <use href="img/sprite.svg#instagram"></use>
            </svg>
        </a>
    </div>

    <nav class="navbar">
            <a href="#" class="mobile-menu-toggle">
                <div class="mobile-menu-line"></div>
                <div class="mobile-menu-line"></div>
                <div class="mobile-menu-line"></div>
            </a>
            <a href="./" class="header-logo"> <!--./ перевод по нажатию на логотип на главную страницу -->
                <svg class="logo-svg logo-light" width="140" height="44"  >
                    <use href="img/sprite.svg#logo-light"></use>
                </svg>  
                <svg class="logo-svg logo-dark" width="140" height="44"  >
                    <use href="img/sprite.svg#logo"></use>
                </svg>                            
            </a> 
            <ul class="header-nav">
                <li class="header-nav-item">
                    <a href="./about.php" class="header-nav-link">О компании</a>
                </li>
                <li class="header-nav-item">
                    <a href="./contract-trades.php" class="header-nav-link">Контрактное производство</a>
                </li>
                <li class="header-nav-item">
                    <a href="./trademarks.php" class="header-nav-link">Собственные торговые марки</a>
                </li>
                <li class="header-nav-item">
                    <a href="#" class="header-nav-link">Новости</a>
                </li>
                <li class="header-nav-item">
                    <a href="#" class="header-nav-link">Контакты</a>
                </li>
            </ul>
            <div class="header-phone">
                <svg class="phone-icon" width="24" height="24">
                    <use href="img/sprite.svg#phone"></use>
                </svg> 
                <a href="tel:+74996861014" class="header-phone-link">
                    +7 (499) 686-10-14
                </a>
            </div>
            <!-- /.header-phone -->
            <button class="header-button button" data-toggle="modal" data-target="#feedback-modal">
                <svg class="button-icon" width="24" height="24"  >
                    <use href="img/sprite.svg#phone"></use>
                </svg> 
                <span class="button-text">Получить консультацию</span>
            </button>
    </nav>
    <!-- /.navbar --> 

    <header class="header header-image">
        <div class="container">
            <div class="header-content">
                <div class="seporator"></div>
                <!-- /.seporator -->
                <h1 class="header-title">
                    Комплексное обеспечение товарами и расходными материалами бизнеса
                </h1>
                <!-- /.header-text -->
                <p class="header-text">
                    Высокий уровень вовлечения представителей целевой аудитории является четким доказательством простого факта: 
                    высококачественный прототип будущего проекта напрямую зависит от анализа существующих паттернов поведения.
                </p>
                <!-- /.header-title -->
                <button class="button header-button-title" data-toggle="modal" data-target="#feedback-modal">Подробнее о компании</button>
                            <!-- ссылаемся на #feedback-modal  -->
            </div>
            <!-- /.header-content -->


            <!-- Основной блок слайдера -->
            <div class="swiper features-slider">
                <!-- Обязательная обертка слайдера -->
                <ul class="swiper-wrapper header-features">
                <!-- Слайды -->
                <li class="swiper-slide header-features-item">
                    <svg width="36" height="36"  >
                        <use href="img/sprite.svg#time"></use>
                    </svg> 
                    <p class="header-features-text">Непрерывная работа c 2017 года</p>
                </li>
                <li class="swiper-slide header-features-item">
                    <svg width="36" height="36"  >
                        <use href="img/sprite.svg#sertificate"></use>
                    </svg> 
                    <p class="header-features-text">Вся продукция сертифицирована</p>
                </li>
                <li class="swiper-slide header-features-item">
                    <svg width="36" height="36"  >
                        <use href="img/sprite.svg#control"></use>
                    </svg> 
                    <p class="header-features-text">Контроль качества на всех этапах</p>
                </li>
                <li class="swiper-slide header-features-item">
                    <svg width="36" height="36"  >
                        <use href="img/sprite.svg#delivery"></use>
                    </svg>
                    <p class="header-features-text">Возможны поставки по всей России</p>
                </li>
                <li class="swiper-slide header-features-item">
                    <svg width="36" height="36"  >
                        <use href="img/sprite.svg#speed"></use>
                    </svg>
                    <p class="header-features-text">Оперативное производство</p>
                </li>
                </ul>
                
                <!-- Кнопки навигации -->
                <div class="slider-buttons">
                    <div class="slider-button-prev">
                        <svg width="36" height="24"  >
                            <use href="img/sprite.svg#arrow-prev"></use>
                        </svg>
                    </div>
                    <div class="slider-button-next">
                        <svg width="36" height="24"  >
                            <use href="img/sprite.svg#arrow-next"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </header>

    <section class="section section-white">
        <div class="container">
            <div class="seporator"></div>
            <h2 class="section-title">Схема работы</h2>

            <div class="swiper steps-slider">
                <ol class="swiper-wrapper steps">
                    <li class="swiper-slide steps-item">
                        <span class="steps-num">01</span>
                        <h3 class="steps-title">Знакомство</h3>
                        <p class="steps-text">Безусловно, сплочённость команды профессионалов 
                            позволяет оценить значение форм воздействия.
                        </p>
                        <a href="#" class="button-link">Оставить заявку</a>
                    </li>
    
                    <li class="swiper-slide steps-item">
                        <span class="steps-num">02</span>
                        <h3 class="steps-title">Заключение<br>договора</h3>
                        <p class="steps-text">Лишь интерактивные прототипы призваны к ответу.
                        </p>
                    </li>
    
                    <li class="swiper-slide steps-item">
                        <span class="steps-num">03</span>
                        <h3 class="steps-title">Производство</h3>
                        <p class="steps-text">А также стремящиеся вытеснить традиционное производство, 
                            нанотехнологии функционально разнесены на независимые элементы.
                        </p>
                    </li>
    
                    <li class="swiper-slide steps-item">
                        <span class="steps-num">04</span>
                        <h3 class="steps-title">Доставка</h3>
                        <p class="steps-text">В частности, экономическая повестка сегодняшнего дня
                            говорит о возможностях приоритизации разума над эмоциями.
                        </p>
                    </li>
                </ol>
                <!-- /.steps -->
            </div>

            <!-- Кнопки навигации -->
            <div class="slider-buttons-steps primary-buttons-wrapper">
                <div class="slider-button-prev_steps primary-button-prev">
                    <svg width="36" height="24"  >
                        <use href="img/sprite.svg#arrow-prev"></use>
                    </svg>
                </div>
                <div class="slider-button-next_steps primary-button-next">
                    <svg width="36" height="24"  >
                        <use href="img/sprite.svg#arrow-next"></use>
                    </svg>
                </div>
            </div>
        </div>
    </section>
    
    <?php $block_title = "Контрактное производство"; include_once('./template-parts/contracts-block.php');?>
    
    <?php $block_title = "Собственные торговые марки"; include_once('./template-parts/trademarks-block.php');?>

    <section class="section founder">
        <img src="img/founder.jpg" alt="founder" class="founder-photo">
        <div class="container conteiner-founder">
            <div class="founder-content-wrapper">
                <div class="founder-content">
                    <div class="seporator"></div>
                    <h2 class="section-title">Отношение к делу<br> и к клиентам</h2>
                    <p class="founder-text">Кстати, интерактивные прототипы описаны максимально подробно. Повседневная практика показывает, что укрепление и развитие внутренней структуры говорит о возможностях соответствующих условий активизации. Внезапно, независимые государства, которые представляют собой яркий пример континентально-европейского типа политической культуры, будут подвергнуты целой серии независимых исследований. С учётом сложившейся международной обстановки, синтетическое тестирование выявляет срочную потребность системы массового участия.
                    </p>
                    <p class="founder-text">
                        А ещё действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены сами себе. Не следует, однако, забывать, что выбранный нами инновационный путь в значительной степени обусловливает важность дальнейших направлений развития.
                    </p>
                    <a href="#" class="button-link">Подробнее о компании</a>    
                </div>
                <!-- /.founder-content -->
            </div>
            <!-- /.founder-content-wrapper -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section founder -->

    <?php include_once('./template-parts/clients-block.php');?>
    
    <section class="section blog">
        <div class="container">
            <div class="seporator"></div>
            <h2 class="section-title">Блог экспертов в области производства</h2>
            <!-- Slider main container -->
            <div class="swiper blog-slider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                <!-- Slides -->
                    <a href="#" class="swiper-slide blog-card">
                        <img src="img/blog/1.jpg" alt="" class="blog-card-image">
                        <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>
                    <a href="#" class="swiper-slide blog-card">
                        <img src="img/blog/2.jpg" alt="" class="blog-card-image">
                        <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>
                    <a href="#" class="swiper-slide blog-card">
                        <img src="img/blog/1.jpg" alt="" class="blog-card-image">
                        <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>
                </div>
                
                <div class="blog-slider-footer">
                <a href="./blog.php" class="button-link">Весь блог</a>
                 <!-- If we need navigation buttons -->
                <div class="blog-buttons primary-buttons-wrapper">
                    <div class="blog-button-prev primary-button-prev">
                        <svg width="36" height="24"  >
                            <use href="img/sprite.svg#arrow-prev"></use>
                        </svg>
                    </div>
                    <div class="blog-button-next primary-button-next">
                        <svg width="36" height="24"  >
                            <use href="img/sprite.svg#arrow-next"></use>
                        </svg>
                    </div>
                </div>
                </div>
                <!-- /.blog-slider-footer -->
            </div>
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section blog -->

    <?php include_once('footer.php');?>