<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'Public_Resources' ) ) {

        class Public_Resources {

            private $text_domain;

            private $theme_version;

            public static $object_counter = 0;

            public function __construct() {

                self::$object_counter++;

                $this->set_theme_descriptors();

                $this->dequeue_css();
                $this->dequeue_js();
                $this->enqueue_css();
                $this->enqueue_js();

            }

            private function dequeue_css() {

            }

            private function dequeue_js() {

            }

            private function enqueue_css() {
                add_action( 'wp_enqueue_scripts', function() {
                    wp_enqueue_style( $this->text_domain, get_stylesheet_directory_uri() . '/public/css/main.css', array(), $this->theme_version, 'all' );
                });
            }

            private function enqueue_js() {
                add_action( 'wp_enqueue_scripts', function() {
                    wp_enqueue_script( $this->text_domain, get_stylesheet_directory_uri() . '/public/js/main.js', array( 'jquery' ), $this->theme_version, true );
                });
            }

            protected function set_theme_descriptors() {
                $theme_object = wp_get_theme();
                $this->text_domain = $theme_object->get( 'TextDomain' );
                $this->theme_version = $theme_object->get( 'Version' );
            }

        }

    }
