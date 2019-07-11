<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

?>

	<article id="error-not-found" <?php post_class( 'col-12' ); ?>>

		<header class="404-header row">

			<?php

				if ( has_action( 'h_entry_header' ) ) {

					h_entry_header();

				} else {

					// Does in not display in "Design Mode" by default, as [modes/public-action-hooks.php] includes a sitewide hookable for this space (comment out the [h_entry_header] test/demo in [modes/public-action-hooks.php] to see template-specific hookables like the below at this location)

					echo '<div class="col-12 h-common-content"><h4>This design/content is hooked into this space at <strong><code>h_entry_header()</code></strong> on 404 pages only (within <small><code>static-404.php</code></small>). Override in child theme with <small><code>is_404()</code></small>.</h4></div>';

				}

			?>

		</header>

		<section class="404-content row">

			<?php

				if ( has_action( 'h_entry_content' ) ) {

					h_entry_content();

				} else {

					echo '<div class="col-12 h-common-content"><h4>This design/content is hooked into this space at <strong><code>h_entry_content()</code></strong> on 404 pages only (within <small><code>static-404.php</code></small>). Override in child theme with <small><code>is_404()</code></small>.</h4></div>';

				}

			?>

		</section>

		<footer class="404-footer row">

			<?php

				if ( has_action( 'h_entry_footer' ) ) {

					h_entry_footer();

				} else {

					echo '<div class="col-12 h-common-content"><h4>This design/content is hooked into this space at <strong><code>h_entry_footer()</code></strong> on 404 pages only (within <small><code>static-404.php</code></small>). Override in child theme with <small><code>is_404()</code></small>.</h4></div>';

				}

			?>

		</footer>

	</article>
