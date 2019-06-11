<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    get_header();

    	h_template_attachment_before();

    		?>

                <div id="h-template-attachment">

                    <?php

                        h_template_attachment_begin();

                        get_template_part( 'parts/loop', get_post_type() );

                        h_template_attachment_end();

                    ?>

                </div>

		    <?php

		h_template_attachment_after();

    get_footer();
