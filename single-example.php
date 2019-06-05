<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    get_header(); ?>

                <section id="main">

                    <?php

                        // $template_example_cpt_single = new Template_Example_CPT_Single();

                    ?>

                </section><!-- / # main -->

                <?php

                    if ( comments_open() || get_comments_number() ) {

                        comments_template();

                    }

                ?>

    <?php get_footer();
