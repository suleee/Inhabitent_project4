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
        
                <?php $term = get_queried_object(); ?>
                    <h1><?php echo $term -> name; ?> </h1>
                        <?php the_archive_description( '<div class="taxonomy-description">', '</div>' );?>

        

            </header><!-- .page-header -->
            <!--<?php /* Start the Loop */ ?>-->
                
                
            <div class="product-posts">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="posts">
                        <div class="thumbnail-wrapper">
                            <a href = "<?php the_permalink(); ?> " rel="bookmark"><?php the_post_thumbnail( 'large' ); ?></a>
                        </div>

                        <div class="title">
                            <?php the_title(); ?>
                            <?php echo CFS()->get( 'cost' ); ?>
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
