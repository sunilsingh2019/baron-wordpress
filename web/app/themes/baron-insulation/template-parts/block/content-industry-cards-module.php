<?php
/**
 * Block Name: Industry Module *
 * This is the template that displays the feature module.*/
// create id attribute for specific styling
$id = 'industry-cards-module-' . $block['id'];

$heading = get_field('heading');
$blurb = get_field('blurb');
$select_industry = get_field('select_industry');
$select_category = get_field('select_category');
$background_theme = get_field('background_theme');
$enable__disable_module = get_field('enable__disable_module');

if($enable__disable_module):

?>
 
<section id="<?php print $id; ?>" class="section indexpert <?php if($background_theme == 'theme-grey'): ?>prodsol<?php endif; ?>">
    <div class="container">
        <h2 class="indexpert__title text-center"><?php echo $heading; ?></h2>
        <p class="text-center"><?php echo $blurb; ?></p>
        <?php if($select_industry) { ?>

        <div class="indexpert__row row">
            <?php if($select_industry) { 
                foreach( $select_industry as $post ): setup_postdata($post); 
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
                        <a href="<?php echo esc_html( $permalink ); ?>" class="btn btn-arrow"><img src="<?php echo get_template_directory_uri();?>/./images/icons/btn-link.svg" alt=""></a>
                    </div>
                </div>
            </div>
            <?php  endforeach; 
            } ?>
        </div>
        <?php } else { ?>
        <div class="indexpert__row row">
        <?php
                    if(!empty($select_category)) {
                        $args =  array(

                            'post_type'         => 'industry',

                            'posts_per_page'    => -1,
                            
                            'order'             => 'DESC',

                            'tax_query' => array(

                                    array(

                                        'taxonomy' => 'industry_category',

                                        'field'    => 'term_id',

                                        'terms'    => $select_category,

                                        'operator' => 'IN'
                                    ),
                                ),
                        );
                    }
                    else {
                        $args =  array(

                            'post_type'         => 'industry',

                            'posts_per_page'    => -1,

                            'order'             => 'DESC',
                            

                            // 'tax_query' => array(
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
                <?php if ( has_post_thumbnail() ) { ?>
                    <div class="indexpert__card-media">
                        <img src="<?php echo esc_url( $thumbnail_url[0] ); ?>" alt="">
                    </div>
                    <?php } ?>
                    <div class="indexpert__card-text">
                        <h4 class="indexpert__card-title color-theme text-uppercase"><?php the_title(); ?></h4>
                        <p><?php echo the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-arrow"><img src="<?php echo get_template_directory_uri();?>/./images/icons/btn-link.svg" alt=""></a>
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