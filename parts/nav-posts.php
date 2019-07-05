<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



    echo '<div class="col-12">';

    if ( is_search() ) {

		the_posts_pagination( array(

		    'mid_size'           => 2,
		    'next_text'          => __( 'Next Results',            'wordpress-theme-starter-type-six' ),
		    'prev_text'          => __( 'Previous Results',        'wordpress-theme-starter-type-six' ),
		    'screen_reader_text' => __( 'Navigate Search Results', 'wordpress-theme-starter-type-six' ),

		) );

    } else {

		the_posts_pagination( array(

		    'mid_size'           => 2,
		    'next_text'          => __( 'Older',                   'wordpress-theme-starter-type-six' ),
		    'prev_text'          => __( 'Newer',                   'wordpress-theme-starter-type-six' ),
		    'screen_reader_text' => __( 'Navigate Content',        'wordpress-theme-starter-type-six' ),

		) );

    }

	echo '</div>';
