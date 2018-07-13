<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! class_exists( __NAMESPACE__ . 'Template_404' ) ) {

        class Template_404 {

            private $requested_resource;

            private $text_domain;

            public static $object_counter = 0;

            public function __construct() {

                if ( is_admin() ) {

                	//

                } else {

                	$data = array();

                	$data['sample-one'] = 'This is a';
                	$data['sample-two'] = '404 type...';

                }

                self::$object_counter++;

                $this->set_requested_resource();

                require_once( get_stylesheet_directory() . '/public/php/views/class-view-404.php' );
                $view_404 = new View_404( $data );

            }

            public function get_requested_resource() {
                return $this->requested_resource;
            }

            protected function set_requested_resource() {
                $this->requested_resource = 'undetermined';
            }

        }

    }

    $template_404 = new Template_404();

    echo '<h1>This is a 404...</h1>';
