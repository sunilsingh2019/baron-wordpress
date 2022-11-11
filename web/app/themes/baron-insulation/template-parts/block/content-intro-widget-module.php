<?php
/**
 * Block Name: intro widget Module *
 * This is the template that displays the feature module.*/
// create id attribute for specific styling
$id = 'intro-widget-module-' . $block['id'];


$logo = get_field('logo');
$phone = get_field('phone');
$email = get_field('email');
$address = get_field('address');

 ?>
  <div class="footer__col footer__col-main col-lg-4">
    <div class="logo">
        <img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['title'] ?>">
    </div>
    <ul class="footer__details">
        <li>Phone: <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></li>
        <li><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li>
        <li><?php echo $address; ?></li>
    </ul>
</div>