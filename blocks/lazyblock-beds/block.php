<section class="beds">
    <div class="container">

    <h2 class="section-title">
        polecane łóżka
    </h2>
       
 <?php       
    
// Here set your product category SLUG (can be multiple coma separated)
$product_categories = array('lozka');

$query = new WP_Query( array(
    'post_type' => 'product',
    'post__in'            => wc_get_featured_product_ids(),
    'post_status' => 'publish',
    'posts_per_page' => 3,
    
    'tax_query' => array( array(
        'taxonomy' => 'product_cat',
        'field'    => 'slug',
        'featured' => true,
        'terms'    => $product_categories,
        'operator' => 'IN',
    ) )
) );


?>
<div class="beds__boxes">
<?php while ( $query->have_posts() ) : $query->the_post(); ?>
<?php $product = wc_get_product( get_the_ID() ); ?>
     <a href="<?php the_permalink(); ?>" class="beds__box">
        <img src="<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>" alt="<?php echo get_post_meta( $product->get_image_id(), '_wp_attachment_image_alt', true ); ?>" class="beds__img">
  <div class="beds__texts">
  <h3 class="beds__title">
             
             <?php the_title(); ?>
             
        </h3>
          <p class="beds__price">
          <?php echo $product->get_price_html(); ?>
          </p>
          <button class="beds__link">szczegóły</button>
  </div>
    </a>
     <?php endwhile;?>
</div>
    </div>
    
    
    </div>
</section>
