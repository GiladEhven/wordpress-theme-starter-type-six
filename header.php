<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( ! class_exists( __NAMESPACE__ . 'Template_Header' ) ) {

        class Template_Header {

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

		<?php gilad_gtm_before(); ?>

		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','<?php echo GILAD_TGM_CONTAINER_ID; ?>');</script>

		<?php gilad_gtm_after(); ?>

		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php gilad_meta_add(); ?>

		<title><?php
			bloginfo( 'name' );
			echo ' | ';
			is_front_page() ? bloginfo( 'description' ) : wp_title( '' );
		?></title>

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<?php gilad_link_add(); ?>

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo GILAD_TGM_CONTAINER_ID; ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

		<?php gilad_body_begin(); ?>

		<div id="body">

			<?php gilad_wrapper_begin(); ?>

			<header>

				<?php

					gilad_header_begin();

					$template_header = new Template_Header();

					gilad_header_end();

				?>

			</header>

			<main>

				<?php

					gilad_main_begin();
