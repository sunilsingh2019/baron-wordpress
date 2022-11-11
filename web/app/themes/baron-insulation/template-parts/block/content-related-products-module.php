<?php
/**
 * Block Name: Related Product Module
 * This is the template that displays the feature module.*/
// create id attribute for specific styling
$id = 'related-product-module-' . $block['id'];
$heading = get_field('heading');
$select_product = get_field('select_product');
$enable__disable_module = get_field('enable__disable_module');
$enable__disable_back_to_products = get_field('enable__disable_back_to_products');
$thumbnail_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), '', true); 
if($enable__disable_module):
?>
<section id="<?php print $id; ?>" class="section indexpert">
    <div class="container">
        <h2 class="indexpert__title text-center"><?php echo $heading; ?></h2>
        <?php if($select_product) { ?>
        <div class="indexpert__row row">
        <?php 
            foreach( $select_product as $post ): setup_postdata($post); 
            $title = get_the_title( $post->ID );
            $permalink = get_the_permalink( $post->ID );
            $excerpt = get_the_excerpt( $post->ID );
            $featured_img_url = get_post_thumbnail_id( $post->ID ); ?>
            <div class="indexpert__col col-lg-4">
                <div class="indexpert__card">
                    <div class="indexpert__card-media">
                        <img src="<?php echo wp_get_attachment_image_url( $featured_img_url); ?>" alt="">
                    </div>
                    <div class="indexpert__card-text">
                        <h4 class="indexpert__card-title color-theme text-uppercase"><?php echo esc_html( $title ); ?></h4>
                        <p><?php echo esc_html( $excerpt ); ?></p>
                        <a href="<?php echo esc_html( $permalink ); ?>" class="btn btn-arrow"></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>    
        </div>
        <?php } else { ?>
        <div class="indexpert__row row">
        <?php
        
            $args =  array(

                'post_type'         => 'product',

                'posts_per_page'    => 3,

                'order'             => 'DESC',
                
            );
        
        $loop = new WP_Query($args );
        while ( $loop->have_posts() ) : $loop->the_post(); 
        $thumbnail_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), '', true); 
        $post_id = get_the_ID();
        $excerpt = get_field('excerpt', $post_id);
        ?>
            <div class="indexpert__col col-lg-4">
                <div class="indexpert__card">
                    <div class="indexpert__card-media">
                        <img src="<?php echo esc_url( $thumbnail_url[0] ); ?>" alt="">
                    </div>
                    <div class="indexpert__card-text">
                        <h4 class="indexpert__card-title color-theme text-uppercase"><?php the_title(); ?></h4>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php  the_permalink(); ?>" class="btn btn-arrow"></a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <?php } ?>
    </div>
</section>
<?php endif;