<?php
/**
* The template for displaying front-page.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<section class="front-page">
  <div class ="home-hero"></div>
    <div class="shopstufftitle">
      <h2> Shop Stuff</h2>
          <div class="taxonomy_loop">
          <?php $taxonomies  = get_terms( array(
          'taxonomy' => 'product_type',
          ) );?>

        <?php foreach ( $taxonomies  as $term ):?>
        <div class="category-wrappper">
          <img src="<?php echo get_template_directory_uri() ?>/images/product-type-icons/<?php echo $term->slug?>.svg" alt="<?php echo $term->slug?> icon">
            <p> <?php echo $term->description ?> </p>

          <p class="stuff"><a href="product_type/<?php echo $term->name;?> " class="category-link"> <?php echo $term->name ?> Stuff</a>
          </p>
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
        <div class="thumbnail-wrapper">
        <?php the_post_thumbnail( 'large' ); ?>
        </div>
        <div class="journal-text-wrapper">

        <div class="entry-meta">
        <?php red_starter_posted_on(); ?> / <?php comments_number(); ?></div><!-- .entry-meta -->
        <a class="journal-title" href="<?php the_permalink(); ?>"><?php the_title( '<h3 class="entry-title">', '</h3>' ); ?></a>

        <a class="read-more" href="<?php the_permalink(); ?>"> Read Entry </a>
        </div>
        </div>
        <?php endforeach; wp_reset_postdata(); ?>
      </div>
  </div>

  <div class="adventure">
      <h2> Latest Adventures</h2>
        <?php
        $arguements = array(
        'post_type' => 'adventure',
        'order' => 'ASC',
        'taxonomy' => 'adventure');
        $adventures = get_posts( $arguements)  // returns an array of posts
        ?>
        <ul class="adventure-container">

        <?php foreach ( $adventures as $adventure ) : setup_postdata( $adventure );?>

        <li class="adventure-image" >
        <div class="adventure-wrapper">
        <?php echo get_the_post_thumbnail($adventure) ?>
        <div class="adventure-info">
         <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
         <a class="read-more" href="<?php echo get_permalink($adventure); ?>"> Read Entry </a>
       </div>
        </div>
        </li>
        <?php endforeach; wp_reset_postdata(); ?>
        </ul>

        <p class="see-more"><a href="<?php echo get_post_type_archive_link('adventure'); ?>">more adventure</a></p>

</div>
</section>

<?php get_footer(); ?>
