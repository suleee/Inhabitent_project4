<?php
/**
* The template for displaying all single posts (shop).
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

                    </div>

                    <div class="entry-content">
                    <p class="product_price"><?php echo CFS()->get( 'cost' ); ?></p>
                        <?php the_content(); ?>
                        <?php
                        wp_link_pages( array(
                        'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
                        'after'  => '</div>',
                        ) );
                        ?>
                    </div><!-- .entry-content -->
                    <footer class="social-icon">
                        <?php red_starter_entry_footer(); ?>
                        <div class="social-media-wrapper">
                            <a class="social-media"><i class="fa fa-facebook" aria-hidden="true"></i> Like</a>
                            <a class="social-media"><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</a>
                            <a class="social-media"><i class="fa fa-pinterest" aria-hidden="true"></i> Pin</a>
                        </div>
                    </footer>
                </div>
            <?php endif; ?>


            </div>
        </article>
    <?php endwhile; // End of the loop. ?>


</main><!-- #main -->

</div><!-- #primary -->



<?php get_footer(); ?>
