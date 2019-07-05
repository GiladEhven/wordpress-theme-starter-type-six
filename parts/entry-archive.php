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

		<header class="archive-header row">

			<?php

				if ( has_action( 'h_entry_header' ) ) {

					h_entry_header();

				} else {

					echo '<h3 class="col-10 offset-1">This is the archive header. Attach any design to this space by hooking into <code>h_entry_header()</code> at the child theme.</h3>';

				}

			?>

		</header>

		<section class="archive-content row">

			<?php

				if ( has_action( 'h_entry_content' ) ) {

					h_entry_content();

				} else {

					echo '<h3 class="col-10 offset-1">This is the archive content. Attach any design to this space by hooking into <code>h_entry_content()</code> at the child theme.</h3>';

				}

			?>

		</section>

		<footer class="archive-footer row">

			<?php

				if ( has_action( 'h_entry_footer' ) ) {

					h_entry_footer();

				} else {

					echo '<h3 class="col-10 offset-1">This is the archive footer. Attach any design to this space by hooking into <code>h_entry_footer()</code> at the child theme.</h3>';

				}

			?>

		</footer>

	</article>
