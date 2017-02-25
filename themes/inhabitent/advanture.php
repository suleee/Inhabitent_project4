<?php /* Template Name: singlepage-template */ ?>
<!-- this name is to setup the custom page template -->


<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<section class="advanture_header">
		
        <h1 class="adavanture"> About </h1>

	</section>
    
   <section class="advanture_text">

		<?php echo CFS()->get( 'featuretext' ); ?>
    </section>


<?php get_footer(); ?>