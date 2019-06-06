<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>

		<?php

			h_google_head_before();

			if ( GILAD_GOOGLE_TYPE == 'GA' ) {

				echo '<!--  TODO: POUR GA MAIN SNIPPET HERE  -->';

			} elseif ( GILAD_GOOGLE_TYPE == 'GTM' ) {

				echo '<!--  TODO: POUR GTM MAIN SNIPPET HERE  -->';

			} else {

				echo '<!--  Google Analytics not enabled. Google Tag Manager not enabled.  -->';

			}

			h_google_head_after();

		?>

		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php h_metatags_add(); ?>

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<?php h_linktags_add(); ?>

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php

			h_google_body_before();

			if ( GILAD_GOOGLE_TYPE == 'GA' ) {

				echo '<!--  TODO: POUR GA BODY SNIPPET HERE  -->';

			} elseif ( GILAD_GOOGLE_TYPE == 'GTM' ) {

				echo '<!--  TODO: POUR GTM BODY SNIPPET HERE  -->';

			} else {

				echo '<!--  Google Analytics not enabled. Google Tag Manager not enabled.  -->';

			}

			h_google_body_after();

		?>

		<?php h_body_begin(); ?>

		<div id="body-liner">

			<?php h_body_liner_begin(); ?>

			<header id="body-header">

				<?php

					h_body_header();

				?>

			</header>

			<main class="<?php gilad_func_main_tag_classes(); ?>">

				<?php

					h_main_begin();
