<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Baron_Insulation
 */

get_header();
?>
<section class="section prod-single" style="padding: 160px 0;">
    <div class="container">
        <div class="prod-single__row row">
            <div class="prod-single__col prod-single__col--main">
                <div class="prod-single__header text-center">
                    <h2><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'baron-insulation' ); ?></h2>
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'baron-insulation' ); ?></p><br>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="news-cont__card-btn btn-trans btn-trans-black">BACK TO HOME</a>

                </div>
               
            </div>
        </div>
    </div>
</section>


<?php
get_footer();
