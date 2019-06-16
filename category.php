<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    get_header();

    	h_template_before();

    		?>

                <div id="h-template-category">

                    <?php

                        h_template_begin();

                        get_template_part( 'parts/loop', 'category' );

                        h_template_end();

                    ?>

                </div>

		    <?php

		h_template_after();

    get_footer();
