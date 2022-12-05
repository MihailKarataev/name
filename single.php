<?php $post_id = the_ID();?>
<div itemscope itemtype="https://schema.org/Movie" class="movie-item">
    <div itemprop="name" class='movie-item__title'>
        <p> Название: </p><a href="<?php the_permalink(); ?>"><?php get_post_meta($post_id, 'title', true); ?></a>
    </div>
    <div itemprop="image" class='movie__item__image'>
        <?php the_post_thumbnail(); ?>
    </div>
    <div itemprop="director" class='movie-item__title'>
        <p> Режиссер: </p><?php get_post_meta(); ?>
    </div>
    <div itemprop="name" class='movie-item__title'>
        <p> Год выпуска: </p><?php  ?>
    </div>
    <div itemprop="genre" class='movie-item__title'>
        <p> Жанр: </p><?php ?>
    </div>
    <div itemprop="aggregateRating" class='movie-item__title'>
        <p> Средняя оценка: </p><?php  ?>
    </div>
    <div itemprop="text" class="movie-item__description">
        <p> Описание: </p><?php the_content(); ?>
    </div>
    <div itemprop="text" class="movie-item__description">
        <p> Бюджет: </p>
    </div>
</div>