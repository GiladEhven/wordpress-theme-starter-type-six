<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

	if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

	if ( ! class_exists( __NAMESPACE__ . 'Gilad_T6' ) ) {

		class Gilad_T6 {

            public static $object_counter = 0;

			public function __construct() {

                self::$object_counter++;

			}



		}

	}
