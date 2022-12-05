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
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="container">
        <header class="header">
            <nav class="menu header__menu">
                <?php get_sidebar(); ?>
            </nav>
        </header>
