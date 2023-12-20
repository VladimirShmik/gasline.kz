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
                        <li><a href="/" class="footer-nav__link">Главная</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/about-company/" class="footer-nav__link">О компании</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/services/" class="footer-nav__link">Услуги</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/catalog/" class="footer-nav__link">Каталог товаров</a></li>
                        <li><a href="<?php bloginfo('url'); ?>/contacts/" class="footer-nav__link">Контакты</a></li>
                    </ul>
                    <hr class="footer-hr">
                    <div class="footer-grid">
                        <div class="footer-item footer-item--1">
                            <h4 class="footer-item__title">Адреса офисов:</h4>
                            <a href="https://2gis.kz/astana/inside/9570784863343040/firm/70000001046243385?m=71.465344%2C51.179247%2F19.21" target="_blank" rel="noopener"  class="footer-item__link">в г. Астана проспект Аль-Фараби 44, 3 этаж, 33 кабинет</a>
                            <a href="https://2gis.kz/petropavlovsk/search/%D0%B3.%20%D0%9F%D0%B5%D1%82%D1%80%D0%BE%D0%BF%D0%B0%D0%B2%D0%BB%D0%BE%D0%B2%D1%81%D0%BA%2C%20%D1%83%D0%BB.%20%D0%A2%D0%B5%D0%B0%D1%82%D1%80%D0%B0%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F%2042%D0%B0/geo/70030076175344323/69.120034%2C54.874163?m=69.120074%2C54.874175%2F17.73" target="_blank" rel="noopener" class="footer-item__link">г. Петропавловск, ул. Театральная 42а</a>
                        </div>
                        <div class="footer-item footer-item--2">
                            <h4 class="footer-item__title">Телефоны:</h4>
                            <a href="tel:77073649575" class="footer-item__link">+7(707)364-95-75</a>
                            <a href="tel:77762909546" class="footer-item__link">+7(776)290-95-46</a>
                            <a href="tel:77172414425" class="footer-item__link">+7(717)241-44-25</a>
                            <a href="tel:77013950008" class="footer-item__link">+7(701)395-00-08</a>
                        </div>
                        <div class="footer-item footer-item--3">
                            <a href="<?php bloginfo('url'); ?>/product-category/gas-boilers/" class="footer-item__link footer-item__link--red">Газовые котлы</a>
                            <a href="<?php bloginfo('url'); ?>/product-category/gas-holder-fittings/" class="footer-item__link footer-item__link--red">Газгольдерная арматура</a>
                            <a href="<?php bloginfo('url'); ?>/product-category/products-for-the-boiler-room/" class="footer-item__link footer-item__link--red">Товары для котельной</a>
                            <a href="<?php bloginfo('url'); ?>/product-category/camping-goods/" class="footer-item__link footer-item__link--red">Товары для кемпинга</a>
                        </div>
                        <div class="footer-item footer-item--4">
                            <a href="#" class="footer-item__link footer-item__link--red">газовое отопление “под
                                ключ”</a>
                            <a href="#" class="footer-item__link footer-item__link--red">Котельные работы</a>
                        </div>
                        <div class="footer-item footer-item--5">
                            <a href="/" class="footer-item__link footer-item__link--red">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/logo-footer.png" alt="">
                            </a>
                            <a href="https://zdesign.kz/" class="footer-item__link footer-item__link--zdesign">
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