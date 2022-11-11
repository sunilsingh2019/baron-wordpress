<?php


add_action( 'wp_ajax_nopriv_filter', 'filter_ajax' );
add_action( 'wp_ajax_filter', 'filter_ajax' );

function filter_ajax() {
  
   
    $product_category = $_POST['product-category'];
    $application_category = $_POST['application-category'];
   

    $args = array(
    'post_type'        	=> 'product',
    'post_per_page'    => -1,
    
    );

   if(!empty($product_category)) {
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'product_category',
            'field'    => 'term_id',
            'terms'    => $product_category
        )
        );
   }
   if(!empty($application_category)) {
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'application_category',
            'field'    => 'term_id',
            'terms'    => $application_category
        )
        );
   }



global $product;
$loop = new WP_Query($args );
if ( $loop->have_posts() ) {
while ( $loop->have_posts() ) : $loop->the_post(); 
$thumbnail_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), '', true); 
// $terms = get_the_terms( $post->ID, 'list_resource_category' );

?>
<div class="product__col col-lg-4 col-md-6">
    <div class="product__card">
        <div class="product__card-media">
            <img src="<?php echo esc_url( $thumbnail_url[0] ); ?>" alt="">
        </div>
        <div class="product__card-text">
            <h5 class="product__card-title"><?php the_title(); ?></h5>
            <p><?php the_excerpt();  ?></p>
            <a href="<?php the_permalink(); ?>" class="btn btn-gray-dark">More info</a>
        </div>
    </div>
</div>
<?php endwhile; 
}  else {  
?>
 <div class="product__col col-lg-4 col-md-6">
    <div class="product__card">
        <div class="product__card-text">
            <h5 class="product__card-title">0 product found</h5>
        </div>
    </div>
</div>
<?php } 
 die();
 
}