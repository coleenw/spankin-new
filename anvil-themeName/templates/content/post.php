<article class="entry-content row">
    <div class="columns-8 column-center content-column">
        <?php if (has_post_thumbnail()): ?>
            <div class="entry-featured_image">
                <?php the_post_thumbnail('fs-full'); ?>
            </div>
        <?php endif; ?>

        <h1 class="entry-title"><?php the_title(); ?></h1>

        <?php the_content(); ?>
    </div>
</article>
