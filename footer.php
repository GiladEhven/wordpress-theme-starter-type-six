<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! class_exists( __NAMESPACE__ . 'Template_Footer' ) ) {

        class Template_Footer {

            private $requested_resource;

            private $text_domain;

            public static $object_counter = 0;

            public function __construct() {

                if ( is_admin() ) {

                	//

                } else {

                	$data = array();

                	$data['sample-one'] = 'This is a';
                	$data['sample-two'] = 'FOOTER type...';

                }

                self::$object_counter++;

                $this->set_requested_resource();

                require_once( get_stylesheet_directory() . '/public/php/views/class-view-footer.php' );
                $view_footer = new View_Footer( $data );

            }

            public function get_requested_resource() {
                return $this->requested_resource;
            }

            protected function set_requested_resource() {
                $this->requested_resource = 'undetermined';
            }

        }

    }

    $template_footer = new Template_Footer();

    echo '<h1>This is a FOOTER...</h1>';
