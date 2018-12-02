<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if ( empty( $atts['image'] ) ) {
	$image = fw_get_framework_directory_uri('/static/img/no-image.png');
} else {
	$image = $atts['image']['url'];
}
?>
<div class="fw-team fh5co-staff to-animate">
	<div class="fw-team-image"><img class="img-responsive" src="<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($atts['name']); ?>"/></div>
	<div class="fw-team-inner">
		<div class="fw-team-name">
			<h3><?php echo $atts['name']; ?></h3>
			<?php if ( !empty( $atts['job'] ) ) : ?>
				<span><?php echo $atts['job']; ?></span>
			<?php endif; ?>
		</div>
		<div class="fw-team-text">
			<p><?php echo $atts['desc']; ?></p>
		</div>
		<ul class="fh5co-social">
			<?php if ( !empty( $atts['twitter'] ) ) : ?>
				<li><a href="<?php echo esc_url( $atts['twitter'] ); ?>"><i class="icon-twitter"></i></a></li>
			<?php endif; ?>
			<?php if ( !empty( $atts['github'] ) ) : ?>
				<li><a href="<?php echo esc_url( $atts['github'] ); ?>"><i class="icon-github"></i></a></li>
			<?php endif; ?>
		</ul>
	</div>
</div>