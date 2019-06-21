<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



	the_post_navigation( array(

	    'mid_size'           => 2,
	    'next_text'          => __( 'Next',            'wordpress-theme-starter-type-six' ),
	    'prev_text'          => __( 'Prev',        'wordpress-theme-starter-type-six' ),
	    'screen_reader_text' => __( 'Navigate Content', 'wordpress-theme-starter-type-six' ),

	) );
