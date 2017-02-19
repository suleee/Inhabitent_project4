<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<section class="home-hero"></section>

	
</div>
<div class="shopstufftitle">
  <h2> Shop Stuff</h2>
</div>
<div class="taxonomy_loop">

  <?php 
  $taxonomies  = get_terms( array(
   'taxonomy' => 'product_type',
   ) );
   ?> 

   <?php
   foreach ( $taxonomies  as $term ):?>

   <div class="category-links">
    <img src="<?php echo get_template_directory_uri() ?>/images/product-type-icons/<?php echo $term->slug?>.svg" alt="<?php echo $term->slug?> icon">
    <p> <?php echo $term->description ?> </p>

    <a href="product_type/<?php echo $term->slug;?> " class="category-link"> <?php echo $term->name ?> Stuff</a>
  </div>
<?php endforeach; ?>


</div>
<div class="shopstufftitle">
  <h2> Inhabitent Journal</h2>
</div>

 

<?php get_footer(); ?>