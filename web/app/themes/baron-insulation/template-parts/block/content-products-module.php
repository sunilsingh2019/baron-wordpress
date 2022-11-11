
<?php
/**
 * Block Name: Product cards Module 
 * This is the template that displays the feature module.
 */
// create id attribute for specific styling
$id = 'product-module-' . $block['id'];

$cards_mode = get_field('cards_mode');
$select_taxonomy = get_field('select_taxonomy');
$heading = get_field('heading');
$blurb = get_field('blurb');
$enable__disable_module = get_field('enable__disable_module');

if($enable__disable_module):

if( $cards_mode == 'page-mode' ) {
?>

<section id="<?php print $id; ?>" class="section hmprod">
    <div class="container">
        <div class="text-center">
            <h2><?php echo $heading; ?></h2>
            <p><?php echo $blurb; ?></p>
        </div>
        <div class="hmprod__row row">
        <?php if($select_taxonomy){ 
                 foreach( $select_taxonomy as $post ): setup_postdata($post); 
                    $title = get_the_title( $post->ID );
                    $permalink = get_the_permalink( $post->ID );
                    $featured_img_url = get_post_thumbnail_id( $post->ID );
                ?>
            <div class="hmprod__col col-lg-3 col-6">
                <a href="<?php echo esc_html( $permalink ); ?>" class="hmprod__card">
                    <div class="hmprod__card-img">
                        <img src="<?php echo wp_get_attachment_image_url( $featured_img_url); ?>" alt="">
                    </div>
                    <div class="hmprod__card-text">
                        <h3 class="hmprod__card-title"><?php echo esc_html( $title ); ?></h3>
                    </div>
                </a>
            </div>
            <?php  endforeach; 
            }?>
        </div>
    </div>
</section>
<?php
 } elseif ($cards_mode == 'card-mode') {  ?>

<section id="<?php print $id; ?>" class="section hmprod">
    <div class="container">
    <div class="text-center">
            <h2><?php echo $heading; ?></h2>
            <p><?php echo $blurb; ?></p>
        </div>
        <div class="hmprod__row row">
        <?php while(have_rows('products_cards')): the_row(); 
                $image = get_sub_field('image');
                $heading = get_sub_field('heading');
                $links = get_sub_field('links'); ?>
            <div class="hmprod__col col-lg-3 col-6">
                <?php if($links): ?>
                <a href="<?php echo $links['url'] ?>" class="hmprod__card">
                <?php endif; ?>

                    <div class="hmprod__card-img">
                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>">
                    </div>
                    <div class="hmprod__card-text">
                        <h3 class="hmprod__card-title"><?php echo $heading; ?></h3>
                    </div>
                <?php if($links): ?>
                </a>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
        </div>
    </div>
</section>

<?php } endif; 