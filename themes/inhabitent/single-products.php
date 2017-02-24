<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area ">
	<main id="main" class="site-main" role="main">


		<?php while ( have_posts() ) : the_post(); ?>

			
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<div class="entry-header">
					
						<?php if ( has_post_thumbnail() ) : ?>
                                <div class="single-product-image">
                                <?php the_post_thumbnail( ); ?>
                                </div>
                                <div class="single-product-page">
                                <div class="single-product-content">
                                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

                                </div><!-- .entry-header -->

                                <div class="entry-content">
                                <p class="product_price"><?php echo CFS()->get( 'cost' ); ?>	</p>
                                <?php the_content(); ?>
                                <?php
                                wp_link_pages( array(
                                'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
                                'after'  => '</div>',
                                ) );
                                ?>
                                </div><!-- .entry-content -->
                            <?php endif; ?>
						</div>
					</div>
				</article>


			<?php endwhile; // End of the loop. ?>


		</main><!-- #main -->

	</div><!-- #primary -->



	<?php get_footer(); ?>
