<?php
/**
 * Template header-home
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
<div class="header">
    <div class="header-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="header-wrapper">
                        <div class="header-logo">
                            <a href="/" class="logo-link">
                                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/logo-header.png" alt="" class="logo-link__img">
                            </a>
                        </div>
                        <nav class="header-menu">
                            <li class="menu-item">
                                <a href="#" class="menu-link">Главная</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link">О компании</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link">Услуги</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link">Каталогов товаров</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link">Контакты</a>
                            </li>
                        </nav>
                        <a href="tel: 77780733799" class="header-contacts">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/phone-icon.png" alt="" class="header-contacts__icon">
                            <span class="header-contacts__text">+7 (778) <span
                                    class="header-contacts__bold">073 37 99</span></span>
                        </a>
                    </div>
                    <div class="title-section">
                        <h1 class="title-section__title">Автономная газификация<br> жилых и коммерческих помещений</h1>
                        <h2 class="title-section__subtitle">Бытовой газ: котлы, арматура, сигнализаторы, композитные
                            балоны</h2>
                        <a href="#" class="title-section__link">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

