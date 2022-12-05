<div class="movie__wrapper">
    <?php 

        while ( have_posts() ) {
            the_post();
            $myMeta = get_post_meta( $post->ID, "", false ); 
        ?>

    <div itemscope itemtype="https://schema.org/Movie" class="movieItem">
        <div itemprop="name" class="movieItem__title">
            <a href="<?php the_permalink(); ?>"> <?php print_r(implode($myMeta["title"]));?></a>
        </div>
        <div itemprop="image" class='movie__item__image'>
            <img src="<?php print_r(implode($myMeta["photo_URL"]));?>">
        </div>
        <div itemprop="director" class="movieItem__title">
            <p> Режиссер: <?php print_r(implode($myMeta["movie-director"]));?></p>
        </div>
        <div itemprop="year-of-issue" class="movieItem__title">
            <p> Год выпуска: <?php print_r(implode($myMeta["year-of-issue"]));?></p>
        </div>
        <div itemprop="genre" class="movieItem__title">
            <p> Жанр: <?php print_r(implode($myMeta["genre"])); ?></p>
        </div>
        <div itemprop="aggregateRating" class="movieItem__title">
            <p> Средняя оценка: <?php print_r(implode($myMeta["average-mark"]));?>/10</p>
        </div>
        <div itemprop="text" class="movieItem__description">
            <p> Описание: <?php the_content(); ?></p>
        </div>
    </div>

    <?php }?>

</div>