<?php if ( has_post_thumbnail() ) : ?>
	<img class="single-post-thumb img-responsive" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
<?php endif; ?>

<?php the_content(); ?>