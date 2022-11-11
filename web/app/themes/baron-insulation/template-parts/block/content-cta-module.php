<?php
/**
 * Block Name: Industry Module *
 * This is the template that displays the feature module.*/
// create id attribute for specific styling
$id = 'cta-module-' . $block['id'];

$textarea = get_field('blurb');
$links = get_field('links');
$background_theme = get_field('background_theme');
$enable__disable_module = get_field('enable__disable_module');
$change_fonts = get_field('change_fonts');
if($enable__disable_module):
?>

<section id="<?php print $id; ?>" class="section cta-quote <?php if($background_theme == 'theme-grey'): ?>prodsol<?php endif; ?>">
    <?php if($background_theme == 'theme-patterned'): ?>
    <div class="section-bg">
        <img src="<?php echo get_template_directory_uri();?>/./images/whychoose-bg.png" alt="">
    </div>
    <?php endif; ?>
    <div class="container">
        <h3 class="cta-quote__title" <?php if($change_fonts): ?> style="font-size: 26px;"<?php endif; ?>><?php echo $textarea; ?></h3>
        <?php if(!empty($links)): ?>
        <a target="<?php echo $links['target'] ?>" href="<?php echo $links['url'] ?>" class="btn"><?php echo $links['title'] ?></a>
        <?php endif; ?>
    </div>
</section>

<?php endif;