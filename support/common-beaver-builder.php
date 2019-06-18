<?php

    namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //
    // - - - - - - - - - -  D E C L A R E   S U P P O R T  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    add_action( 'after_setup_theme', function() {

        add_theme_support( 'fl-theme-builder-headers' );
        add_theme_support( 'fl-theme-builder-footers' );
        add_theme_support( 'fl-theme-builder-parts' );

    } );



    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //
    // - - - - - - - - - -  A D D   H E A D E R   A N D   F O O T E R   S U P P O R T  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    add_action( 'wp', function() {

        $header_ids = \FLThemeBuilderLayoutData::get_current_page_header_ids();

        if ( ! empty( $header_ids ) ) {

            remove_action( 'h_body_header', 'h_body_header' );
            add_action( 'h_body_header', 'FLThemeBuilderLayoutRenderer::render_header' );

        }

        $footer_ids = \FLThemeBuilderLayoutData::get_current_page_footer_ids();

        if ( ! empty( $footer_ids ) ) {

            remove_action( 'h_body_footer', 'h_body_footer' );
            add_action( 'h_body_footer', 'FLThemeBuilderLayoutRenderer::render_footer' );

        }

    } );



    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //
    // - - - - - - - - - -  A D D   P A R T   S U P P O R T  - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //
    // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

    add_filter( 'fl_theme_builder_part_hooks', function() {

        return array(

            array
            (
                'label' => 'Document Head',
                'hooks' => array
                (
                    'h_head_begin'                  => 'Head Begin',
                    'h_head_add_meta_tags'          => 'Head Meta Tags',
                    'h_head_add_link_tags'          => 'Head Link Tags',
                    'h_head_end'                    => 'Head End',
                )
            ),

            array
            (
                'label' => 'Body Top',
                'hooks' => array
                (
                    'h_body_begin'                  => 'Body Begin',
                    'h_body_header'                 => 'Body Header',
                    'h_main_before'                 => 'Main Before',
                    'h_main_begin'                  => 'Main Begin',
                )
            ),

            array
            (
                'label' => 'Body Core: Template',
                'hooks' => array
                (
                    'h_get_template_part_before'    => 'Core Part Before',
                    'h_get_template_part_after'     => 'Core Part After',
                )
            ),

            array
            (
                'label' => 'Body Core: Loop',
                'hooks' => array
                (
                    'h_loop_if_begin'               => 'Loop\'s If Begin',
                    'h_loop_while_begin'            => 'Loop\'s While Begin',
                    'h_loop_entry_before'           => 'Loop\'s Entry Before',
                    'h_loop_entry_after'            => 'Loop\'s Entry After',
                    'h_loop_post_navigation_before' => 'Loop\'s PostNav Before',
                    'h_loop_post_navigation_after'  => 'Loop\'s PostNav After',
                    'h_loop_comments_before'        => 'Loop\'s Comments Before',
                    'h_loop_comments_after'         => 'Loop\'s Comments After',
                    'h_loop_while_end'              => 'Loop\'s While End',
                    'h_loop_if_end'                 => 'Loop\'s If End',
                    'h_loop_else_core'              => 'Loop\'s Else',
                )
            ),

            array
            (
                'label' => 'Body Bottom',
                'hooks' => array
                (
                    'h_main_end'                    => 'Main End',
                    'h_main_after'                  => 'Main After',
                    'h_body_footer'                 => 'Body Footer',
                    'h_body_end'                    => 'Body End',
                )
            ),

        );

    });
