<?php get_header(); ?>

    <?php get_template_part('templates/page-banner'); ?>

    <div class="site-content" role="main">
        <article class="entry-content row">
            <div class="columns-8 column-center tablet-stretch _s">
                <?php the_field('404_page_content', 'options');?>

                <?php if (get_field('404_display_back_to_home_button', 'options')): ?>
                    <?php echo anvil_button(get_field('404_back_to_home_button_text', 'options'), home_url(), 'purple'); ?>
                <?php endif; ?>
            </div>
        </article>
    </div>

<?php get_footer();?>
