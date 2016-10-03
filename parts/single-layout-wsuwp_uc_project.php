<?php
/**
 * Single view layout for a "Project" created through University Center Objects.
 *
 * This view is represented as "Team" on nararenewables.org.
 */

if ( spine_has_featured_image() ) {
	$featured_image_src = spine_get_featured_image_src();
	$featured_image_position = get_post_meta( get_the_ID(), '_featured_image_position', true );

	if ( ! $featured_image_position || sanitize_html_class( $featured_image_position ) !== $featured_image_position ) {
		$featured_image_position = '';
	}
	?><figure class="featured-image <?php echo sanitize_html_class( $featured_image_position ); ?>" style="background-image: url('<?php echo esc_url( $featured_image_src ); ?>');"><?php spine_the_featured_image(); ?></figure><?php
}
?>

<section class="row side-right gutter pad-ends">
	<div class="column one">
			<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<header class="article-header">
					<hgroup>
						<h1 class="article-title"><?php the_title(); ?></h1>
					</hgroup>
				</header>

				<div class="article-body">
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'spine' ), 'after' => '</div>' ) ); ?>
				</div>

			</article>
			<?php endwhile; ?>

	</div>
	<div class="column two">
		<h5>Student opportunities</h5>
		<p><a href="<?php echo esc_url( home_url( '/training-opportunities/' ) ); ?>">Find out more about working with NARA</a></p>

		<div class="team-people">
				<h4>Team members</h4>
			<?php

			$team_people = wsuwp_uc_get_object_people( get_the_ID() );

			foreach( $team_people as $team_person ) {
				$team_person = get_post( $team_person['id'] );
				?><div class="team-person">
					<?php if ( has_post_thumbnail( $team_person->ID ) ) : ?>
					<figure>
						<img src="<?php echo esc_url( get_the_post_thumbnail_url( $team_person->ID ) ); ?>" />
					</figure>
					<?php endif; ?>
					<h5><a href="<?php echo esc_url( get_the_permalink( $team_person->ID ) ); ?>"><?php echo esc_html( $team_person->post_title ); ?></a></h5>
				</div><?php
			}

			?>
		</div>

	</div>
</section>
