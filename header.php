<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

	<head>

		<?php

			h_google_head_before();

			if ( GILAD_GOOGLE_TYPE == 'GAC' ) {

				?>

				<!-- Start [Classic] Google Analytics -->
				<script>
				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
				})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

				ga('create', '<?php echo GILAD_GOOGLE_CONTAINER_ID; ?>', 'auto');
				ga('send', 'pageview');
				</script>
				<!-- End [Classic] Google Analytics -->
				<?php

			} elseif ( GILAD_GOOGLE_TYPE == 'GAM' ) {

				?>

				<!-- Start [Modern] Google Analytics -->
				<script>
				window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
				ga('create', '<?php echo GILAD_GOOGLE_CONTAINER_ID; ?>', 'auto');
				ga('send', 'pageview');
				</script>
				<script async src='https://www.google-analytics.com/analytics.js'></script>
				<!-- End [Modern] Google Analytics -->
				<?php

			} elseif ( GILAD_GOOGLE_TYPE == 'GTM' ) {

				?>

				<!-- Start Google Tag Manager -->
				<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
				new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
				j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
				'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
				})(window,document,'script','dataLayer','<?php echo GILAD_GOOGLE_CONTAINER_ID; ?>');</script>
				<!-- End Google Tag Manager -->
				<?php

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

			if ( GILAD_GOOGLE_TYPE == 'GAC' ) {

				echo '<!--  TODO: COLLECT NOSCRIPT DATA WITH GA "CLASSIC"  -->';

			} elseif ( GILAD_GOOGLE_TYPE == 'GAM' ) {

				echo '<!--  TODO: COLLECT NOSCRIPT DATA WITH GA "MODERN"  -->';

			} elseif ( GILAD_GOOGLE_TYPE == 'GTM' ) {

				?>

				<!-- Start Google Tag Manager NoScript -->
				<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo GILAD_GOOGLE_CONTAINER_ID; ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
				<!-- End Google Tag Manager NoScript -->
				<?php

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
