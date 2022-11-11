<?php
/**
 * Block Name: product inner header module
 * This is the template that displays the feature module.*/
// create id attribute for specific styling
global $post;
$post_id = get_the_ID();
$id = 'product-inner-header-module-' . $block['id'];
$applications_text = get_field('applications_text');
$product_description = get_field('product_description');
$enable__disable_module = get_field('enable__disable_module');
$enable__disable_back_to_products = get_field('enable__disable_back_to_products');
$thumbnail_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), '', true); 
$request_a_quote = get_field('request_a_quote');
$tds = get_field('tds', $post_id);
$tds_label = get_field('tds_label', $post_id);
$mus = get_field('mus', $post_id);
$mus_label = get_field('mus_label', $post_id);
$brochure = get_field('brochure', $post_id);
$brochure_label = get_field('brochure_label', $post_id);
if($enable__disable_module):
?>
<section id="<?php print $id; ?>" class="section prod-single">
    <div class="container">
        <div class="prod-single__row row">
            <div class="prod-single__col prod-single__col--side">
            <?php if ( has_post_thumbnail() ) { ?>
                <div class="prod-single__media">
                    <img src="<?php echo esc_url( $thumbnail_url[0] ); ?>" alt="">
                </div>
                <?php } ?>
                <div class="prod-single__btns">
                    <?php if(!empty($tds)): ?>
                    <a href="<?php echo $tds['url'] ?>" class="btn" download><?php echo $tds_label; ?></a>
                    <?php endif; ?>
                    <?php if(!empty($mus)): ?>
                    <a href="<?php echo $mus['url'] ?>" class="btn btn-trans" download><?php echo $mus_label; ?></a>
                    <?php endif; ?>
                    <?php if(!empty($brochure) || !empty($brochure_label)): ?>
                    <a href="<?php echo $brochure['url'] ?>" class="btn" download><?php echo $brochure_label; ?></a>
                    <?php endif; ?>
                    <?php if(!empty($request_a_quote)): ?>
                    <a target="<?php echo $request_a_quote['target'] ?>" href="<?php echo $request_a_quote['url'] ?>" class="btn btn-trans"><?php echo $request_a_quote['title'] ?></a>
                    <?php endif; ?>
                    
                </div>
                <?php if(!empty($applications_text)): ?>
                <div class="prod-single__app">
                    <h4 class="prod-single__subtitle">Applications</h4>
                    <p><?php echo $applications_text; ?></p>
                </div>
                <?php endif; ?>
            </div>
            <div class="prod-single__col prod-single__col--main">
                <div class="prod-single__header">
                    <?php if($enable__disable_back_to_products): ?>
                    <a href="javascript:history.back()" class="btn btn-trans btn-trans-black">Back to products</a>
                    <?php endif; ?>
                    <h2 class="prod-single__title"><?php the_title(); ?></h2>
                    <p><?php the_excerpt(); ?></p>
                </div>
                <?php if(!empty($product_description)): ?>
                <div class="prod-single__body">
                    <h4 class="prod-single__subtitle">Product description</h4>
                   <?php echo $product_description; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php endif;