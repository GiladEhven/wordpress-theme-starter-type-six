<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    get_header();

    	h_template_image_before();

    		?>

                <div id="h-template-image">

                    <?php get_template_part( 'parts/loop', get_post_type() ); ?>

                </div>

		    <?php

		h_template_image_after();

    get_footer();
