<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' ); ?>



	<article id="date-archive" <?php post_class( 'col-12' ); ?>>

		<?php h_entry_article_begin(); ?>

		<header class="date-header row">

			<?php

				if ( has_action( 'h_entry_header' ) ) {

					h_entry_header();

				} else {

					// Does in not display in "Design Mode" by default, as [modes/public-action-hooks.php] includes a sitewide hookable for this space (comment out the [h_entry_header] test/demo in [modes/public-action-hooks.php] to see template-specific hookables like the below at this location)

					echo '<div class="col-12 h-common-content"><h4>This design/content is hooked into this space at <strong><code>h_entry_header()</code></strong> on Date archive pages only (within <small><code>entry-date.php</code></small>). Override in child theme with <small><code>is_date()</code></small>, <small><code>is_time()</code></small>, <small><code>is_day()</code></small>, <small><code>is_month()</code></small>, and <small><code>is_year()</code></small>.</h4></div>';

				}

			?>

		</header>

		<?php h_entry_article_content_before(); ?>

		<section class="date-content row">

			<?php

				if ( has_action( 'h_entry_content' ) ) {

					h_entry_content();

				} else {

					echo '<div class="col-12 h-common-content"><h4>This design/content is hooked into this space at <strong><code>h_entry_content()</code></strong> on Date archive pages only (within <small><code>entry-date.php</code></small>). Override in child theme with <small><code>is_date()</code></small>, <small><code>is_time()</code></small>, <small><code>is_day()</code></small>, <small><code>is_month()</code></small>, and <small><code>is_year()</code></small>.</h4></div>';

				}

			?>

		</section>

		<?php h_entry_article_content_after(); ?>

		<footer class="date-footer row">

			<?php

				if ( has_action( 'h_entry_footer' ) ) {

					h_entry_footer();

				} else {

					echo '<div class="col-12 h-common-content"><h4>This design/content is hooked into this space at <strong><code>h_entry_footer()</code></strong> on Date archive pages only (within <small><code>entry-date.php</code></small>). Override in child theme with <small><code>is_date()</code></small>, <small><code>is_time()</code></small>, <small><code>is_day()</code></small>, <small><code>is_month()</code></small>, and <small><code>is_year()</code></small>.</h4></div>';

				}

			?>

		</footer>

		<?php h_entry_article_end(); ?>

	</article>
