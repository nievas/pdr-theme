<?php do_action('before_post'); ?>
<article <?php post_class(); ?>>
	<div class="article-inner">
		<div class="media-object">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(  apply_filters('pdr_thumbnail_size', $size) ); ?>
			</a>
		</div>
		<div class="media-body">
			<header>
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			</header>
			<div class="entry-summary">
				<?php echo the_advanced_excerpt( array( 'allowed_tags' => array() ), true ); ?>
			</div>
		</div>
	</div>
</article>
<?php do_action('after_post'); ?>