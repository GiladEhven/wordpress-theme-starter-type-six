<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! class_exists( __NAMESPACE__ . 'Template_Comment' ) ) {

        class Template_Comment {

            private $requested_resource;

            private $text_domain;

            public static $object_counter = 0;

            public function __construct() {

                if ( is_admin() ) {

                	//

                } else {

                	//

                }

                self::$object_counter++;

                $this->set_requested_resource();

            }

            public function get_requested_resource() {
                return $this->requested_resource;
            }

            protected function set_requested_resource() {
                $this->requested_resource = 'undetermined';
            }

        }

    }

    $template_comment = new Template_Comment();
