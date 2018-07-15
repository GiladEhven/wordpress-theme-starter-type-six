<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Author' ) ) {

        class Template_Author {

        	private $author_bio;

        	private $author_email;

        	private $author_name_display;

        	private $author_name_first;

        	private $author_name_last;

        	private $author_name_nick;

        	private $author_name_user;

        	private $author_pic;

        	private $author_website;

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

                require_once( get_stylesheet_directory() . '/public/php/views/class-view-author.php' );
                $view_author = new View_Author( $data );

            }

            //  -------------------------  GETTERS AND SETTERS  -------------------------  //

            public function get_author_data() {
                return true;
            }

            public function get_requested_resource() {
                return $this->requested_resource;
            }

            protected function set_author_data() {
                //
            }

            protected function set_requested_resource() {
                $this->requested_resource = 'undetermined';
            }

            //  ----------------------------  MISSION LOGIC  ----------------------------  //

            protected function get_acf_data() {

                	$data = array();

                	$data['sample-one'] = 'This is a';
                	$data['sample-two'] = 'AUTHOR type...';

                	return $data;

            }

        }

    }

    $template_author = new Template_Author();
