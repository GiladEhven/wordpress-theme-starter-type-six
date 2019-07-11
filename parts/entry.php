<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' ); ?>



	<article id="generic-entry-<?php the_ID(); ?>" <?php post_class( 'col-12' ); ?>>

		<?php h_entry_article_begin(); ?>

		<header class="generic-entry-header row">

			<?php

				if ( has_action( 'h_entry_header' ) ) {

					h_entry_header();

				} else {

					// Does in not display in "Design Mode" by default, as [modes/public-action-hooks.php] includes a sitewide hookable for this space (comment out the [h_entry_header] test/demo in [modes/public-action-hooks.php] to see template-specific hookables like the below at this location)

					echo '<div class="col-12 h-common-content"><h4>This design/content is hooked into this space at <strong><code>h_entry_header()</code></strong> on untemplated pages only (within <small><code>entry.php</code></small>). Override in child theme with <small><code>post_type_exists()</code></small>, <small><code>is_single()</code></small>, <small><code>is_post_type_archive()</code></small>, etc.</h4></div>';

				}

			?>

		</header>

		<?php h_entry_article_content_before(); ?>

		<section class="generic-entry-content row">

			<?php

				if ( has_action( 'h_entry_content' ) ) {

					h_entry_content();

				} else {

					echo '<div class="col-12 h-common-content"><h4>This design/content is hooked into this space at <strong><code>h_entry_content()</code></strong> on untemplated pages only (within <small><code>entry.php</code></small>). Override in child theme with <small><code>post_type_exists()</code></small>, <small><code>is_single()</code></small>, <small><code>is_post_type_archive()</code></small>, etc.</h4></div>';

				}

			?>

		</section>

		<?php h_entry_article_content_after(); ?>

		<footer class="generic-entry-footer row">

			<?php

				if ( has_action( 'h_entry_footer' ) ) {

					h_entry_footer();

				} else {

					echo '<div class="col-12 h-common-content"><h4>This design/content is hooked into this space at <strong><code>h_entry_footer()</code></strong> on untemplated pages only (within <small><code>entry.php</code></small>). Override in child theme with <small><code>post_type_exists()</code></small>, <small><code>is_single()</code></small>, <small><code>is_post_type_archive()</code></small>, etc.</h4></div>';

				}

			?>

		</footer>

		<?php h_entry_article_end(); ?>

	</article>
