<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Baron_Insulation
 */

?>

</div>

<footer class="footer">
    <div class="container">
        <div class="footer__row row">
            <?php dynamic_sidebar( 'footer-intro' ); ?>  
            <div class="footer__col footer__col-links col-lg-8">
                <div class="footer__row-inner row">
                        <?php dynamic_sidebar( 'footer-menu' ); ?> 
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>