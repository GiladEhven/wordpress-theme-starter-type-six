<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Footer' ) ) {

        class Template_Footer {

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

                require_once( get_stylesheet_directory() . '/public/php/views/class-view-footer.php' );
                $view_footer = new View_Footer( $data );

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
                	$data['sample-two'] = 'FOOTER type...';

                	return $data;

            }

        }

    }

            gilad_main_end(); ?>

			</main>

			<footer>

			    <?php

                    gilad_footer_begin();

                    $template_footer = new Template_Footer();

                    gilad_footer_end();

                ?>

			</footer>

            <?php gilad_wrapper_end(); ?>

		</div>

        <?php

            gilad_body_end();

            wp_footer();

        ?>

	</body>

</html>
