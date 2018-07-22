<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'ACF_Options_Pages' ) ) {

        class ACF_Options_Pages {

            private $text_domain;

            public static $object_counter = 0;

            public function __construct() {

                $this->add_options_page_with_acf();

                self::$object_counter++;

            }

            protected function add_options_page_with_acf() {

                if( function_exists( 'acf_add_options_page' ) ) {

                    add_action( 'acf/init', function() {

                        //  ----------------------------------------------------------------------------------------------------------------  //

                        $option_page_one = acf_add_options_page
                        (
                            array
                            (
                                'autoload'        => true,
                                'capability'      => 'publish_pages',
                                'icon_url'        => false,
                                'menu_slug'       => 'example-one',
                                'menu_title'      => __( 'Example 1',           'wordpress-theme-starter-type-six' ),
                                'page_title'      => __( 'Example One Panel',   'wordpress-theme-starter-type-six' ),
                                'position'        => '3.1',
                                'post_id'         => 'options',
                                'redirect'        => true,
                                'update_button'   => __( 'Update Example',      'wordpress-theme-starter-type-six' ),
                                'updated_message' => __( 'Example Updated',     'wordpress-theme-starter-type-six' ),
                            )
                        );

                        //  ----------------------------------------------------------------------------------------------------------------  //

                        $option_page_two = acf_add_options_page
                        (
                            array
                            (
                                'autoload'        => true,
                                'capability'      => 'publish_pages',
                                'icon_url'        => false,
                                'menu_slug'       => 'example-two',
                                'menu_title'      => __( 'Example 2',           'wordpress-theme-starter-type-six' ),
                                'page_title'      => __( 'Example Two Panel',   'wordpress-theme-starter-type-six' ),
                                'position'        => '3.2',
                                'post_id'         => 'options',
                                'redirect'        => true,
                                'update_button'   => __( 'Update Example',      'wordpress-theme-starter-type-six' ),
                                'updated_message' => __( 'Example Updated',     'wordpress-theme-starter-type-six' ),
                            )
                        );

                                $option_page_two_sub_one = acf_add_options_page
                                (
                                    array
                                    (
                                        'autoload'        => true,
                                        'capability'      => 'publish_pages',
                                        'menu_slug'       => 'example-two-sub-one',
                                        'menu_title'      => __( 'Example 2.1',         'wordpress-theme-starter-type-six' ),
                                        'page_title'      => __( 'Example Two > One',   'wordpress-theme-starter-type-six' ),
                                        'parent_slug'     => 'example-two',
                                        'post_id'         => 'options',
                                        'update_button'   => __( 'Update Example',      'wordpress-theme-starter-type-six' ),
                                        'updated_message' => __( 'Example Updated',     'wordpress-theme-starter-type-six' ),
                                    )
                                );

                                $option_page_two_sub_two = acf_add_options_page
                                (
                                    array
                                    (
                                        'autoload'        => true,
                                        'capability'      => 'publish_pages',
                                        'menu_slug'       => 'example-two-sub-two',
                                        'menu_title'      => __( 'Example 2.2',         'wordpress-theme-starter-type-six' ),
                                        'page_title'      => __( 'Example Two > Two',   'wordpress-theme-starter-type-six' ),
                                        'parent_slug'     => 'example-two',
                                        'post_id'         => 'options',
                                        'update_button'   => __( 'Update Example',      'wordpress-theme-starter-type-six' ),
                                        'updated_message' => __( 'Example Updated',     'wordpress-theme-starter-type-six' ),
                                    )
                                );

                        //  ----------------------------------------------------------------------------------------------------------------  //

                        $option_page_three = acf_add_options_page
                        (
                            array
                            (
                                'autoload'        => true,
                                'capability'      => 'publish_pages',
                                'icon_url'        => false,
                                'menu_slug'       => 'example-three',
                                'menu_title'      => __( 'Example 3',           'wordpress-theme-starter-type-six' ),
                                'page_title'      => __( 'Example Three Panel', 'wordpress-theme-starter-type-six' ),
                                'position'        => '3.3',
                                'post_id'         => 'options',
                                'redirect'        => false,
                                'update_button'   => __( 'Update Example',      'wordpress-theme-starter-type-six' ),
                                'updated_message' => __( 'Example Updated',     'wordpress-theme-starter-type-six' ),
                            )
                        );

                                $option_page_three_sub_one = acf_add_options_page
                                (
                                    array
                                    (
                                        'autoload'        => true,
                                        'capability'      => 'publish_pages',
                                        'menu_slug'       => 'example-three-sub-one',
                                        'menu_title'      => __( 'Example 3.1',         'wordpress-theme-starter-type-six' ),
                                        'page_title'      => __( 'Example Three > One',   'wordpress-theme-starter-type-six' ),
                                        'parent_slug'     => 'example-three',
                                        'post_id'         => 'options',
                                        'update_button'   => __( 'Update Example',      'wordpress-theme-starter-type-six' ),
                                        'updated_message' => __( 'Example Updated',     'wordpress-theme-starter-type-six' ),
                                    )
                                );

                                $option_page_three_sub_two = acf_add_options_page
                                (
                                    array
                                    (
                                        'autoload'        => true,
                                        'capability'      => 'publish_pages',
                                        'menu_slug'       => 'example-three-sub-two',
                                        'menu_title'      => __( 'Example 3.2',         'wordpress-theme-starter-type-six' ),
                                        'page_title'      => __( 'Example Three > Two',   'wordpress-theme-starter-type-six' ),
                                        'parent_slug'     => 'example-three',
                                        'post_id'         => 'options',
                                        'update_button'   => __( 'Update Example',      'wordpress-theme-starter-type-six' ),
                                        'updated_message' => __( 'Example Updated',     'wordpress-theme-starter-type-six' ),
                                    )
                                );

                        //  ----------------------------------------------------------------------------------------------------------------  //

                    } );

                }

            }

        }

    }
