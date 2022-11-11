<?php
/**
 * Block Name: intro widget Module *
 * This is the template that displays the feature module.*/
// create id attribute for specific styling
$id = 'menu-widget-module-' . $block['id'];
 ?>
<div id="<?php print $id; ?>" class="footer__col-inner col-lg-4">
<?php while(have_rows('menu_list')): the_row(); 
    $heading = get_sub_field('heading'); ?>
        <div class="footer__link">
        
            <?php if(!empty($heading)): ?>
            <h3><a target="<?php echo $heading['target']; ?>" href="<?php echo $heading['url'] ?>"><?php echo $heading['title'] ?></a></h3>
            <?php endif; ?>
            <ul>
            <?php while(have_rows('inner_list')): the_row(); 
                $item = get_sub_field('item'); ?>
                <li><a target="<?php echo $item['target']; ?>" href="<?php echo $item['url'] ?>"><?php echo $item['title'] ?></a></li>
                
                <?php endwhile; ?>
            </ul>
        
        </div>
<?php endwhile; ?>
</div>
