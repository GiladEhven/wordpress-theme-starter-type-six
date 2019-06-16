<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    get_header();

        h_get_template_part_before();

            get_template_part( 'parts/loop', 'index' );

        h_get_template_part_after();

    get_footer();
