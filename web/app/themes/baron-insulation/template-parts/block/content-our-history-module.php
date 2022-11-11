<?php
/**
 * Block Name: intro widget Module *
 * This is the template that displays the feature module.*/
// create id attribute for specific styling
$id = 'intro-widget-module-' . $block['id'];  ?>

<section id="<?php print $id; ?>" class="section sec-timeline">
   <div class="container">
      <div class="timeline">
      <?php if(have_rows('list_history')): ?>
         <ul>
            <?php while(have_rows('list_history')): the_row(); 
                     $year = get_sub_field('year'); 
                     $description = get_sub_field('description'); 
                     $image = get_sub_field('image'); ?>
             <li>
               <div class="content">
                  <h3><?php echo $year; ?></h3>
                  <p>
                  <?php echo $description; ?>
                  </p>
               </div>
               <div class="time">
                  <?php if(!empty($image)): ?>
                  <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['title'] ?>"/>
                  <?php endif; ?>
               </div>
            </li>
            <?php endwhile; ?>
            <div style="clear:both;"></div>
         </ul>
         <?php endif; ?>

      </div>
   </div>
</section>