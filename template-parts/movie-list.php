<div class="movie__wrapper">
    <?php 

        while ( have_posts() ) {
            the_post();
            $myMeta = get_post_meta( $post->ID, "", false ); 
        ?>

    <div itemscope itemtype="https://schema.org/Movie" class="movieItem">
        <div class="movieItem__title">
            <a itemprop="name" href="<?php the_permalink(); ?>"> <?php print_r(implode($myMeta["title"]));?></a>
        </div>
        <div itemprop="image" class='movieItem__image'>
            <?php echo wp_get_attachment_image( get_field('thumbnail'), 'medium' ); ?>
        </div>
        <div class="movieItem__title">
            <p> Режиссер:</p><p itemprop="director"> <?php print_r(implode($myMeta["movie-director"]));?></p>
        </div>
        <div class="movieItem__title">
            <p> Год выпуска:</p><p itemprop="year-of-issue"> <?php print_r(implode($myMeta["year-of-issue"]));?></p>
        </div>
        <div class="movieItem__title">
            <p> Жанр:</p><p itemprop="genre"> <?php print_r(implode($myMeta["genre"])); ?></p>
        </div>
        <div class="movieItem__title">
            <p> Средняя оценка:</p><p itemprop="aggregateRating"> <?php print_r(implode($myMeta["average-mark"]));?></p><p>/10</p>
        </div>
        <div class="movieItem__description">
            <p> Описание:</p><p itemprop="text"> <?php the_excerpt(); ?></p>
        </div>
    </div>

    <?php }?>

</div>