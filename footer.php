<?php
/**
 * Template footer
 */
?>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-wrapper">
                    <ul class="footer-nav">
                        <li><a href="#" class="footer-nav__link">Главная</a></li>
                        <li><a href="#" class="footer-nav__link">О компании</a></li>
                        <li><a href="#" class="footer-nav__link">Услуги</a></li>
                        <li><a href="#" class="footer-nav__link">Каталог товаров</a></li>
                        <li><a href="#" class="footer-nav__link">Контакты</a></li>
                    </ul>
                    <hr class="footer-hr">
                    <div class="footer-grid">
                        <div class="footer-item footer-item--1">
                            <h4 class="footer-item__title">Адреса офисов:</h4>
                            <a href="#" class="footer-item__link">г. Астана, ул. Темирказык 65 ВП-1</a>
                            <a href="#" class="footer-item__link">г. Петропавловск, ул. Театральная 42а</a>
                        </div>
                        <div class="footer-item footer-item--2">
                            <h4 class="footer-item__title">Телефоны:</h4>
                            <a href="tel:77780733799" class="footer-item__link">+7 778 07 33 7 99</a>
                            <a href="tel:77013950008" class="footer-item__link">+7 701 395 00 08</a>
                            <a href="tel:77054516437" class="footer-item__link">+7 705 451 64 37</a>
                        </div>
                        <div class="footer-item footer-item--3">
                            <a href="#" class="footer-item__link footer-item__link--red">Газовые котлы</a>
                            <a href="#" class="footer-item__link footer-item__link--red">Газгольдерная арматура</a>
                            <a href="#" class="footer-item__link footer-item__link--red">Товары для котельной</a>
                            <a href="#" class="footer-item__link footer-item__link--red">Товары для кемпинга</a>
                        </div>
                        <div class="footer-item footer-item--4">
                            <a href="#" class="footer-item__link footer-item__link--red">газовое отопление “под
                                ключ”</a>
                            <a href="#" class="footer-item__link footer-item__link--red">Котельные работы</a>
                        </div>
                        <div class="footer-item footer-item--5">
                            <a href="#" class="footer-item__link footer-item__link--red">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/logo-footer.png" alt="">
                            </a>
                            <a href="#" class="footer-item__link footer-item__link--zdesign">
                                <span>Дизайн и разработка</span>
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/zdesign-logo.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="menu-backdrop"></div>
</div>
</body>
</html>
<?php wp_footer(); ?>