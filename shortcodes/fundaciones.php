<?php

function ups_logos_fundaciones( $atts = array() ) {
  
    // set up default parameters
    extract(shortcode_atts(array(
	     'rating' => '10'
	    ), $atts));

    $args = array(
    	'post-type' => 'fundacion',
    );

    $fundaciones = get_posts($args);
    
	ob_start();
		include locate_template('shortcodes/tmp/fundaciones.php');
    return ob_get_clean();
}

add_shortcode('logos_fundaciones', 'ups_logos_fundaciones');
