
<?php
/**
 * Block Name: Application Module 
 * This is the template that displays the feature module.
 */
// create id attribute for specific styling
$id = 'application-cards-module-' . $block['id'];

$cards_layouts = get_field('cards_layouts');
$overlap_module = get_field('overlap_module');
$background_theme = get_field('background_theme');
$select_applications = get_field('select_applications');
$heading = get_field('heading');
$enable__disable_module = get_field('enable__disable_module');
$extend_padding_bottom = get_field('extend_padding_bottom');
if($enable__disable_module):
if( $cards_layouts == 'one-column' ) {
?>

<section id="<?php print $id; ?>" class="section indserve <?php if($background_theme == 'theme-grey'): ?>prodsol<?php endif; ?>">
    <div class="container">
        <div class="indserve__box">
            <?php if($heading): ?>
            <h2 class="indserve__box-title text-center"><?php echo $heading ?></h2>
            <?php endif; ?>
            <div class="indserve__cards">
            <?php if($select_applications){ 
                 foreach( $select_applications as $post ): setup_postdata($post); 
                    $title = get_the_title( $post->ID );
                    $excerpt = get_the_excerpt( $post->ID );
                    $permalink = get_the_permalink( $post->ID );
                    $featured_img_url = get_post_thumbnail_id( $post->ID );
                ?>
                <div class="indserve__card">
                    <?php if($featured_img_url): ?>
                    <div class="indserve__card-icon">
                        <img src="<?php echo wp_get_attachment_image_url( $featured_img_url); ?>" alt="">
                    </div>
                    <?php endif; ?>
                    <div class="indserve__card-text">
                        <h3 class="indserve__card-title"><?php echo esc_html( $title ); ?></h3>
                        <p><?php echo esc_html( $excerpt ); ?></p>
                        <a href="<?php echo esc_html( $permalink ); ?>" class="btn btn-arrow indserve__card-btn">
                        <img src="<?php echo get_template_directory_uri();?>/./images/icons/btn-link.svg" alt=""></a>
                    </div>
                </div>
                <?php  endforeach; ?>
                <?php } else { 
                    $args =  array(

                        'post_type'         => 'application',

                        'posts_per_page'    => 4,

                        'post_status'       => 'publish',

                        'order'             => 'DESC',
                        
                        
                    );
                    $loop = new WP_Query($args );
                    while ( $loop->have_posts() ) : $loop->the_post(); 
                    $title = get_the_title();
                    $excerpt = get_the_excerpt();
                    $permalink = get_the_permalink();
                    $featured_img_url = get_post_thumbnail_id();
                    
                    ?>
                <div class="indserve__card">
                    <div class="indserve__card-icon">
                        <img src="<?php echo wp_get_attachment_image_url( $featured_img_url); ?>" alt="">
                    </div>
                    <div class="indserve__card-text">
                        <h3 class="indserve__card-title"><?php echo esc_html( $title ); ?></h3>
                        <p><?php echo esc_html( $excerpt ); ?></p>
                        <a href="<?php echo esc_html( $permalink ); ?>" class="btn btn-arrow indserve__card-btn"><img
                                src="<?php echo get_template_directory_uri();?>/./images/icons/btn-link.svg" alt=""></a>
                    </div>
                </div>
                <?php endwhile;
            }
                 wp_reset_postdata(); 
                
                ?>
            </div>
        </div>
    </div>
</section>

<?php
 } elseif ($cards_layouts == 'two-column') {  ?>

<section id="<?php print $id; ?>" class="section dynamic <?php if($background_theme == 'theme-grey'): ?>prodsol<?php endif; ?>"
<?php if($extend_padding_bottom): ?> style="padding: 50px 0 <?php echo $extend_padding_bottom; ?>px !important;" <?php endif; ?>>

    <div class="container">
    
            <?php if($heading): ?>
            <h2 class="prodsol__title text-center"><?php echo $heading ?></h2>
            <?php endif; ?>
        <div class="prodsol__row row">
        <?php if($select_applications){ 
                foreach( $select_applications as $post ): setup_postdata($post); 
                $title = get_the_title( $post->ID );
                $excerpt = get_the_excerpt( $post->ID );
                $permalink = get_the_permalink( $post->ID );
                $featured_img_url = get_post_thumbnail_id( $post->ID );


            ?>
            <div class="prodsol__col col-lg-6">
                <div class="prodsol__card">
                    <div class="prodsol__card-header">
                        <img src="<?php echo wp_get_attachment_image_url( $featured_img_url); ?>" alt="" class="prodsol__card-icon">
                        <h3 class="prodsol__card-title"><?php echo esc_html( $title ); ?></h3>
                    </div>
                    <p><?php echo esc_html( $excerpt ); ?></p>
                    <a href="#" class="btn btn-arrow"><img src="<?php echo get_template_directory_uri();?>/./images/icons/btn-link.svg" alt=""></a>
                </div>
            </div>
            <?php  endforeach; ?>
                <?php } else { 
                    $args =  array(

                        'post_type'         => 'application',

                        'posts_per_page'    => 4,

                        'post_status'       => 'publish',

                        'order'             => 'DESC',
                        
                        
                    );
                    $loop = new WP_Query($args );
                    while ( $loop->have_posts() ) : $loop->the_post(); 
                    $title = get_the_title();
                    $excerpt = get_the_excerpt();
                    $permalink = get_the_permalink();
                    $featured_img_url = get_post_thumbnail_id();
                    
                    ?>
            <div class="prodsol__col col-lg-6">
                <div class="prodsol__card">
                    <div class="prodsol__card-header">
                        <img src="<?php echo wp_get_attachment_image_url( $featured_img_url); ?>" alt=""
                            class="prodsol__card-icon">
                        <h3 class="prodsol__card-title"><?php echo esc_html( $title ); ?></h3>
                    </div>
                    <p><?php echo esc_html( $excerpt ); ?></p>
                    <a href="<?php echo esc_html( $permalink ); ?>" class="btn btn-arrow"><img src="<?php echo get_template_directory_uri();?>/./images/icons/btn-link.svg" alt=""></a>
                </div>
            </div>
            <?php endwhile;
            }
                 wp_reset_postdata(); 
                
                ?>
        </div>
    </div>
</section>

<?php } elseif ($cards_layouts == 'three-column') {  ?>

<section id="<?php print $id; ?>" class="section techspec <?php if($background_theme == 'theme-grey'): ?>prodsol<?php endif; ?>" 
<?php if($extend_padding_bottom): ?> style="padding: 50px 0 <?php echo $extend_padding_bottom; ?>px !important;" <?php endif; ?>>
   
    <div class="container">
        <div class="techspec__header text-center">
            <?php if($heading): ?>
            <h2 class="techspec__title text-center"><?php echo $heading ?></h2>
            <?php endif; ?>
        </div>
        <div class="techspec__row row">
        <?php if($select_applications){ 
                foreach( $select_applications as $post ): setup_postdata($post); 
                $title = get_the_title( $post->ID );
                $excerpt = get_the_excerpt( $post->ID );
                $permalink = get_the_permalink( $post->ID );
                $featured_img_url = get_post_thumbnail_id( $post->ID );
            ?>
            <div class="techspec__col col-lg-4">
                <div class="techspec__card">
                    <img src="<?php echo wp_get_attachment_image_url( $featured_img_url); ?>" alt=""
                        class="techspec__card-icon">
                    <h3 class="techspec__card-title"><?php echo esc_html( $title ); ?></h3>
                    <p><?php echo esc_html( $excerpt ); ?></p>
                    <a href="<?php echo esc_html( $permalink ); ?>" class="btn btn-arrow"><img src="<?php echo get_template_directory_uri();?>/./images/icons/btn-link.svg" alt=""></a>
                </div>
            </div>
            <?php endforeach; ?>
            <?php } else { 
                $args =  array(

                    'post_type'         => 'application',

                    'posts_per_page'    => 6,

                    'post_status'       => 'publish',

                    'order'             => 'DESC',
                    
                    
                );
                $loop = new WP_Query($args );
                while ( $loop->have_posts() ) : $loop->the_post(); 
                $title = get_the_title();
                $excerpt = get_the_excerpt();
                $permalink = get_the_permalink();
                $featured_img_url = get_post_thumbnail_id();
                
                ?>
            <div class="techspec__col col-lg-4">
                <div class="techspec__card">
                    <img src="<?php echo wp_get_attachment_image_url( $featured_img_url); ?>" alt="" class="techspec__card-icon">
                    <h3 class="techspec__card-title text-uppercase"><?php echo esc_html( $title ); ?></h3>
                    <p><?php echo esc_html( $excerpt ); ?></p>
                    <a href="<?php echo esc_html( $permalink ); ?>" class="btn btn-arrow"><img src="<?php echo get_template_directory_uri();?>/./images/icons/btn-link.svg" alt=""></a>
                </div>
            </div>
            <?php endwhile;
            }
                 wp_reset_postdata(); 
                
                ?>
        </div>
    </div>
</section>

<?php } endif; 