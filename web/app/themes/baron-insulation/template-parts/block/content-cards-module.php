
<?php
/**
 * Block Name: Cards Module 
 * This is the template that displays the feature module.
 */
// create id attribute for specific styling
$id = 'cards-module-' . $block['id'];

$switch_column = get_field('switch_column');
$overlap_module = get_field('overlap_module');
$background_theme = get_field('background_theme');
$sub_heading = get_field('sub_heading');
$heading = get_field('heading'); 
$enable___disable_module = get_field('enable___disable_module'); 
$botton_links = get_field('botton_links'); 
$manage_padding_bottom = get_field('manage_padding_bottom'); 
if($enable___disable_module):

?>
<style type="text/css">
    .indserve__box {
        margin-top: <?php echo $overlap_module; ?>px !important;
    }
</style>
<?php if( $switch_column == 'one-column' ) { 
    
if(have_rows('cards_list')):
?>

<section id="<?php print $id; ?>" class="section indserve <?php if($background_theme == 'theme-grey'): ?>prodsol<?php endif; ?>">
    <?php if($background_theme == 'theme-patterned'): ?>
    <div class="section-bg">
        <img src="<?php echo get_template_directory_uri();?>/./images/whychoose-bg.png" alt="">
    </div>
    <?php endif; ?>
    <div class="container">
        <div class="indserve__box">
            <?php if($heading): ?>
            <h2 class="indserve__box-title text-center"><?php echo $heading; ?></h2>
            <?php endif; ?>
            <p><?php echo $sub_heading; ?></p>
            <div class="indserve__cards">
                <?php while(have_rows('cards_list')): the_row(); 
                    $image = get_sub_field('image');
                    $heading = get_sub_field('heading');
                    $blurb = get_sub_field('blurb');
                    $links = get_sub_field('links');
                ?>
                <div class="indserve__card">
                    <?php if($image): ?>
                    <div class="indserve__card-icon">
                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>">
                    </div>
                    <?php endif; ?>
                    <div class="indserve__card-text">
                        <h3 class="indserve__card-title"><?php echo $heading; ?></h3>
                        <p><?php echo $blurb; ?></p>
                        <?php if(!empty($links)): ?>
                        <a href="<?php echo $links['url'] ?>" class="btn btn-arrow indserve__card-btn"><img
                                src="<?php echo get_template_directory_uri();?>/./images/icons/btn-link.svg" alt="btn"></a>
                        <?php endif; ?>
                    </div>
                </div>
                <?php 
                endwhile;
                 ?>
            </div>
            <?php if(!empty($botton_links)): ?>
            <div class="prodsol__footer text-center">
                <a target="<?php echo $botton_links['target'] ?>" href="<?php echo $botton_links['url'] ?>" class="btn"><?php echo $botton_links['title'] ?></a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php 
endif;
} elseif ($switch_column == 'two-column') {  
    if(have_rows('cards_list')): ?>

<section id="<?php print $id; ?>" class="section <?php if($background_theme == 'theme-grey'): ?>prodsol<?php endif; ?> prodsol--benefits">
    <?php if($background_theme == 'theme-patterned'): ?>
    <div class="section-bg">
        <img src="<?php echo get_template_directory_uri();?>/./images/whychoose-bg.png" alt="">
    </div>
    <?php endif; ?>
    <div class="container">
    <?php if($heading): ?>
            <h2 class="indserve__box-title text-center"><?php echo $heading; ?></h2>
            <?php endif; ?>
            <p><?php echo $sub_heading; ?></p>
        <div class="prodsol__row row">
        <?php while(have_rows('cards_list')): the_row(); 
                    $image = get_sub_field('image');
                    $heading = get_sub_field('heading');
                    $blurb = get_sub_field('blurb');
                    $links = get_sub_field('links');
                ?>
            <div class="prodsol__col col-lg-6">
                <div class="prodsol__card">
                    <div class="prodsol__card-header">
                        <?php if($image): ?>
                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>" class="prodsol__card-icon">
                        <?php endif; ?>
                        <h3 class="prodsol__card-title"><?php echo $heading; ?></h3>
                    </div>
                    <p><?php echo $blurb; ?></p>
                    <?php if(!empty($links)): ?>
                    <a href="<?php echo $links['url'] ?>" class="btn btn-arrow"><img src="<?php echo get_template_directory_uri();?>/./images/icons/btn-link.svg" alt=""></a>
                    <?php endif; ?>
                </div>
            </div>
            <?php 
                endwhile;
                 ?>
        </div>
        <?php if(!empty($botton_links)): ?>
        <div class="prodsol__footer text-center">
            <a target="<?php echo $botton_links['target'] ?>" href="<?php echo $botton_links['url'] ?>" class="btn"><?php echo $botton_links['title'] ?></a>
        </div>
        <?php endif; ?>
    </div>
</section>

<?php 
endif;
} elseif ($switch_column == 'three-column') {  ?>

<section id="<?php print $id; ?>" class="section techspec <?php if($background_theme == 'theme-grey'): ?>prodsol<?php endif; ?>">
    <?php if($background_theme == 'theme-patterned'): ?>
    <div class="section-bg">
        <img src="<?php echo get_template_directory_uri();?>/./images/whychoose-bg.png" alt="">
    </div>
    <?php endif; ?>
    <div class="container">
        <div class="techspec__header text-center">
            <?php if($heading): ?>
            <h2 class="indserve__box-title text-center"><?php echo $heading; ?></h2>
            <?php endif; ?>
            <p><?php echo $sub_heading; ?></p>
        </div>
        <div class="techspec__row row">
            <?php while(have_rows('cards_list')): the_row(); 
                    $image = get_sub_field('image');
                    $heading = get_sub_field('heading');
                    $blurb = get_sub_field('blurb');
                    $links = get_sub_field('links');
                ?>
            <div class="techspec__col col-lg-4">
                <div class="techspec__card">
                        <?php if($image): ?>
                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>" class="techspec__card-icon">
                        <?php endif; ?>
                    <h3 class="techspec__card-title"><?php echo $heading; ?></h3>
                    <p><?php echo $blurb; ?></p>
                    <?php if(!empty($links)): ?>
                    <a href="<?php echo $links['url'] ?>" class="btn btn-arrow"><img src="<?php echo get_template_directory_uri();?>/./images/icons/btn-link.svg" alt=""></a>
                    <?php endif; ?>
                </div>
            </div>
             <?php 
                endwhile;
            ?>
        </div>
        <?php if(!empty($botton_links)): ?>
        <div class="prodsol__footer text-center">
            <a target="<?php echo $botton_links['target'] ?>" href="<?php echo $botton_links['url'] ?>" class="btn"><?php echo $botton_links['title'] ?></a>
        </div>
        <?php endif; ?>
    </div>
</section>

<?php } endif; ?>