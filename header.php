<?php
/**
 * Template header
 */
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="image/x-icon" href="<?php echo bloginfo('template_url'); ?>/favicon.ico" rel="shortcut icon">
    <link type="Image/x-icon" href="<?php echo bloginfo('template_url'); ?>/favicon.ico" rel="icon">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="header header--menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-wrapper">
                    <div class="header-logo">
                        <a href="/" class="logo-link">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/logo-header.png" alt=""
                                 class="logo-link__img">
                        </a>
                    </div>
                    <div class="header-box">
                        <?php $items = WC()->cart->get_cart();
                        global $woocommerce;
                        $item_count = $woocommerce->cart->cart_contents_count;
                        ?>
                        <a class="nav-box" href="<?php bloginfo('url'); ?>/cart/" title="Товары в корзине">
                            <svg viewBox="0 0 128 128" class="nav-box__icon">
                                <path class="st0"
                                      d="M22.63,12.6h93.3c6.1,0,5.77,2.47,5.24,8.77l-3.47,44.23c-0.59,7.05-0.09,5.34-7.56,6.41l-68.62,8.73 l3.63,10.53c29.77,0,44.16,0,73.91,0c1,3.74,2.36,9.83,3.36,14h-12.28l-1.18-4.26c-24.8,0-34.25,0-59.06,0 c-13.55-0.23-12.19,3.44-15.44-8.27L11.18,8.11H0V0h19.61C20.52,3.41,21.78,9.15,22.63,12.6L22.63,12.6z M53.69,103.92 c5.23,0,9.48,4.25,9.48,9.48c0,5.24-4.24,9.48-9.48,9.48c-5.24,0-9.48-4.24-9.48-9.48C44.21,108.17,48.45,103.92,53.69,103.92 L53.69,103.92z M92.79,103.92c5.23,0,9.48,4.25,9.48,9.48c0,5.24-4.25,9.48-9.48,9.48c-5.24,0-9.48-4.24-9.48-9.48 C83.31,108.17,87.55,103.92,92.79,103.92L92.79,103.92z M30.8,43.07H45.9l-5.48-22.91c-5.4,0-10.72-0.01-15.93-0.01l1.84,6.86 L26.39,27L30.8,43.07L30.8,43.07L30.8,43.07z M48.31,20.17l5.48,22.9h14.54l-5.5-22.88L48.31,20.17L48.31,20.17L48.31,20.17z M70.74,20.2l5.5,22.87h13.91l-5.48-22.85L70.74,20.2L70.74,20.2L70.74,20.2z M92.58,20.23l5.48,22.85l13.92,0l1.54-18.36 c0.43-5.12,1.33-4.47-3.63-4.47C104.23,20.24,98.44,20.23,92.58,20.23L92.58,20.23L92.58,20.23z M111.49,48.89H99.45l3.97,16.56 l0.98-0.13c6.07-0.87,5.67,0.52,6.15-5.21L111.49,48.89L111.49,48.89z M95.77,66.5l-4.22-17.61h-13.9l4.67,19.44L95.77,66.5 L95.77,66.5L95.77,66.5z M74.66,69.37l-4.93-20.49l-14.55,0l5.37,22.41L74.66,69.37L74.66,69.37L74.66,69.37z M52.9,72.34 l-5.61-23.45H32.4l6.96,25.3L52.9,72.34L52.9,72.34z"/>
                            </svg>
                           <span class="nav-box__number"><?php echo $item_count; ?></span>
                            <span class="nav-box__text">Корзина</span>
                        </a>
                        <a href="tel: 77073649575" class="header-contacts">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/phone-icon.png" alt=""
                                 class="header-contacts__icon">
                            <span class="header-contacts__text"> <span
                                        class="header-contacts__bold">+7(707)-36-49-575</span></span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="header-menu-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="full-menu">
                        <?php wp_nav_menu(array('theme_location' => 'header-sub-menu', 'container_class' => 'header-sub-menu')); ?>
                        <?php echo get_product_search_form(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>