<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    get_header();

    	h_template_date_before();

    		?>

                <div id="h-template-date">

                    <?php

                        h_template_date_begin();

                        get_template_part( 'parts/loop', 'date' );

                        h_template_date_end();

                    ?>

                </div>

		    <?php

		h_template_date_after();

    get_footer();
