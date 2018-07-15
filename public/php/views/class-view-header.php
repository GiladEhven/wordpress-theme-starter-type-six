<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

	class View_Header { public function __construct( $data ) {

	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	 *                                                                                                                       *
	 *    This file is for HEADER MAIN DESIGN ONLY! No chrome!                                                               *
	 *                                                                                                                       *
	 *    In [header.php]:    <!DOCTYPE html>                                                                                *
	 *                        <html <?php language_attributes(); ?>>                                                         *
	 *                                                                                                                       *
	 *                            <head>                                                                                     *
	 *                                                                                                                       *
	 *								  <!-- Google Tag Manager -->                                                            *
	 *								  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':                     *
	 *								  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],              *
	 *								  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=                  *
	 *								  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);     *
	 *								  })(window,document,'script','dataLayer','GTM-XXXX');</script>                          *
	 *								  <!-- End Google Tag Manager -->                                                        *
     *                                                                                                                       *
	 *                                <meta charset="<?php bloginfo( 'charset' ); ?>" />                                     *
	 *                                <meta http-equiv="X-UA-Compatible" content="IE=edge" />                                *
	 *								  <meta name="description" content="<?php bloginfo( 'description' ); ?>" />              *
	 *                                <meta name="viewport" content="width=device-width, initial-scale=1" />                 *
     *                                                                                                                       *
	 *                                <title><?php                                                                           *
	 *                                    bloginfo( 'name' );                                                                *
	 *                                    echo ' | ';                                                                        *
	 *                                    is_front_page() ? bloginfo( 'description' ) : wp_title( '' );                      *
	 *                                ?></title>                                                                             *
     *                                                                                                                       *
	 *                                <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />                    *
	 *                                <link rel="profile" href="http://gmpg.org/xfn/11" />                                   *
     *                                                                                                                       *
     *                                <?php wp_head(); ?>                                                                    *
     *                                                                                                                       *
     *                            </head>                                                                                    *
	 *                                                                                                                       *
     *                            <body <?php body_class(); ?>>                                                              *
	 *                                                                                                                       *
	 *								  <!-- Google Tag Manager (noscript) -->                                                 *
	 *								  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-XXXX"           *
	 *								  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>       *
	 *								  <!-- End Google Tag Manager (noscript) -->                                             *
	 *                                                                                                                       *
     *                                <div id="body">                                                                        *
	 *                                                                                                                       *
     *                                    <header>                                                                           *
	 *                                                                                                                       *
	 *    In this file:                       Everything between "DO NOT EDIT" lines                                         *
	 *                                                                                                                       *
     *    In [header.php]:                </header>                                                                          *
	 *                                                                                                                       *
     *                                    <main>                                                                             *
	 *                                                                                                                       *
	 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

	//  --------------------------  DO NOT EDIT ABOVE THIS LINE  --------------------------  //

			echo '<h1>' . $data['sample-one'] . ' ' . $data['sample-two'] . '</h1>';
			echo '<h2>And the above heading was assembled from two array values passed to a view (to demonstrate use of this theme\'s structure).</h2>';

	//  --------------------------  DO NOT EDIT BELOW THIS LINE  --------------------------  //

	} } // End [__construct] // End [class]
