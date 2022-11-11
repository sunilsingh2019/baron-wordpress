<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Baron_Insulation
 */

?>


<div class="prod-diff__card  product__card-media pt-20">
	<?php if ( has_post_thumbnail() ) {  ?>
	<div class="prod-diff__card-media">
		<?php baron_insulation_post_thumbnail(); ?>
	</div>
	<?php } else { ?>
		<div class="prod-diff__card-media">
		<img src="https://dummyimage.com/600x400/e3e3e3/a6a4a6&text=No+Image" />
	</div>
	<?php } ?>
	<div class="prod-diff__card-text">
		<?php the_title( sprintf( '<h3 class="techspec__card-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
		<p><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
	</div>
</div>