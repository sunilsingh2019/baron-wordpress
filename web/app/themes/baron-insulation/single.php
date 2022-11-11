<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Baron_Insulation
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
			
		endwhile; // End of the loop.
		?>
       <?php if (get_post_type() === 'post') {  ?>
	<div class="container">
		<div class="techspec__card-title">
			<a href="javascript:history.back()" class="news-cont__card-btn btn btn-trans btn-trans-black">BACK TO NEWS</a>
	   </div>
	</div>
	<?php } ?>
	</main><!-- #main -->
	
<?php
get_footer();
