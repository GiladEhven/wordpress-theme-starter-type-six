<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! class_exists( __NAMESPACE__ . 'Template_Date' ) ) {

        class Template_Date {

            private $requested_resource;

            private $text_domain;

            public static $object_counter = 0;

            public function __construct() {

                if ( is_admin() ) {

                	//

                } else {

                	$data = array();

                	$data['sample-one'] = 'This is a';
                	$data['sample-two'] = 'DATE type...';

                }

                self::$object_counter++;

                $this->set_requested_resource();

                require_once( get_stylesheet_directory() . '/public/php/views/class-view-date.php' );
                $view_date = new View_Date( $data );

            }

            public function get_requested_resource() {
                return $this->requested_resource;
            }

            protected function set_requested_resource() {
                $this->requested_resource = 'undetermined';
            }

        }

    }

    $template_date = new Template_Date();

    echo '<h1>This is a DATE...</h1>';
