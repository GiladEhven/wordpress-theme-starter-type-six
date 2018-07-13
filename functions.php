<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! class_exists( __NAMESPACE__ . 'Theme_Core' ) ) {

        class Theme_Core {

            private $text_domain;

            private $theme_name;

            private $theme_version;

            public static $object_counter = 0;

            public function __construct() {

                if ( is_admin() ) {

                    require_once( get_stylesheet_directory() . '/admin/php/class-acf-options-pages.php' );
                    require_once( get_stylesheet_directory() . '/admin/php/class-admin-resources.php' );
                    require_once( get_stylesheet_directory() . '/admin/php/class-clean-admin.php' );

                    $acf_options_pages = new Acf_Options_Pages;
                    $admin_resources   = new Admin_Resources;
                    $clean_admin       = new Clean_Admin;

                } else {

                    require_once( get_stylesheet_directory() . '/public/php/class-public-resources.php' );

                    $public_resources  = new Public_Resources;

                }

                self::$object_counter++;

                $this->set_theme_name();
                $this->set_theme_version();

            }

            public function get_theme_name() {
                return $this->theme_name;
            }

            public function get_theme_version() {
                return $this->theme_version;
            }

            protected function set_theme_name() {
                $theme_object = wp_get_theme();
                $this->theme_name = $theme_object->get( 'Name' );
            }

            protected function set_theme_version() {
                $theme_object = wp_get_theme();
                $this->theme_version = $theme_object->get( 'Version' );
            }

        }

    }

    $theme_core = new Theme_Core();
