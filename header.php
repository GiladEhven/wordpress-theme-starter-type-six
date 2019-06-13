<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

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

	<body <?php body_class(); ?>>

		<?php h_body_begin(); ?>

		<div id="body-liner">

			<?php h_body_liner_begin(); ?>

			<header id="body-header">

				<?php h_body_header(); ?>

			</header>

			<main>

				<?php h_main_begin();
