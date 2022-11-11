<?php
/**
 * Block Name: Product with filter module *
 * This is the template that displays the feature module.*/
// create id attribute for specific styling
$id = 'product-with-filter-module-' . $block['id'];

$enable__disable_module = get_field('enable__disable_module');

if($enable__disable_module):
?>
<section id="<?php print $id; ?>" class="section prod homefilter--section">
    <div class="container">
        <div class="prod__body homefilter">
            <div class="prod__row row">
                <div class="prod__col prod__col--side">
                    <form data-css-form="filter" data-js-form="filter">
                        <div class="product__filter">
                            <h4 class="product__filter-title">Search by Category</h4>
                            <div class="product__filter-items">
                                <div class="product__filter-checkbox">
                                    <input id="showAll" type="checkbox" value="*">
                                    <label for="showAll">Show All</label>
                                </div>
                                <?php
                                $product_categories = get_terms( array(
                                    'taxonomy' => 'product_category',
                                    'hide_empty' => false,
                                ) );
                                foreach($product_categories as $product_category) :
                                ?>
                                <div class="product__filter-checkbox">
                                    <!-- <input id="accessories" type="checkbox" value="Accessories">
                                    <label for="accessories">Accessories</label> -->
                                    <input type="checkbox" id="<?= $product_category->slug; ?>" name="product-category[]" value="<?= $product_category->term_id; ?>">
                                    <label for="<?= $product_category->slug; ?>"><?= $product_category->name; ?></label>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <h4 class="product__filter-title">Search by Application</h4>
                            <div class="product__filter-items">
                            <?php
                                $application_categories = get_terms( array(
                                    'taxonomy' => 'application_category',
                                    'hide_empty' => false,
                                ) );
                                foreach($application_categories as $application_category) :
                                ?>
                                <div class="product__filter-checkbox">
                                <input type="checkbox" id="<?= $application_category->slug; ?>" name="application-category[]" value="<?= $application_category->term_id; ?>">
                                    <label for="<?= $application_category->slug; ?>"><?= $application_category->name; ?></label>
                                </div>
                                <?php endforeach; ?>
                                <fieldset data-css-form="group right" style="display:none;">
                                    <button data-css-button="button red">Filter</button>
                                    <input type="hidden" name="action" value="filter">
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="prod__col prod__col--main" >
                <div class="loading-div"></div>
                    <div class="product programfilter-body">
                        <div class="product__row row programfilter-listing" data-js-filter="target">
                                    <?php
                                
                                $args = array(
                                    'post_type'        	=> 'product',
                                    'paged'    => 1,
                                );
                                global $product;
                                $loop = new WP_Query($args );
                                if ( $loop->have_posts() ) :

                                while ( $loop->have_posts() ) : $loop->the_post(); 
                                $thumbnail_url = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), '', true); 
                                
                                ?>
                            <div class="product__col col-lg-4 col-md-6 homefilter-item">
                                <div class="product__card">
                                    <div class="product__card-media">
                                        <img src="<?php echo esc_url( $thumbnail_url[0] ); ?>" alt="">
                                    </div>
                                    <div class="product__card-text">
                                        <h5 class="product__card-title"><?php the_title(); ?></h5>
                                        <p><?php the_excerpt(); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-gray-dark">More info</a>
                                    </div>
                                </div>
                            </div>
                                <?php endwhile;                     
                                    wp_reset_postdata(); 
                                    endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php endif;