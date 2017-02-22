<?php /* Template Name: singlepage-template */ ?>
<!-- this name is to setup the custom page template -->


<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<section class="about_header">
		
        <h1 class="about-hero-text"> About </h1>
		<!--about_hero_banner();-->
	</section>
    
   <section class="about_text">
		<h2> Our story</h2>
		<?php echo CFS()->get( 'about_our_story' ); ?>

		<h2> Our Team</h2>
		<?php echo CFS()->get( 'about_our_team' ); ?>
    </section>


<?php get_footer(); ?>