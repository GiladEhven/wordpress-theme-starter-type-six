<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



	if ( defined( 'TYPESIX_ENABLE_PALETTE' ) && TYPESIX_ENABLE_PALETTE ) {

		if ( file_exists( get_template_directory() . '/palettes/' . TYPESIX_ENABLE_PALETTE . '.editor.css' ) ) {

			add_editor_style( 'palettes/' . TYPESIX_ENABLE_PALETTE . '.editor.css' );

		}

	}

	if ( file_exists( get_stylesheet_directory() . '/assets/style.editor.css' ) ) {

		add_editor_style( 'assets/style.editor.css' );

	}
