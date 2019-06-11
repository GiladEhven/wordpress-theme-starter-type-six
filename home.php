<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    get_header();

    	h_template_home_before();

    		?>

                <div id="h-template-home">

                    <?php

                        h_template_home_begin();

                        get_template_part( 'parts/loop', 'home' );

                        h_template_home_end();

                    ?>

                </div>

		    <?php

		h_template_home_after();

    get_footer();
