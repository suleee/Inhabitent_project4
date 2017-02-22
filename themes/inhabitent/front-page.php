<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<section class="front-page">
    <div class ="home-hero"></div>
    <div class="shopstufftitle">
      <h2> Shop Stuff</h2>
    </div>
    <div class="shopstufftitle">
      <h2> Inhabitent Journal</h2>

    <?php
    // global $post;
      $args = array( 
        'post_type' => 'post', 
        'order' => 'ASC',
        'posts_per_page' => 3);
      $product_posts = get_posts( $args ); // returns an array of posts
    ?>
    <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
      
      <!--grab from content-sigle.php-->   
      <?php the_post_thumbnail( 'thumbnail' ); ?>
      <?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
      <div class="entry-meta">
        <?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?>
      </div><!-- .entry-meta -->
      
      <div><a class="read-more" href="<?php the_permalink(); ?>"> Read more &#8594 </a></div>
    <?php endforeach; wp_reset_postdata(); ?>



    </div>
    <div class="shopstufftitle">
      <h2> Latest Adventures</h2>
    </div>

 </section>

<?php get_footer(); ?>