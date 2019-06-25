<?php

	namespace Ehven\Gilad\WordPress\Themes\Children\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



	add_filter( 'gettext', function( $translated_text, $text, $domain ) {

		if ( is_404() ) {

			switch ( $translated_text ) {

				case 'And don&rsquo;t forget our monthly archives!' :
		//			$translated_text = __( 'And how about browsing our monthly archives?', 'wordpress-theme-starter-type-six' );
					break;

				case 'Most Active Categories' :
		//			$translated_text = __( 'Most Popular Categories', 'wordpress-theme-starter-type-six' );
					break;

				case 'Oops! You&rsquo;re looking for something that doesn&rsquo;t exist here...' :
		//			$translated_text = __( 'Oops... You&rsquo;re looking for something that doesn&rsquo;t exist or has moved.', 'wordpress-theme-starter-type-six' );
					break;

				case 'Try our handy search form, or the links on this page to browse the site.' :
		//			$translated_text = __( 'How about a quick search? Or follow some links to get you closer to your objective?', 'wordpress-theme-starter-type-six' );
					break;

			}

		} elseif ( is_category() ) {

			switch ( $translated_text ) {

				case 'Newer' :
		//			$translated_text = __( '&#171; Newer', 'wordpress-theme-starter-type-six' );
					break;

				case 'Older' :
		//			$translated_text = __( 'Older &#187;', 'wordpress-theme-starter-type-six' );
					break;

			}

		} elseif ( is_search() ) {

			switch ( $translated_text ) {

				case 'Next Results' :
		//			$translated_text = __( 'Next &#187;', 'wordpress-theme-starter-type-six' );
					break;

				case 'Previous Results' :
		//			$translated_text = __( '&#171; Previous', 'wordpress-theme-starter-type-six' );
					break;

			}

		}

		return $translated_text;


	}, 20, 3 );
