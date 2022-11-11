<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Baron_Insulation
 */

get_header();
$shortcode = '[contact-form-7 id="411" title="Get in touch" html_class="hmgit__form"]';

?>

<section class="section prod-diff">
	<div class="container">
		<h2 class="prod-diff__title">Search Results</h2>
		<p class="pb-20"><?php
			printf( esc_html__( 'Your search for : %s', 'baron-insulation' ), "<span>'" . get_search_query() . "' </span>" );
			
			global $wp_query;
			if($wp_query->found_posts < 2) {
				$result = "result";
			} else {
				$result = "results";
			}
			echo $wp_query->found_posts . " " . $result . " found.";
			?>
		</P>
		<div class="prod-diff__cards max-width--700">
			
			<?php if ( have_posts() ) : ?>

				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/**
					 * Run the loop for the search to output the results.
					 * If you want to overload this in a child theme then include a file
					 * called content-search.php and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'search' );

				endwhile;

				the_posts_navigation();

				else :

				get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

		</div>
	</div>
</section>

<section class="section hmgit">
    <div class="container">
        <div class="hmgit__row row">
            <div class="hmgit__col col-lg-4">
                <h2 class="hmgit__title"> Get in Touch </h2>
                <p>If you would like to know more about Baron Insulation or the products and services we can offer you, please get in touch with our experienced and friendly team.</p>
            </div>
            <div class="hmgit__col col-lg-8">
                <?php echo do_shortcode($shortcode);  ?>
   
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
