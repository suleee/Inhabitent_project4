<?php /* Template Name: about */ ?>
<!-- this name is to setup the custom page template -->


<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<section class="about">
		<div class="about_hero_banner">
        <h1 class="about-hero-text"> About </h1>
        </div>
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