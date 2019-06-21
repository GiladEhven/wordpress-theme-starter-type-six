<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



	if ( have_posts() ) {

		h_loop_if_begin();

		while ( have_posts() ) {

			h_loop_while_begin();

			the_post();

			// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

			h_loop_entry_before();

			get_template_part( 'parts/entry', 'search' );

			h_loop_entry_after();

			// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

			h_loop_while_end();

		}

		h_loop_posts_navigation_before();

		get_template_part( 'parts/nav', 'posts' );

		h_loop_posts_navigation_after();

		// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

		h_loop_if_end();

	} else {

		h_loop_else_core();

	}
