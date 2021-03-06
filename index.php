<div class="row">
    <?php if (!have_posts()) : ?>
        <div class="alert">
            <?php _e('Sorry, no results were found.', 'roots'); ?>
        </div>
        <?php get_search_form(); ?>
    <?php endif; ?>


    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('templates/content', $type = (get_post_type() == 'post' ) ? '' : 'collection' ); ?>
    <?php endwhile; ?>
    
    <?php //if ($wp_query->max_num_pages > 1) :  ?>
        <div class="archive-link-container">
            <?php if ( 'collections' == get_query_var('post_type') ): ?>
                <a class="archive-link" href="<?php echo add_query_arg('medium', get_query_var('medium'), get_post_type_archive_link( $wp_query->query['post_type'] ) ) ?>">See more</a>
            <?php else: ?>
                <a class="archive-link" href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">See more</a>
            <?php endif; ?>
        </div>
    <?php //endif; ?>
</div>
