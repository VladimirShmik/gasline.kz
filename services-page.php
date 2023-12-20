<?php
/**
 * Template Name: Шаблон услуг
 */
?>
<?php get_header(); ?>
    <main class="main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--breadcrumbs-->
                    <div class="breadcrumbs">
                        <?php woocommerce_breadcrumb() ?>
                    </div>
                    <!--content-section-->
                    <div class="content-wrapper">
                        <h1 class="content-wrapper__title">Услуги</h1>
                        <?php $args = array('posts_per_page' => -1, 'category_name' => 'services');
                        $query = new WP_Query($args);
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post(); ?>
                                <div class="category-item">
                                    <a href="<?php the_permalink(); ?>" class="category-img">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                    <div class="category-desc">
                                        <span class="news-item__time"><?php echo get_the_date('d.m.Y'); ?></span>
                                        <h3 class="category-desc__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <?php the_excerpt(); ?>
                                        <a href="<?php the_permalink(); ?>" class="product-box__more product-box__more--news ">Подробнее</a>
                                    </div>
                                </div>

                            <?php }
                            wp_reset_postdata();
                        } else
                            echo 'Записей нет.'; ?>
                    </div>
                </div>
            </div>
    </main>
<?php get_footer(); ?>