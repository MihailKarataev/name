
<?php 
    $myMeta = get_post_meta( $post->ID, "", false ); 
    while ( have_posts() ) {
        the_post();
    ?>

<div itemscope itemtype="https://schema.org/Movie" class="movieItem">
    <div itemprop="name" class="movieItem__title">
        <p> Название: </p><a href="<?php the_permalink(); ?>"> <?php print_r(implode($myMeta["title"]));?></a>
    </div>
    <div itemprop="image" class="movieItem__image">
        
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
        <p> Средняя оценка: <?php print_r(implode($myMeta["year-of-issue"]));?></p>
    </div>
    <div itemprop="text" class="movieItem__description">
        <p> Описание: <?php the_content(); ?></p>
    </div>
</div>

<?php }?>