<?php
/**
 * Block Name: Header Module *
 * This is the template that displays the feature module.*/
// create id attribute for specific styling
$id = 'header-module-' . $block['id'];
$header_theme = get_field('header_theme');

$cta_heading = get_field('cta_heading');
$heading = get_field('heading');
$blurb = get_field('blurb');
$cta_blurb = get_field('cta_blurb');
$cta_links = get_field('cta_links');
$enable_disable_module = get_field('enable_disable_module');
$back_button = get_field('back_button');
$heading_alignment = get_field('heading_alignment');
$image = get_field('image');

if($enable_disable_module):

if( $header_theme == 'theme-1' ) {

if(have_rows('slider')): ?>
<section id="<?php print $id; ?>" class="section hmbanner">
    <div class="container">
        <div class="hmbanner__slider">
        <?php while(have_rows('slider')): the_row(); 
            $heading = get_sub_field('heading');  
            $background_image = get_sub_field('background_image');  
            ?>
            <div class="item">
                <div class="hmbanner__card">
                    <div class="container">
                        <?php if($background_image): ?>
                        <img src="<?php echo $background_image['url'] ?>" alt="<?php echo $background_image['title'] ?>" class="hmbanner__card-bg">
                        <?php endif;
                         if($heading): ?>
                        <div class="hmbanner__card-text">
                            <h2 class="hmbanner__card-title"><?php echo $heading; ?></h2>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if(!empty($cta_heading || $cta_blurb || $cta_links )): ?>
<section id="<?php print $id; ?>" class="section hmabout">
    <div class="container">
        <div class="hmabout__box">
            <?php if($cta_heading): ?>
            <h3 class="hmabout__box-title"><?php echo $cta_heading; ?></h3>
            <?php endif; ?>
            <?php if($cta_blurb): ?>
            <p><?php echo $cta_blurb; ?></p>
            <?php endif; ?>
            <?php if($cta_links): ?>
            <a target="<?php echo $cta_links['target']; ?>" href="<?php echo $cta_links['url'] ?>" class="btn"><?php echo $cta_links['title'] ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; 
 } elseif ($header_theme == 'theme-2') {  ?>
<section id="<?php print $id; ?>" class="prod-pagetitle">
    <div class="container">
        <div class="prod-pagetitle__text">
            <h2><?php echo $cta_heading; ?></h2>
            <p><?php echo $cta_blurb; ?></p>
            <?php if($cta_links): ?>
            <a href="<?php echo $cta_links['url'] ?>" class="btn"><?php echo $cta_links['title'] ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>

 <?php } elseif ($header_theme == 'theme-3') {  ?>
<section id="<?php print $id; ?>" class="prod-pagetitle">
    <div class="container">
        <div class="<?php if($heading_alignment =='center'): ?> prod-pagetitle__text <?php endif; ?>">
            <h2><?php echo $heading; ?></h2>
        </div>
    </div>
</section>
 <?php } elseif ($header_theme == 'theme-4') {  ?>
<section id="<?php print $id; ?>" class="section pageheader">
    <div class="section-bg">
        <?php if(!empty($image)): ?>
        <img src="<?php echo $image['url'] ?>"
            alt="<?php echo $image['title'] ?>">
        <?php endif; ?>
    </div>
    <div class="container">
        <div class="pageheader__content">
            <h2><?php echo $heading; ?></h2>
            <p><?php echo $blurb; ?></p>
            <?php if(!empty($back_button)): ?>
            <a href="javascript:history.back()" class="pageheader__btn btn btn-trans btn-trans-black"><?php echo $back_button; ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>

 <?php } endif;