<?php
/**
 * The template for displaying archive for the products post type (shop page).
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<?php

			function archive_product_title( $title ) {
			if(is_post_type_archive('adventure')){
				$title = 'Latest Adventures';
				}
				return $title;
				}
				add_filter('get_the_archive_title', 'archive_product_title');
				the_archive_title( '<h1 class="page-title shopstuff">', '</h1>' );


				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
			</header><!-- .page-header -->

			<div class="product-posts">

				<?php while ( have_posts() ) : the_post(); ?>

					<div class="posts">
						<div class="thumbnail-wrapper">
						<div class="posts-title"><a class="adventure-title" href = "<?php the_permalink(); ?> " rel="bookmark"><?php the_title( ); ?></a> <a class="read-more" href = "<?php the_permalink(); ?> " rel="bookmark"> read more </a>
						</div>
							<div class="adventure-thumbnail"><?php the_post_thumbnail( ); ?></div>

						</div>

					</div>
				<?php endwhile; ?>
			</div>
			<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
