<header id="header" class="header lock-padding">
            <div class="header__top">
                <div class="inner">
                    <a href="#" class="main-logo header__top__item">
                        <img src="<?php echo get_template_directory_uri();?>/img/main-logo.svg" class="spacer" alt="">
                    </a>
                    <a href="#" class="burger-btn">
                        <span></span>
                    </a>
                    <div class="header__top__item work-time">
                        Работаем <span>24</span>/<span>7</span>
                    </div>
                    <a href="#" class="header__top__item location">
                        <span class="marker"></span>Курск
                    </a>
                    <div class="header__top__item contact-box">
                        <span class="db desktop phone"><? echo $tel = carbon_get_theme_option("to_phone"); ?></span>
                        <a href="tel:<? echo preg_replace('/[^0-9]/', '', $tel); ?>" class="db mobil phone"><? echo $tel; ?></a>
                        <a href="<? echo $mail = carbon_get_theme_option("to_mail"); ?>" class="email"><? echo $mail; ?></a>
                    </div>
                </div>
            </div>
            <?php get_template_part('template-parts/popups');?>
            <div class="header__bottom">
                <div class="inner">
                    <nav class="main-menu">
                        <ul>
                            <li><a href="#" class="location">Техосмотр</a></li>
                            <li><a href="#">Проверка карты</a></li>
                            <li><a href="#" class="location-2">ОСАГО</a></li>
                            <li><a href="#">Сотрудничество</a></li>
                            <li><a href="#">Отзывы</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>