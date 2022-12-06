<?php
/*
Template Name: header
Template Post Type: header
*/
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="container">
        <header class="header">
            <div class="menu header__menu">
                <div class="logo"></div>
                <?php get_sidebar(); ?>
                <div class="authbar">
                    <div class="authbar__text"><p>Логин:</p><input type="text"></div>
                    <div class="authbar__text"><p>Пароль:</p><input type="password"></div>
                    <button>Войти</button>
                </div>
            </div>
        </header>
