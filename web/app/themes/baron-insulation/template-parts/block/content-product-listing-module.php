<?php
/**
 * Block Name: Industry Module 
 * This is the template that displays the feature module.*/
// create id attribute for specific styling.
$id = 'product-listing-module-' . $block['id'];

$heading = get_field('heading');
$select_product_category = get_field('select_product_category');
$select_application_category = get_field('select_application_category');
$enable__disable_module = get_field('enable__disable_module');
$column_layouts = get_field('column_layouts');
if($enable__disable_module): 

if($column_layouts == 'one-column') { ?>
<section id="<?php print $id; ?>" class="section prod-diff">
    <div class="container">
        <h2 class="prod-diff__title"><?php echo $heading; ?></h2>
        <div class="prod-diff__cards">
        <?php
            if(!empty($select_product_category)) {
                $args =  array(

                    'post_type'         => 'product',

                    'posts_per_page'    => -1,
                    
                    'order'             => 'DESC',

                    'tax_query' => array(

                            array(

                                'taxonomy' => 'product_category',

                                'field'    => 'term_id',

                                'terms'    => $select_product_category,

                                'operator' => 'IN'
                            ),
                        ),
                );
            } else {
                $args =  array(

                    'post_type'         => 'product',

                    'posts_per_page'    => -1,
                    
                    'order'             => 'DESC',

                    'tax_query' => array(

                            array(

                                'taxonomy' => 'application_category',

                                'field'    => 'term_id',

                                'terms'    => $select_application_category,

                                'operator' => 'IN'
                            ),
                        ),
                );
            } 
            $loop = new WP_Query($args );
            while ( $loop->have_posts() ) : $loop->the_post(); 
            $thumbnail_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), '', true); 
            $post_id = get_the_ID();
            $excerpt = get_field('excerpt', $post_id); ?>
            <div class="prod-diff__card">
                <div class="prod-diff__card-media">
                    <img src="<?php echo esc_url( $thumbnail_url[0] ); ?>" alt="">
                </div>
                <div class="prod-diff__card-text">
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-gray-dark">More info</a>
                    
                </div>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<?php } elseif($column_layouts == 'two-column') { ?>
<section id="<?php print $id; ?>" class="section prod-cat">
    <div class="container">
        <div class="prod-cat__body">
            <h2 class="text-center"><?php echo $heading; ?></h2>
            <div class="prod-cat__row row">
            <?php
                if(!empty($select_product_category)) {
                    $args =  array(

                        'post_type'         => 'product',

                        'posts_per_page'    => -1,
                        
                        'order'             => 'DESC',

                        'tax_query' => array(

                                array(

                                    'taxonomy' => 'product_category',

                                    'field'    => 'term_id',

                                    'terms'    => $select_product_category,

                                    'operator' => 'IN'
                                ),
                            ),
                    );
                } else {
                    $args =  array(

                        'post_type'         => 'product',

                        'posts_per_page'    => -1,
                        
                        'order'             => 'DESC',

                        'tax_query' => array(

                                array(

                                    'taxonomy' => 'application_category',

                                    'field'    => 'term_id',

                                    'terms'    => $select_application_category,

                                    'operator' => 'IN'
                                ),
                            ),
                    );
                } 
                $loop = new WP_Query($args );
                while ( $loop->have_posts() ) : $loop->the_post(); 
                $thumbnail_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), '', true); 
                $post_id = get_the_ID();
                $excerpt = get_field('excerpt', $post_id);
                ?>
                <div class="prod-cat__col col-md-6">
                    <div class="prod-cat__card">
                        <div class="prod-cat__card-media">
                            <img src="<?php echo esc_url( $thumbnail_url[0] ); ?>" alt="">
                        </div>
                        <h4 class="prod-cat__card-title"><?php the_title(); ?></h4>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-gray-dark">More info</a>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</section>
<?php } elseif($column_layouts == 'three-column') { ?>
<section id="<?php print $id; ?>" class="section indexpert">
    <div class="container">
        <h2 class="indexpert__title text-center"><?php echo $heading; ?></h2>
        <div class="indexpert__row row">
        <?php
                if(!empty($select_product_category)) {
                    $args =  array(

                        'post_type'         => 'product',

                        'posts_per_page'    => -1,
                        
                        'order'             => 'DESC',

                        'tax_query' => array(

                                array(

                                    'taxonomy' => 'product_category',

                                    'field'    => 'term_id',

                                    'terms'    => $select_product_category,

                                    'operator' => 'IN'
                                ),
                            ),
                    );
                } else {
                    $args =  array(

                        'post_type'         => 'product',

                        'posts_per_page'    => -1,
                        
                        'order'             => 'DESC',

                        'tax_query' => array(

                                array(

                                    'taxonomy' => 'application_category',

                                    'field'    => 'term_id',

                                    'terms'    => $select_application_category,

                                    'operator' => 'IN'
                                ),
                            ),
                    );
                } 
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
                        <a href="<?php the_permalink(); ?>" class="btn btn-arrow"></a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <div class="indexpert__footer text-center mt-4">
            <a href="#" class="btn">See more</a>
        </div>
    </div>
</section>
<?php } ?>
<?php endif;