<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <title><?php echo $page_title?> - Aliance Production</title>
</head>
<body>
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
                <a href="./trademarks.php" class="mobile-menu-link">Собственные марки</a>
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

    <nav class="navbar navbar-light">
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
    <!-- header-page-bg-grey -->
    <header class="header header-page <?= $header_stile?> <?= $header_stile2?>">
        <div class="container">
            <div class="header-content-page">
                <div class="seporator"></div>
                <!-- /.seporator -->
                <h1 class="header-title">
                <?= $page_title?>
                </h1>
                <!-- /.header-title -->
                <ul class="breadcrumbs">
                    <li class="breadcrumbs-item">
                      <a href="./index.php" class="breadcrumbs-link">Главная</a>
                    </li>
                    <li class="breadcrumbs-item active">
                      <a href="#" class="breadcrumbs-link"><?= $page_title?></a>
                    </li>
                  </ul>
            </div>
            <!-- /.header-content -->
        </div>
        <!-- container -->
    </header>
