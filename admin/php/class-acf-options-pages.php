<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! class_exists( __NAMESPACE__ . 'ACF_Options_Pages' ) ) {

        class ACF_Options_Pages {

            private $text_domain;

            public static $object_counter = 0;

            public function __construct() {

                if ( is_admin() ) {

                	//

                } else {

                	//

                }

                self::$object_counter++;

            }

            //

        }

    }
