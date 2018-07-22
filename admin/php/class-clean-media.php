<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'Clean_Media' ) ) {

        class Clean_Media {

            private $text_domain;

            public static $object_counter = 0;

            public function __construct() {

                $this->generate_images();

                self::$object_counter++;

            }

            private function generate_images() {
                add_image_size( '300-Square', 300, 300, true );
                add_image_size( '300-Wide',   300 );
            }

        }

    }
