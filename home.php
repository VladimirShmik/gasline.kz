<?php
/**
 * Template Name: Главная
 */
?>

<?php get_header('home'); ?>

<main class="main">
    <!--advantages-section-->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="advantages-wrapper">
                    <div class="advantages-grid">
                        <div class="advantages-item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/advantages-icon-1.png" alt="" class="advantages-item__img">
                            <h3 class="advantages-item__title">Доступные цены и спец. предложения</h3>
                        </div>
                        <div class="advantages-item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/advantages-icon-2.png" alt="" class="advantages-item__img">
                            <h3 class="advantages-item__title">Наличие на складе</h3>
                        </div>
                        <div class="advantages-item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/advantages-icon-3.png" alt="" class="advantages-item__img">
                            <h3 class="advantages-item__title">Сертификаты качества</h3>
                        </div>
                        <div class="advantages-item">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/advantages-icon-4.png" alt="" class="advantages-item__img">
                            <h3 class="advantages-item__title">Доставка по всему Казахстану</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--numbers-section-->
    <div class="number-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="number-grid">
                        <div class="number-left">
                            <h2 class="number-wrapper__title">Компания в цифрах</h2>
                            <div class="left-grid">
                                <div class="number-box">
                                    <span class="number-box__number">5</span>
                                    <p class="number-box__text">лет на рынке</p>
                                </div>
                                <div class="number-box">
                                    <span class="number-box__number">129</span>
                                    <p class="number-box__text">выполненных проектов</p>
                                </div>
                                <div class="number-box">
                                    <span class="number-box__number">13 450</span>
                                    <p class="number-box__text">реализованной продукции</p>
                                </div>
                            </div>
                        </div>
                        <div class="number-right">
                            <div class="number-row">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/number-icon.png" alt="" class="number-row__img">
                                <p class="number-row__text">Несем тепло и уют в каждый дом</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--recommended-section-->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="recommended-wrapper">
                    <h2 class="recommended-wrapper__title">РЕКОМЕНДУЕМЫЕ ТОВАРЫ</h2>
                    <div class="recommended-grid">
                        <?php $args = array(
                            'posts_per_page' => 8,
                            'post_type' => 'product',
                            'post__in' => array(212, 207, 206, 205, 199, 128, 105, 97),
                            'orderby' => 'meta_value_num',
                            'meta_key' => '_price',
                            'order' => 'desc',
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post(); ?>
                                <div class="product-item">
                                    <?php the_post_thumbnail(); ?>
                                    <h3 class="product-item__title"><?php the_title(); ?></h3>
                                   <?php woocommerce_template_loop_price(); ?>
                                    <div class="product-box">
                                        <?php woocommerce_template_loop_add_to_cart(); ?>
                                        <a href="<?php the_permalink(); ?>" class="product-box__more">Подробнее</a>
                                    </div>
                                </div>
                            <?php }
                            wp_reset_postdata();
                        } else
                            echo 'Записей нет.'; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--cylinders-section-->
    <div class="cylinders-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cylinders-wrapper">
                        <div class="cylinders-left">
                            <h3 class="cylinders-wrapper__title">Композитные газовые баллоны</h3>
                            <p class="cylinders-wrapper__text">Для туризма, охоты и рыбалки</p>
                            <p class="cylinders-wrapper__text">Для пикников и автопутешествий</p>
                            <p class="cylinders-wrapper__text">Для загородной жизни</p>
                            <p class="cylinders-wrapper__text">Для производственных складов и
                                бизнес-объектов</p>
                            <div class="cylinders-box">
                                <a href="<?php bloginfo('url'); ?>/product-category/camping-goods/" class="cylinders-more">Подробнее</a>
                            </div>
                        </div>
                        <div class="cylinders-right">
                            <h3 class="cylinders-wrapper__title">ДЛЯ ТЕХ, КОМУ ВАЖНЫ ТЕПЛО И
                                УЮТ В ЛЮБЫХ УСЛОВИЯХ!</h3>
                            <p class="cylinders-wrapper__text">Баллон собирается вручную,<br>
                                каждую деталь тщательно проверяют</p>
                            <p class="cylinders-wrapper__text">После сборки баллоны тестируют —
                                выдержат ли они давление, которое <br> в
                                два раза превышает их рабочее</p>
                            <p class="cylinders-wrapper__text">Каждому баллону присваивается
                                идентификационный номер,<br>
                                по которому можно отследить историю
                                производства, проверки и продажи баллона</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--supply-section-->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="supply-wrapper">
                    <div class="supply-block">
                        <h2 class="supply-block__title">Автономное газоснабжение “под ключ”</h2>
                        <p class="supply-block__text">Наша компания профессионально занимается разработкой и монтажом
                            инженерных систем частных домов, коттеджей и промышленных объектов, топливом в которых
                            является сжиженный углеводородный газ (СУГ). Обратившись в нашу компанию, вы получите
                            систему автономного газоснабжения и комплекс сопутствующих услуг «под ключ», включающий в
                            себя проектирование, поставку газового оборудования, монтаж и сервисное обслуживание.</p>
                        <a href="<?php bloginfo('url'); ?>/services/" class="cylinders-more">Подробнее</a>
                    </div>
                    <div class="supply-img">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/supply-bg.png" alt="" class="supply-img__img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--news-section-->
    <div class="news-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="news-wrapper">
                        <h2 class="news-wrapper__title">Новости и публикации</h2>
                        <div class="news-grid mb-2">
                            <?php $args = array('posts_per_page' => 4, 'category_name' => 'news');
                            $query = new WP_Query($args);
                            if ($query->have_posts()) {
                                while ($query->have_posts()) {
                                    $query->the_post(); ?>
                                    <a href="<?php the_permalink(); ?>" class="news-item">
                                        <?php the_post_thumbnail(); ?>
                                        <h4 class="news-item__title"><?php the_title(); ?></h4>
                                        <?php the_excerpt(); ?>
                                        <time class="news-item__time"><?php echo get_the_date('d.m.Y'); ?></time>
                                    </a>

                                <?php }
                                wp_reset_postdata();
                            } else
                                echo 'Записей нет.'; ?>
                        </div>
                        <a href="<?php echo bloginfo('url'); ?>/news/" class="cylinders-more m-auto">Все новости</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>



