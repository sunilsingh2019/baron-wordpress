
<?php
/**
 * Block Name: Cards Module 
 * This is the template that displays the feature module.
 */
// create id attribute for specific styling
$id = 'image-cards-module-' . $block['id'];

$switch_column = get_field('switch_column');
$overlap_module = get_field('overlap_module');
$background_theme = get_field('background_theme');
$sub_heading = get_field('sub_heading');
$heading = get_field('heading'); 
$enable___disable_module = get_field('enable___disable_module'); 
$botton_links = get_field('botton_links'); 
$image__icon = get_field('image__icon'); 
if($enable___disable_module):
if( $switch_column == 'one-column' ) { 
    
if(have_rows('cards_list')):
?>

<section id="<?php print $id; ?>" class="section prod-diff <?php if($background_theme == 'theme-grey'): ?>prodsol<?php endif; ?>">
    <?php if($background_theme == 'theme-patterned'): ?>
    <div class="section-bg">
        <img src="<?php echo get_template_directory_uri();?>/./images/whychoose-bg.png" alt="">
    </div>
    <?php endif; ?>
    <div class="container">
        <?php if($heading): ?>
        <h3 class="techspec__card-title"><?php echo $heading; ?></h3>
        <?php endif; ?>
        <div class="prod-diff__cards">
            <?php while(have_rows('cards_list')): the_row(); 
                    $image = get_sub_field('image');
                    $heading = get_sub_field('heading');
                    $blurb = get_sub_field('blurb');
                    $links = get_sub_field('links');
             if($image__icon){ ?>
            <div class="prod-diff__card">
                <?php if($image): ?>
                <div class="prod-diff__card-media">
                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>">
                </div>
                <?php endif; ?>
                
                <div class="prod-diff__card-text">
                <h3 class="indserve__card-title"><?php echo $heading; ?></h3>
                    <p><?php echo $blurb; ?></p>
                </div>
            </div>
            <?php } else { ?>
            <div class="prod-diff__card">
                <?php if($image): ?>
                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>">
                <?php endif; ?>
                
                <div class="prod-diff__card-text">
                <p><strong><?php echo $heading; ?></strong></p>
                    <p><?php echo $blurb; ?></p>
                </div>
            </div>
            <?php } ?>
            <?php 
                endwhile;
                 ?>
        </div>
    </div>
</section>
<?php 
endif;
} elseif ($switch_column == 'two-column') {  
    if(have_rows('cards_list')): ?>

<section id="<?php print $id; ?>" class="section prod-cat <?php if($background_theme == 'theme-grey'): ?>prodsol<?php endif; ?>">
    <?php if($background_theme == 'theme-patterned'): ?>
    <div class="section-bg">
        <img src="<?php echo get_template_directory_uri();?>/./images/whychoose-bg.png" alt="">
    </div>
    <?php endif; ?>
    <div class="container">
        <div class="prod-cat__body">
            <h2 class="text-center"><?php echo $heading; ?></h2>
            <div class="prod-cat__row row">
            <?php while(have_rows('cards_list')): the_row(); 
                    $image = get_sub_field('image');
                    $heading = get_sub_field('heading');
                    $blurb = get_sub_field('blurb');
                    $links = get_sub_field('links');
                ?>
                <div class="prod-cat__col col-md-6">
                    <div class="prod-cat__card">
                         <?php if($image): ?>
                        <div class="prod-cat__card-media">
                         <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>">
                        </div>
                        <?php endif; ?>
                        <h4 class="prod-cat__card-title"><?php echo $heading; ?></h4>
                        <p><?php echo $blurb; ?></p>
                    </div>
                </div>
                <?php 
                endwhile;
                 ?>
            </div>
        </div>
    </div>
</section>

<?php 
endif;
} elseif ($switch_column == 'three-column') {  ?>

<section id="<?php print $id; ?>" class="section indexpert <?php if($background_theme == 'theme-grey'): ?>prodsol<?php endif; ?>">
    <?php if($background_theme == 'theme-patterned'): ?>
    <div class="section-bg">
        <img src="<?php echo get_template_directory_uri();?>/./images/whychoose-bg.png" alt="">
    </div>
    <?php endif; ?>
    <div class="container">
        <h2 class="indexpert__title text-center"><?php echo $heading; ?></h2>
        <div class="indexpert__row row">
        <?php while(have_rows('cards_list')): the_row(); 
                    $image = get_sub_field('image');
                    $heading = get_sub_field('heading');
                    $blurb = get_sub_field('blurb');
                    $links = get_sub_field('links');
                ?>
            <div class="indexpert__col col-lg-4">
                <div class="indexpert__card">
                    <?php if($image): ?>
                    <div class="indexpert__card-media">
                     <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>">
                    </div>
                    <?php endif; ?>
                    <div class="indexpert__card-text">
                        <h4 class="indexpert__card-title color-theme text-uppercase"><?php echo $heading; ?></h4>
                        <p><?php echo $blurb; ?></p>
                    </div>
                </div>
            </div>
            <?php 
                endwhile;
            ?>
        </div>
        </div>
    </div>
</section>

<?php } endif; ?>