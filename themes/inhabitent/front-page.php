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
          <div class="taxonomy_loop">
              <?php 
              $taxonomies  = get_terms( array(
                'taxonomy' => 'product_type',
                ) );
                ?> 

                <?php
                foreach ( $taxonomies  as $term ):?>
                  <div class="category-wrappper">
                    <img src="<?php echo get_template_directory_uri() ?>/images/product-type-icons/<?php echo $term->slug?>.svg" alt="<?php echo $term->slug?> icon">
                  <p> <?php echo $term->description ?> </p>

                  <a href="product_type/<?php echo $term->name;?> " class="category-link"> <?php echo $term->name ?> Stuff</a>
                  </div>
                <?php endforeach; ?>

          </div>


      
    </div>
    <div class="inhabitent-journal-posts">
      <h2> Inhabitent Journal</h2>
<div class="frontpageposts">
    <?php
    // global $post;
      $args = array( 
        'post_type' => 'post', 
        'order' => 'DSC',
        'posts_per_page' => 3);
      $product_posts = get_posts( $args ); // returns an array of posts
    ?>
    <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
      
      <!--grab from content-sigle.php-->   
      <div class="journal-wrapper">
      <div class="thumbnail-wrapper";>
      <?php the_post_thumbnail( 'large' ); ?>
      </div>
      <div class="journal-text-wrapper">
     
      <div class="entry-meta">
        <?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?>
      </div><!-- .entry-meta -->
      <?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
      <a class="read-more" href="<?php the_permalink(); ?>"> Read more </a>
   </div>
    </div>
    <?php endforeach; wp_reset_postdata(); ?>
    </div>


    </div>
    <div class="latest">
      <h2> Latest Adventures</h2>
    </div>

 </section>

<?php get_footer(); ?>