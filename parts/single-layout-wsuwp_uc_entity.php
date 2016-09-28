<?php
/**
 * Single view layout for an "Entity" created through University Center Objects.
 *
 * This view is represented as "Organization" on nararenewables.org.
 */
?>
<section class="row single gutter pad-ends">

	<div class="column one">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'articles/post', get_post_type() ) ?>

		<?php endwhile; ?>

	</div><!--/column-->

</section>
