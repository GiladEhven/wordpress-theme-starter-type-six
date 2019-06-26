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

		} elseif ( is_singular() ) {

			switch ( $translated_text ) {

				case 'Cancel reply to comment (return to regular reply form)' :
		//			$translated_text = __( 'Cancel reply direct to comment', 'wordpress-theme-starter-type-six' );
					break;

				case 'Comment' :
		//			$translated_text = __( 'Your Comment', 'wordpress-theme-starter-type-six' );
					break;

				case 'Currently logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out now...">Log out</a> to comment anonymously (or log in with a different account to comment as that user).' :
		//			$translated_text = __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out now...">Log out?</a>', 'wordpress-theme-starter-type-six' );
					break;

				case 'Email' :
		//			$translated_text = __( 'Your Email', 'wordpress-theme-starter-type-six' );
					break;

				case 'Name' :
		//			$translated_text = __( 'Your Name', 'wordpress-theme-starter-type-six' );
					break;

				case 'Reply to %s&rsquo;s comment' :
		//			$translated_text = __( 'Comment on %s&rsquo;s comment', 'wordpress-theme-starter-type-six' );
					break;

				case 'Respond to this comment' :
		//			$translated_text = __( 'Reply to this comment', 'wordpress-theme-starter-type-six' );
					break;

				case 'Submit Comment' :
		//			$translated_text = __( 'Submit Comment Now', 'wordpress-theme-starter-type-six' );
					break;

				case 'The following HTML tags and attributes can be used in comments: %s' :
		//			$translated_text = __( 'You may use the following HTML tags and attributes in your comment: %s', 'wordpress-theme-starter-type-six' );
					break;

				case 'Website' :
		//			$translated_text = __( 'Your Website', 'wordpress-theme-starter-type-six' );
					break;

				case 'You must be <a href="%s">signed in</a> to comment.' :
		//			$translated_text = __( 'You must be <a href="%s">logged in</a> to submit a comment.', 'wordpress-theme-starter-type-six' );
					break;

				case 'Your email address will not be shared.</p><p>Required fields are labeled in <strong>bold</strong>.' :
		//			$translated_text = __( 'Your email address will not be shared with anyone.</p><p>Fields labeled in <strong>bold</strong> are required.', 'wordpress-theme-starter-type-six' );
					break;

				case 'Your thoughts are welcome!' :
		//			$translated_text = __( 'Something to say?', 'wordpress-theme-starter-type-six' );
					break;

			}

		}

		return $translated_text;


	}, 20, 3 );
