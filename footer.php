

    <footer class="footer">
        <div class="container">
            <div class="footer-top">
                <a class="header-logo" href="./" aria-lable="Главная страница">
                    <svg class="logo-svg footer-logo"  >
                        <use href="img/sprite.svg#logo"></use>
                    </svg>
                </a>
                <a href="tel:+79276861014" class="footer-phone">+7 (927) 686-10-14</a>
                <div class="footer-info">
                    <svg class="geo-icon" width="12" height="16"  >
                        <use href="img/sprite.svg#geo"></use>
                    </svg>
                    <address class="footer-info-address">
                        г. Москва, Холодильный пер. 4к1с8
                    </address>
                </div>
                <div class="footer-info">
                    <svg class="email-icon" width="16" height="12"  >
                        <use href="img/sprite.svg#email"></use>
                    </svg>
                    <a href="mailto:a.dragunov@tdaliance.ru" class="footer-info-email">
                        a.dragunov@tdaliance.ru
                    </a>
                </div>
                <div class="footer-social">
                    <a href="#" class="footer-social-link" aria-label="vk">
                        <svg class="vkontakte-icon" width="24" height="24"  >
                            <use href="img/sprite.svg#vkontakte"></use>
                        </svg>
                    </a>
            
                    <a href="#" class="footer-social-link" aria-label="inst">
                        <svg class="instagram-icon" width="24" height="24"  >
                            <use href="img/sprite.svg#instagram"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <hr color="#ebebf0" class="footer-seporator">
        <div class="container">
            <div class="footer-bottom">
                <div class="footer-menu-wrapper">
                    <h2 class="footer-menu-title">Контрактное производство</h2>
                    <ul class="footer-menu-list footer-menu-column-2">
                        <li class="footer-menu-item">
                            <a href="./autochemistry.php" class="footer-menu-link">Автомобильная химия</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">Бытовая химия</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">Дезенфицирующиее средства</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">Пищевые аэрозоли</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">Косметическая продукция</a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">Краски аэрозольные</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-menu-wrapper">
                    <h2 class="footer-menu-title">Собственные марки</h2>
                    <ul class="footer-menu-list">
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">
                                Автохимия AG-Tech
                            </a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link">
                                Автохимия AP
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-menu-wrapper">
                    <ul class="footer-menu-list">
                        <li class="footer-menu-item">
                            <a href="./about.php" class="footer-menu-link footer-menu-link-bold">
                                О компании
                            </a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link footer-menu-link-bold">
                                Новости
                            </a>
                        </li>
                        <li class="footer-menu-item">
                            <a href="#" class="footer-menu-link footer-menu-link-bold">
                                Контакты
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.footer-bottom -->
        </div>
        <hr color="#ebebf0" class="footer-seporator">
        <div class="container">
            <div class="footer-wrapper">
                <div class="footer-legal">
                    <p class="footer-copyright">&copy; <?php echo date('Y');?> «Aliance Production». Все права защищены.</p>
                    <a href="./politics.php" class="footer-policy">Политики конфиденциальности</a>
                </div>
                <!-- /.footer-legal -->
                <div class="footer-author">
                    <span class="made-in">Сделано в</span>
                    <svg width="52" height="11"  >
                        <use href="img/sprite.svg#ruso"></use>
                    </svg>
                </div>
            </div>
            <!-- /.footer-wrapper -->
        </div>
    </footer>

    <div class="modal" id="feedback-modal">
        <div class="modal-dialog">
            <h2 class="modal-title">Есть Вопросы?</h2>
            <!-- /.modal-title -->
            <a href="#" class="modal-close" data-toggle="modal" data-target="#feedback-modal">
                                    <!-- ссылка на закрытие  data-target="#feedback-modal -->
                <svg class="close-icon" width="24" height="24"  >
                    <use href="img/sprite.svg#close"></use>
                </svg>
            </a>
            <!-- /.modal-close -->
            <p class="modal-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!
            </p>
            <!-- /.modal-text -->
            <form action="handler.php" method ="POST" class="modal-form">
                <div class="input-group-wrapper input-group-vertical">
                    <div class="input-group modal-input-group">
                         <input id="modal-user-name" type="text" class="input modal-input"
                         name = "username"
                         placeholder=" ">
                         <label class="input-group-label modal-input-lable" for="modal-user-name">Имя</label>   
                    </div>
                    <!-- /.input-group -->
                    <div class="input-group modal-input-group">
                         <input id="modal-user-phone" type="tel" class="input modal-input phone_mask"
                         name = "userphone"
                         placeholder=" ">
                         <label class="input-group-label modal-input-lable" for="modal-user-phone">Номер телефона</label>
                    </div>
                    <!-- /.input-group --> 
                 </div>
                 <!-- /.input-group-wrapper -->
                 <div class="modal-form-footer">
                     <button type="submit" class="button modal-form-button">Оставить заявку</button>
                     <div class="notify">
                         <svg class="notify-icon" width="14" height="14"  >
                             <use href="img/sprite.svg#shield"></use>
                         </svg>
                         <p class="notify-text">
                             Обращаясь к нам вы получаете не только профессиональную работу, но и абсолютную конфиденциальность информации!
                         </p>
                     </div>
                 </div>
                 <!-- /.cta-form-footer -->
            </form>
            <!-- /.modal-form -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

<div class="modal" id="alert-modal">
    <div class="modal-dialog">
        <div class="thanks-image">
            <svg class="thanks-img" width="300" height="250">
                <use href="img/sprite.svg#thanks"></use>
            </svg>      
        </div>
        <!-- /.thanks-image -->   
        <h2 class="modal-title">Спасибо!</h2>
        <a href="#" class="modal-close" data-toggle="modal" data-target="#alert-modal">
            <svg class="close-icon" width="24" height="24">
                <use href="img/sprite.svg#close"></use>
            </svg>
        </a>
        <p class="modal-text">Наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
        <button type="button" class="button modal-form-button" id="close-alert-modal" data-target="#alert-modal">Вернутся на главную</button>
    </div>
</div>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.maskedinput.js"></script>
    <script>
        $(".phone_mask").mask("+7(999)999-99-99");
    </script>
    <script src="js/just-validate.production.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>