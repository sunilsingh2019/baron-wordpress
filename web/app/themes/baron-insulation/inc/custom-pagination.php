<?php
/**
 * Custom pagination
 */
function baron_insulation_custom_pagination( $loop ) {

	$allowed_tags = [
	   'span' => [
		  'class' => [],
	   ],
	   'i'    => [
		  'class' => [],
	   ],
	   'a'    => [
		  'class' => [],
		  'href'  => [],
	   ],
	];
 
	printf(
	   '<nav class="ninetrade-pagination clearfix">%s</nav>',
	   wp_kses(
		  paginate_links(
			 [
				'prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i> ' . __( 'Previous', 'ninetrade' ),
				'next_text' => __( 'Next', 'ninetrade' ) . ' <i class="fa fa-angle-right" aria-hidden="true"></i>',
				'total'     => $loop->max_num_pages
			 ]
		  ),
		  $allowed_tags
	   )
	);
 }