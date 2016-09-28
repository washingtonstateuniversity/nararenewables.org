<?php
/**
 * Single view layout for a "Project" created through University Center Objects.
 *
 * This view is represented as "Team" on nararenewables.org.
 */

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
		<p><a href="http://stage.nara.wsu.edu/training-opportunities/">Find out more about working with NARA</a></p>
		<h4>Team members</h4>
		<div class="team-people">
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
				<?php
			}

			?>
		</div>

	</div>
</section>
