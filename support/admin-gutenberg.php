<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



    if ( ! defined( 'TYPESIX_DISABLE_GUTENBERG_ALIGN_WIDE'        ) ) { define( 'TYPESIX_DISABLE_GUTENBERG_ALIGN_WIDE',        false ); }
    if ( ! defined( 'TYPESIX_DISABLE_GUTENBERG_CUSTOM_COLORIZER'  ) ) { define( 'TYPESIX_DISABLE_GUTENBERG_CUSTOM_COLORIZER',  true ); }
    if ( ! defined( 'TYPESIX_DISABLE_GUTENBERG_CUSTOM_FONT_SIZER' ) ) { define( 'TYPESIX_DISABLE_GUTENBERG_CUSTOM_FONT_SIZER', true ); }

    if ( ! defined( 'TYPESIX_ENABLE_GUTENBERG_DARK_BACKGROUNDS'   ) ) { define( 'TYPESIX_ENABLE_GUTENBERG_DARK_BACKGROUNDS',   false ); }
    if ( ! defined( 'TYPESIX_ENABLE_GUTENBERG_PUBLIC_STYLES'      ) ) { define( 'TYPESIX_ENABLE_GUTENBERG_PUBLIC_STYLES',      true ); }
    if ( ! defined( 'TYPESIX_ENABLE_GUTENBERG_RESPONSIVE_EMBEDS'  ) ) { define( 'TYPESIX_ENABLE_GUTENBERG_RESPONSIVE_EMBEDS',  true ); }



    if ( ! TYPESIX_DISABLE_GUTENBERG_ALIGN_WIDE )      add_theme_support( 'align-wide' );
    if ( TYPESIX_DISABLE_GUTENBERG_CUSTOM_COLORIZER )  add_theme_support( 'disable-custom-colors' );
    if ( TYPESIX_DISABLE_GUTENBERG_CUSTOM_FONT_SIZER ) add_theme_support( 'disable-custom-font-sizes' );

    if ( TYPESIX_ENABLE_GUTENBERG_DARK_BACKGROUNDS )   add_theme_support( 'dark-editor-style' );
    if ( TYPESIX_ENABLE_GUTENBERG_PUBLIC_STYLES )      add_theme_support( 'wp-block-styles' );
    if ( TYPESIX_ENABLE_GUTENBERG_RESPONSIVE_EMBEDS )  add_theme_support( 'responsive-embeds' );



	if ( defined( 'TYPESIX_ENABLE_PALETTE' ) && TYPESIX_ENABLE_PALETTE ) {

		$parent_palette_colors     = get_template_directory() . '/support/public-gutenberg/palette-' . TYPESIX_ENABLE_PALETTE . '-colors.php';
		$parent_palette_font_sizes = get_template_directory() . '/support/public-gutenberg/palette-' . TYPESIX_ENABLE_PALETTE . '-font-sizes.php';

		if ( file_exists( $parent_palette_colors ) )     require_once( $parent_palette_colors );
		if ( file_exists( $parent_palette_font_sizes ) ) require_once( $parent_palette_font_sizes );

	}



	$child_palette_colors     = get_stylesheet_directory() . '/includes/color-scheme.php';
	$child_palette_font_sizes = get_stylesheet_directory() . '/includes/font-sizes.php';

	if ( file_exists( $child_palette_colors ) )     require_once( $child_palette_colors );
	if ( file_exists( $child_palette_font_sizes ) ) require_once( $child_palette_font_sizes );
