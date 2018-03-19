<article class="loop-content loop-post row">
    <div class="columns-4 image-column">
        <?php forge_thumbnail_link(); ?>
    </div>

    <div class="columns-8 content-column">
        <h2 class="loop-title"><?php forge_title_link(); ?></h2>

        <?php excerpt(); ?>

        <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
    </div>
</article>
