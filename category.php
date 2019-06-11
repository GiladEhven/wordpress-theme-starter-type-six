<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    get_header();

    	h_template_category_before();

    		?>

                <div id="h-template-category">

                    <?php

                        h_template_category_begin();

                        get_template_part( 'parts/loop', 'category' );

                        h_template_category_end();

                    ?>

                </div>

		    <?php

		h_template_category_after();

    get_footer();
