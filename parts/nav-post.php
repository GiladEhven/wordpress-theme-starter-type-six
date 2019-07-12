<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



    echo '<div class="' . TYPESIX_CSS_CLASSES_FOR_NAV_POST . '">';

    h_nav_post_begin();

	previous_post_link( '<span id="post-nav-previous">%link</span>' );

	h_nav_post_paginator_before();

	wp_link_pages( array(

		'after'            => '</span>',
		'before'           => '<span id="post-nav-paginator">',
		'link_after'       => '',
		'link_before'      => '',
		'nextpagelink'     => 'Next',
		'next_or_number'   => 'number',
		'pagelink'         => '%',
		'previouspagelink' => 'Previous',
		'separator'        => ' ',

	) );

	h_nav_post_paginator_after();

	next_post_link( '<span id="post-nav-next">%link</span>' );

	h_nav_post_end();

	echo '</div>';
