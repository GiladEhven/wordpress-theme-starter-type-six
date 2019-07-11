<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' ); ?>



	<article id="video-<?php the_ID(); ?>" <?php post_class( 'col-12' ); ?>>

		<?php h_video_entry_article_begin(); ?>

		<header class="video-header row">

			<?php

				if ( has_action( 'h_video_entry_header' ) ) {

					h_video_entry_header();

				} else {

					// Does in not display in "Design Mode" by default, as [modes/public-action-hooks.php] includes a sitewide hookable for this space (comment out the [h_entry_header] test/demo in [modes/public-action-hooks.php] to see template-specific hookables like the below at this location)

					echo '<div class="col-12 h-common-content"><h4>This design/content is hooked into this space at <strong><code>h_video_entry_header()</code></strong> on Video pages only (within <small><code>entry-video.php</code></small>). Override in child theme via <small><code>h_video_entry_header()</code></small> directly, rather than with type conditional (in general hookable).</h4></div>';

				}

			?>

		</header>

		<?php h_video_entry_content_before(); ?>

		<section class="video-content row">

			<?php

				if ( has_action( 'h_video_entry_content' ) ) {

					h_video_entry_content();

				} else {

					echo '<div class="col-12 h-common-content"><h4>This design/content is hooked into this space at <strong><code>h_video_entry_content()</code></strong> on Video pages only (within <small><code>entry-video.php</code></small>). Override in child theme via <small><code>h_video_entry_content()</code></small> directly, rather than with type conditional (in general hookable).</h4></div>';

				}

			?>

		</section>

		<?php h_video_entry_content_after(); ?>

		<footer class="video-footer row">

			<?php

				if ( has_action( 'h_video_entry_footer' ) ) {

					h_video_entry_footer();

				} else {

					echo '<div class="col-12 h-common-content"><h4>This design/content is hooked into this space at <strong><code>h_video_entry_footer()</code></strong> on Video pages only (within <small><code>entry-video.php</code></small>). Override in child theme via <small><code>h_video_entry_footer()</code></small> directly, rather than with type conditional (in general hookable).</h4></div>';

				}

			?>

		</footer>

		<?php h_video_entry_article_end(); ?>

	</article>
