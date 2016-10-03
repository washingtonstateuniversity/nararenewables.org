<?php
// If a featured image is assigned to the post, output it as a figure with a background image accordingly.
if ( spine_has_featured_image() ) {
	$featured_image_src = spine_get_featured_image_src();
	$featured_image_position = get_post_meta( get_the_ID(), '_featured_image_position', true );

	if ( ! $featured_image_position || sanitize_html_class( $featured_image_position ) !== $featured_image_position ) {
		$featured_image_position = '';
	}

	?><figure class="featured-image <?php echo $featured_image_position; ?>" style="background-image: url('<?php echo esc_url( $featured_image_src ); ?>');"><?php spine_the_featured_image(); ?></figure><?php
}
?>
<section class="row side-right gutter pad-ends">

	<div class="column one">
<h1>Members</h1>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'articles/post', get_post_type() ); ?>

		<?php endwhile; // end of the loop. ?>

	</div><!--/column-->
	<div class="column two">
	</div>
</section>
