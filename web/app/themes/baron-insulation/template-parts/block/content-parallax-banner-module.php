

<?php
/**
 * Block Name: Parallax banner Module 
 * This is the template that displays the feature module.
 */
// create id attribute for specific styling
$id = 'parallax-banner-module-' . $block['id'];

$background_image = get_field('background_image');
$enable__disable_module = get_field('enable__disable_module');
if($enable__disable_module): ?>
<section id="<?php print $id; ?>" class="section cta-quote-img py-0">
    <img src="<?php echo $background_image['url'] ?>" alt="<?php echo $background_image['title'] ?>" class="img-parallax" data-speed="1.1">
</section>
<?php endif;