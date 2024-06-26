<section class="calltoaction">
        <div class="bg-grey section-cta">
            <picture>
                <source type="image/webp" srcset="img/cta.webp">
                <source type="image/png" srcset="img/cta.png">
                <img src="img/cta.png" alt="call to action" class="cta-image">
            </picture>
            <div class="cta-form-wrapper container">
                <form action="handler.php" method ="POST" class="cta-form" id="cta-form-id">
                    <h2 class="section-title cta-from-title">Хотите сотрудничать?</h2>
                    <p class="cta-form-text">Оставьте заявку, наш менеджер свяжется с Вами в ближайшее время ответит на все интересующие вопросы и поможем даже в самых сложных случаях!</p>
                    <div class="input-group-wrapper">
                       <div class="input-group">
                            <input id="user-name" type="text" class="input" 
                            name = "username"
                            placeholder=" ">
                            <label class="input-group-label" for="user-name">Имя</label>   
                       </div>
                       <!-- /.input-group -->
                       <div class="input-group">
                            <input id="user-phone" type="tel" class="input phone_mask" 
                            name = "userphone"
                            placeholder=" ">
                            <label class="input-group-label" for="user-phone">Номер телефона</label>
                       </div>
                       <!-- /.input-group --> 
                    </div>
                    <!-- /.input-group-wrapper -->
                    <div class="cta-form-footer">
                        <button type="submit" class="button cta-form-button">Оставить заявку</button>
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
            </div>
            <!-- /.cta-form-wrapper    -->
        </div>
    </section>