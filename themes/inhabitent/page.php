<?php
/**
 * The template for displaying page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class="side_bar_enabler">
<div id="primary" class="content-area , single-journal">
	<main id="main" class="site-main, single-journalpost" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'page' ); ?>


			<?php
				// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
