<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Header' ) ) {

        class Template_Header {

            private $requested_resource;

            private $text_domain;

            public static $object_counter = 0;

            public function __construct() {

                if ( is_admin() ) {

                	//

                } else {

                	$data = $this->get_acf_data();

                }

                self::$object_counter++;

                $this->set_requested_resource();

                require_once( get_stylesheet_directory() . '/public/php/views/class-view-header.php' );
                $view_header = new View_Header( $data );

            }

            //  -------------------------  GETTERS AND SETTERS  -------------------------  //

            public function get_requested_resource() {
                return $this->requested_resource;
            }

            protected function set_requested_resource() {
                $this->requested_resource = 'undetermined';
            }

            //  ----------------------------  MISSION LOGIC  ----------------------------  //

            protected function get_acf_data() {

                	$data = array();

                	$data['sample-one'] = 'This is a';
                	$data['sample-two'] = 'HEADER type...';

                	return $data;

            }

        }

    }

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>

		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-XXXX');</script>
		<!-- End Google Tag Manager -->

		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<title><?php
			bloginfo( 'name' );
			echo ' | ';
			is_front_page() ? bloginfo( 'description' ) : wp_title( '' );
		?></title>

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="profile" href="http://gmpg.org/xfn/11" />

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-XXXX"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

		<div id="body">

			<header>

				<?php $template_header = new Template_Header(); ?>

			</header>

			<main>
