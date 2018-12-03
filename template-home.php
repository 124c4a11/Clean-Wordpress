<?php
/**
 * Template name: Homepage
 */
get_header();
?>


<?php
	$args = array(
		'post_type' => 'projects',
		'posts_per_page' => 4,
		'order' => 'ASC',
	);
	$query = new WP_Query( $args );

	if ( $query->have_posts() ) :
?>
	<div id="fh5co-portfolio">
		<?php $i = 1; while ( $query->have_posts() ) : $query->the_post(); ?>
			<?php
				$img_url = ( has_post_thumbnail() ) ? get_the_post_thumbnail_url() : 'https://picsum.photos/1280/864';
			?>
			<div class="fh5co-portfolio-item <?php if ( $i % 2 === 0 ) echo 'fh5co-img-right'; ?>">
				<div class="fh5co-portfolio-figure animate-box" style="background-image: url( <?php echo $img_url; ?> );"></div>
				<div class="fh5co-portfolio-description">
					<h2><?php the_title(); ?></h2>
					<?php the_excerpt(); ?>
					<p><a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php _e( 'Read More', 'clean' ); ?></a></p>
				</div>
			</div>
		<?php $i++; endwhile; ?>
	</div>
	<div class="clearfix"></div>
<?php endif; wp_reset_postdata(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	the_content();
endwhile; endif; ?>

<?php get_footer(); ?>