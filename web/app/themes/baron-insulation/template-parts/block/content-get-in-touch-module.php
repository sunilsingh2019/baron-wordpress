<?php
/**
 * Block Name: get in touch Module *
 * This is the template that displays the feature module.*/
// create id attribute for specific styling
$id = 'get-in-touch-module-' . $block['id'];

$heading = get_field('heading');
$blurb = get_field('blurb');
$select_industry = get_field('select_industry');
$form_shortcode = get_field('form_shortcode');
$enable__disable_module = get_field('enable__disable_module');
$shortcode = '[contact-form-7 id="411" title="Get in touch" html_class="hmgit__form"]';

if($enable__disable_module): 
 ?>
<section id="<?php print $id; ?>" class="section hmgit">
    <div class="container">
        <div class="hmgit__row row">
            <div class="hmgit__col col-lg-4">
                <h2 class="hmgit__title"><?php echo $heading; ?></h2>
                <p><?php echo $blurb; ?></p>
            </div>
            <div class="hmgit__col col-lg-8">
                <?php if(!empty($form_shortcode)) { 
                 echo $form_shortcode;    
                } else {
                    echo do_shortcode($shortcode);
                } ?>
   
            </div>
        </div>
    </div>
</section>
<?php endif;