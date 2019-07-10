<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' ); ?>



	<article id="front-page" <?php post_class( 'col-12' ); ?>>

		<?php h_entry_article_begin(); ?>

		<header class="front-page-header row">

			<?php

				if ( has_action( 'h_entry_header' ) ) {

					h_entry_header();

				} else {

					echo '<h3 class="col-10 offset-1">This is the front-page header. Attach any design to this space by hooking into <code>h_entry_header()</code> at the child theme.</h3>';

				}

			?>

		</header>

		<?php h_entry_article_content_before(); ?>

		<section class="front-page-content row">

			<?php

				if ( has_action( 'h_entry_content' ) ) {

					h_entry_content();

				} else {

					echo '<div class="col-12 h-common-content"><h4>This design/content is hooked into this space at <code>h_entry_content()</code> on Front Page only (within <code>entry-front-page.php</code>). Override at child via <code>is_front_page()</code>.</h4></div>';

				}

			?>

		</section>

		<?php h_entry_article_content_after(); ?>

		<footer class="front-page-footer row">

			<?php

				if ( has_action( 'h_entry_footer' ) ) {

					h_entry_footer();

				} else {

					echo '<h3 class="col-10 offset-1">This is the front-page footer. Attach any design to this space by hooking into <code>h_entry_footer()</code> at the child theme.</h3>';

				}

			?>

		</footer>

		<?php h_entry_article_end(); ?>

	</article>
