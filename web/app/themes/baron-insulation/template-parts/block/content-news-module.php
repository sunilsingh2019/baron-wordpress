
<?php
/**
 * Block Name: News Module *
 * This is the template that displays the feature module.*/
// create id attribute for specific styling
$id = 'news-module-' . $block['id'];
$select_news_category = get_field('select_news_category');
$enable__disable_module = get_field('enable__disable_module');

if($enable__disable_module):

?>

<section id="<?php print $id; ?>" class="section news-cont">
    <div class="container">
        <div class="news-cont__cards">
            <?php
            $our_current_page = get_query_var( 'paged' );

            if(!empty($select_category)) {
                $args =  array(

                    'post_type'         => 'post',

                    'posts_per_page'    => -1,
                    
                    'order'             => 'DESC',
                    'paged'                  => $our_current_page,


                    'tax_query' => array(

                            array(

                                'taxonomy' => 'category',

                                'field'    => 'term_id',

                                'terms'    => $select_news_category,

                                'operator' => 'IN'
                            ),
                        ),
                );
            }
            else {
                $args =  array(

                    'post_type'         => 'post',

                    'posts_per_page'    => 10,

                    'order'             => 'DESC',

                    'paged'                  => $our_current_page,

                
                    // 'tax_query' => array(
                );
            }
                
            $loop = new WP_Query($args );
            while ( $loop->have_posts() ) : $loop->the_post(); 
            $thumbnail_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), '', true); 

            $post_id = get_the_ID();
            $excerpt = get_field('excerpt', $post_id);
            ?>
            <div class="news-cont__card">
                <div class="news-cont__card-media">
                    <img src="<?php echo esc_url( $thumbnail_url[0] ); ?>"
                        alt="">
                </div>
                <div class="news-cont__card-text">
                    <h3 class="news-cont__card-title"><?php the_title(); ?></h3>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="news-cont__card-btn btn btn-trans btn-trans-black">Read more</a>
                </div>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); 
               baron_insulation_custom_pagination( $loop );
               ?>
        </div>
    </div>
</section>
<?php endif; 