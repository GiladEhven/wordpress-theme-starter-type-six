<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    get_header();

    	h_template_date_before();

    		?>

                <div id="h-template-date">

                    <?php get_template_part( 'parts/loop', 'date' ); ?>

                </div>

		    <?php

		h_template_date_after();

    get_footer();
