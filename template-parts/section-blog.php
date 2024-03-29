<section class="section blog">
        <div class="container">
        <?php
            if (!empty($block_title)) {
                echo '<div class="seporator"></div>';
                echo '<h2 class="section-title">'.  $block_title . '</h2>';
            }
        ?>
            <!-- <div class="seporator"></div>
            <h2 class="section-title">Блог экспертов в области производства</h2> -->
            <!-- Slider main container -->
            <div class="swiper blog-slider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                <!-- Slides -->
                    <a href="#" class="swiper-slide blog-card">
                    <picture>
                        <source type="image/webp" srcset="img/blog/1.webp">
                        <source type="image/jpeg" srcset="img/blog/1.jpg">
                        <img src="img/blog/1.jpg" alt="" class="blog-card-image">
                    </picture>
                        <h3 class="blog-card-title">Современная методология разработки одухотворила всех причастных</h3>
                        <p class="blog-card-text">Действия представителей оппозиции, превозмогая сложившуюся непростую экономическую ситуацию, в равной степени предоставлены...</p>
                    </a>
                    <a href="#" class="swiper-slide blog-card">
                    <picture>
                        <source type="image/webp" srcset="img/blog/2.webp">
                        <source type="image/jpeg" srcset="img/blog/2.jpg">
                        <img src="img/blog/2.jpg" alt="" class="blog-card-image">
                    </picture>
                        <h3 class="blog-card-title">Сложно сказать, почему жизнь прекрасна</h3>
                        <p class="blog-card-text">Сложно сказать, почему элементы политического процесса функционально разнесены на независимые элементы. Безусловно, высокотехнологичная...</p>
                    </a>
                    <a href="#" class="swiper-slide blog-card">
                    <picture>
                        <source type="image/webp" srcset="img/blog/1.webp">
                        <source type="image/jpeg" srcset="img/blog/1.jpg">
                        <img src="img/blog/1.jpg" alt="" class="blog-card-image">
                    </picture>
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