<?php
/**
 * Single view layout for an "Entity" created through University Center Objects.
 *
 * This view is represented as "Organization" on nararenewables.org.
 */
?>
<section class="row side-left gutter pad-ends">

	<div class="column one">

		<?php while ( have_posts() ) : the_post(); ?>

				<?php

				if ( has_post_thumbnail() ) {
					?><figure class="article-thumbnail"><?php the_post_thumbnail( 'spine-small_size' ); ?></figure><?php
				}

				?>

	</div><!--/column-->
	<div class="column two">
	<?php get_template_part( 'articles/post', get_post_type() ) ?>
	</div>
		<?php endwhile; ?>



</section>
