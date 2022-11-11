<?php
/**
 * Block Name: Free text module *
 * This is the template that displays the feature module.*/
// create id attribute for specific styling
$id = 'free-text-module-' . $block['id'];

$textarea = get_field('text_area');
$heading = get_field('heading');
$enable__disable_module = get_field('enable__disable');
$enable_full_width = get_field('enable_full_width');

if($enable__disable_module): ?>
<section id="<?php print $id; ?>" class="section prod-single">
    <div class="container">
        <div class="<?php if(!empty($enable_full_width)): ?> max-width--1000 <?php endif; ?>">
            <?php if(!empty($heading)): ?>
            <h3 class="techspec__card-title"><?php echo $heading; ?></h3>
            <?php endif; ?>
            <?php echo $textarea; ?>
        </div>
    </div>
</section>
<?php endif;