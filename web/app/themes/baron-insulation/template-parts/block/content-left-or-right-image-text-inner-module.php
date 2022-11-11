<?php
/**
 * Block Name: Header Module *
 * This is the template that displays the feature module.*/
// create id attribute for specific styling
$id = 'left-right-image-text-inner-module-' . $block['id'];
$image_alignment = get_field('image_alignment');
$image = get_field('image');
$heading = get_field('heading');
$blurb = get_field('blurb');
$links = get_field('links');
$background_theme = get_field('background_theme');
$enable__disable_module = get_field('enable__disable_module');

if($enable__disable_module): 

if( $image_alignment == 'left' ) { 

?>

<section id="<?php print $id; ?>" class="section whychoose <?php if($background_theme == 'theme-grey'): ?>prodsol<?php endif; ?>">
    <?php if($background_theme == 'theme-patterned'): ?>
    <div class="section-bg">
        <img src="<?php echo get_template_directory_uri();?>/./images/whychoose-bg.png" alt="">
    </div>
    <?php endif; ?>
    <div class="container">
        <div class="whychoose__row row">
            <div class="whychoose__col col-lg-6">
                <?php if(!empty($image)): ?>
                <div class="whychoose__media">
                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>">
                </div>
                <?php endif; ?>
            </div>
            <div class="whychoose__col col-lg-6">
                <div class="whychoose__text">
                    <h3 class="techspec__card-title"><?php echo $heading; ?></h3>
                    <p><?php echo $blurb; ?></p>
                    <?php if(!empty($links)): ?>
                    <a href="<?php echo $links['url'] ?>" class="btn"><?php echo $links['title'] ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php } elseif ($image_alignment == 'right') { ?>

<section id="<?php print $id; ?>" class="section whychoose <?php if($background_theme == 'theme-grey'): ?>prodsol<?php endif; ?>">
    <?php if($background_theme == 'theme-patterned'): ?>
    <div class="section-bg">
        <img src="<?php echo get_template_directory_uri();?>/./images/whychoose-bg.png" alt="">
    </div>
    <?php endif; ?>
    <div class="container">
        <div class="whychoose__row row">
            
            <div class="whychoose__col col-lg-6">
                <div class="">
                    <h3 class="techspec__card-title"><?php echo $heading; ?></h3>
                    <p><?php echo $blurb; ?></p>
                    <?php if(!empty($links)): ?>
                    <a href="<?php echo $links['url'] ?>" class="btn"><?php echo $links['title'] ?></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="whychoose__col col-lg-6">
                <div class="whychoose__media">
                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>">
                </div>
            </div>
        </div>
    </div>
</section>

<?php } endif;