<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Example_CPT_Single' ) ) {

        class Template_Example_CPT_Single {

            private $requested_resource;

            public static $object_counter = 0;

            public function __construct() {

                if ( is_admin() ) {

                	//

                } else {

                	$data = $this->get_acf_data();

                }

                self::$object_counter++;

                $this->set_requested_resource();

                require_once( get_stylesheet_directory() . '/public/php/views/class-view-single-example-cpt.php' );
                $view_example_cpt_single = new View_Example_CPT_Single( $data );

            }

            //  -------------------------  GETTERS AND SETTERS  -------------------------  //

            public function get_requested_resource() {
                return $this->requested_resource;
            }

            protected function set_requested_resource() {
                $this->requested_resource = 'undetermined';
            }

            //  ----------------------------  MISSION LOGIC  ----------------------------  //

            protected function get_acf_data() {

                	$data = array();

                	$data['sample-one'] = 'This is a';
                	$data['sample-two'] = 'EXAMPLE CPT SINGLE type...';

                	return $data;

            }

        }

    }

    get_header(); ?>

                <section id="main">

                    <?php

                        $template_example_cpt_single = new Template_Example_CPT_Single();

                    ?>

                </section><!-- / # main -->

                <?php

                    if ( comments_open() || get_comments_number() ) {

                        comments_template();

                    }

                ?>

    <?php get_footer();