<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



	if ( have_posts() ) {

		h_loop_if_begin();

		while ( have_posts() ) {

			h_loop_while_begin();

			the_post();

			// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

			h_loop_entry_before();

			get_template_part( 'parts/entry', get_post_type() );

			h_loop_entry_after();

			// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

			h_loop_comments_before();

			if ( comments_open() || get_comments_number() ) comments_template();

			h_loop_comments_after();

			// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

			h_loop_while_end();

		}

		h_loop_if_end();

	} else {

		h_loop_else_core();

	}
