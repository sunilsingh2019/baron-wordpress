<?php
/**
 * Block Name: Technical product info module *
 * This is the template that displays the feature module.*/
// create id attribute for specific styling
$id = 'technical-product-info-module-' . $block['id'];

$textarea = get_field('text_area');
$heading = get_field('heading');
$enable__disable_module = get_field('enable__disable_module');
global $post;
if($enable__disable_module):
   
?>

<section id="<?php print $id; ?>" class="section technical-info">
    <div class="container">
        <div class="product--search max-width--800 mx-auto pb-20">
            <form>
                <div class="formfield">
                    <input type="text" name="frmName" placeholder="Search by Product or Code">
                </div>
            </form>
        </div>
        <div class="accordion-items">
       <?php  
            $args =  array(

                'post_type'         => 'product',
        
                'posts_per_page'    => -1,
        
                'post_status'       => 'publish',
        
                'order'             => 'DESC',
        
            );
            $loop = new WP_Query($args );
           
            if ( $loop->have_posts() ) : ?>
            
            <div class="accordion-inner  product__card-media">
                <div class="accordion-heading">
                    <h3>Brochures</h3>
                </div>
                <div class="accordion-content">
                    <ul>
                        <?php while ( $loop->have_posts() ): $loop->the_post(); 
                            $post_id = get_the_ID();
                            $brochure = get_field('brochure', $post_id);
                            $brochure_label = get_field('brochure_label', $post_id); 
                            if(!empty($brochure)):  ?>
                            <li><a href="<?php echo $brochure['url'] ?>" download><?php echo $brochure_label; ?></a></li>
                            <?php endif; ?>
                        <?php  endwhile; ?>
                    </ul>
                </div>
            </div>
            <?php endif; 
            if ( $loop->have_posts() ) : ?>
            
            <div class="accordion-inner  product__card-media">
                <div class="accordion-heading">
                    <h3>MUS</h3>
                </div>
                <div class="accordion-content">
                    <ul>
                        <?php while ( $loop->have_posts() ): $loop->the_post(); 
                            $post_id = get_the_ID();
                            $mus = get_field('mus', $post_id);
                            $mus_label = get_field('mus_label', $post_id); 
                            if(!empty($mus)):  ?>
                            <li><a href="<?php echo $mus['url'] ?>" download><?php echo $mus_label; ?></a></li>
                            <?php endif; ?>
                        <?php  endwhile; ?>
                    </ul>
                </div>
            </div>
            <?php endif; 
            if ( $loop->have_posts() ) : ?>
            
            <div class="accordion-inner  product__card-media">
                <div class="accordion-heading">
                    <h3>Datasheets</h3>
                </div>
                <div class="accordion-content">
                    <ul>
                        <?php while ( $loop->have_posts() ): $loop->the_post(); 
                            $post_id = get_the_ID();
                            $tds = get_field('tds', $post_id);
                            $tds_label = get_field('tds_label', $post_id); 
                            if(!empty($tds)):  ?>
                            <li><a href="<?php echo $tds['url'] ?>" download><?php echo $tds_label; ?></a></li>
                            <?php endif; ?>
                        <?php  endwhile; ?>
                    </ul>
                </div>
            </div>
            <?php endif; ?>
           

        </div>
        
    </div>
</section>


<?php endif;