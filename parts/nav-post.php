<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



	previous_post_link( '<span id="post-nav-previous">%link</span>' );

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

	next_post_link( '<span id="post-nav-next">%link</span>' );
