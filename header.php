<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>

		<?php h_head_begin(); ?>

		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php h_head_add_meta_tags(); ?>

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<?php h_head_add_link_tags(); ?>

		<?php wp_head(); ?>

		<?php h_head_end(); ?>

	</head>

	<body <?php body_class( TYPESIX_CSS_CLASSES_FOR_BODY ); ?>>

		<?php h_body_begin(); ?>

		<header class="<?php echo TYPESIX_CSS_CLASSES_FOR_BODY_HEADER; ?>" id="body-header">

			<?php h_body_header(); ?>

		</header>

		<?php h_main_before(); ?>

		<main class="<?php echo TYPESIX_CSS_CLASSES_FOR_MAIN; ?>">

			<div class="row">

				<?php h_main_begin();
