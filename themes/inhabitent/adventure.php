<?php /* Template Name: adventure*/ ?>
<!-- this name is to setup the custom page template -->


<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<section class="adventure_header">
        
</section>
        <div class="adventure_text">
                <h1 class="adavanture"> getting back to nature in a canoe</h1>
		<p><?php red_starter_posted_by(); ?></p>
                <?php echo CFS()->get( 'featuretext' ); ?>
                
        </div>


<?php get_footer(); ?>