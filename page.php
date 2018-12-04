<?php get_header(); ?>

<div id="fh5co-content">
	<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content' ); ?>
		<? endwhile; ?>
	</div>
</div>

<?php
get_footer();