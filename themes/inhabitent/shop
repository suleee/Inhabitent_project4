<?php /* Template Name: shop */ ?>
<!-- this name is to setup the custom page template -->


<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<section class="shop">
        <h1 class="shop-text"> Shop stuff </h1>
     
	</section>
    
   <section class="about_text">

		<?php while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
			<?php
				// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>
		<?php endwhile; // End of the loop. ?>
	
    </section>


<?php get_footer(); ?>