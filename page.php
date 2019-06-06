<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    get_header();

        h_template_page_before();

            ?>

                <div id="h-template-page">

                    <?php

                        h_template_page();

                        if ( comments_open() || get_comments_number() ) {

                            comments_template();

                        }

                    ?>

                </div>

            <?php

        h_template_page_after();

    get_footer();
