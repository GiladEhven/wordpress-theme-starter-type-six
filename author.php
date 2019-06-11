<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    get_header();

    	h_template_author_before();

    		?>

                <div id="h-template-author">

                    <?php

                        h_template_author_begin();

                        get_template_part( 'parts/loop', 'author' );

                        h_template_author_end();

                    ?>

                </div>

		    <?php

		h_template_author_after();

    get_footer();
