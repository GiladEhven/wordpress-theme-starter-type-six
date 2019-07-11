<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



    if ( is_category() ) {

    	$archive_type = 'category';

    } elseif ( is_date() ) {

    	$archive_type = 'date';

    } elseif ( is_search() ) {

    	$archive_type = 'search';

    } elseif ( is_tag() ) {

    	$archive_type = 'tag';

    } elseif ( is_tax() ) {

    	$archive_type = 'taxonomy';

    } else {

    	$archive_type = 'unspecified';

    }

    ?>



	<article id="archive-<?php echo $archive_type . strtolower( single_term_title( '-', false ) ); ?>" <?php post_class( 'col-12' ); ?>>

		<?php h_entry_article_begin(); ?>

		<header class="archive-header row">

			<?php

				if ( has_action( 'h_entry_header' ) ) {

					h_entry_header();

				} else {

					// Does in not display in "Design Mode" by default, as [modes/public-action-hooks.php] includes a sitewide hookable for this space (comment out the [h_entry_header] test/demo in [modes/public-action-hooks.php] to see template-specific hookables like the below at this location)

					echo '<div class="col-12 h-common-content"><h4>This design/content is hooked into this space at <strong><code>h_entry_header()</code></strong> on Archive pages (within <small><code>entry-archive.php</code></small>). Override in child theme with <small><code>is_archive()</code></small>.</h4></div>';

				}

			?>

		</header>

		<?php h_entry_article_content_before(); ?>

		<section class="archive-content row">

			<?php

				if ( has_action( 'h_entry_content' ) ) {

					h_entry_content();

				} else {

					echo '<div class="col-12 h-common-content"><h4>This design/content is hooked into this space at <strong><code>h_entry_content()</code></strong> on Archive pages (within <small><code>entry-archive.php</code></small>). Override in child theme with <small><code>is_archive()</code></small>.</h4></div>';

				}

			?>

		</section>

		<?php h_entry_article_content_after(); ?>

		<footer class="archive-footer row">

			<?php

				if ( has_action( 'h_entry_footer' ) ) {

					h_entry_footer();

				} else {

					echo '<div class="col-12 h-common-content"><h4>This design/content is hooked into this space at <strong><code>h_entry_footer()</code></strong> on Archive pages (within <small><code>entry-archive.php</code></small>). Override in child theme with <small><code>is_archive()</code></small>.</h4></div>';

				}

			?>

		</footer>

		<?php h_entry_article_end(); ?>

	</article>
