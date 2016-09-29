<section class="row side-right gutter pad-ends">

	<div class="column one">
<h1>Members</h1>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php
			/**
			 * Single view layout for an "Entity" created through University Center Objects.
			 *
			 * This view is represented as "Organization" on nararenewables.org.
			 */
			?>
			<section class="row single gutter pad-ends">

				<div class="column one">

						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<?php

							if ( has_post_thumbnail() ) {
								?><figure class="article-thumbnail"><?php the_post_thumbnail( 'spine-small_size' ); ?></figure><?php
							}

							?>

							<header class="article-header">
								<hgroup>
									<h2 class="article-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
								</hgroup>
							</header>

							<div class="article-content">
								<?php the_content(); ?>
							</div>

						</article>


				</div><!--/column-->

			</section>


		<?php endwhile; // end of the loop. ?>

	</div><!--/column-->
	<div class="column two">
	</div>
</section>
