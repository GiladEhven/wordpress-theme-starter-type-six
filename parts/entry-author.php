<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



	global $wp_query;

	$current_author = $wp_query->get_queried_object();

    ?>



	<article id="author-<?php echo $current_author->user_nicename; ?>" <?php post_class( 'col-12' ); ?>>

		<header class="author-header row">

			<?php

				if ( has_action( 'h_entry_header' ) ) {

					h_entry_header();

				} else {

					echo '<h3 class="col-10 offset-1">This is the author header. Attach any design to this space by hooking into <code>h_entry_header()</code> at the child theme.</h3>';

				}

			?>

		</header>

		<section class="author-content row">

			<?php

				if ( has_action( 'h_entry_content' ) ) {

					h_entry_content();

				} else {

					echo '<h3 class="col-10 offset-1">This is the author content. Attach any design to this space by hooking into <code>h_entry_content()</code> at the child theme.</h3>';

				}

			?>

		</section>

		<footer class="author-footer row">

			<?php

				if ( has_action( 'h_entry_footer' ) ) {

					h_entry_footer();

				} else {

					echo '<h3 class="col-10 offset-1">This is the author footer. Attach any design to this space by hooking into <code>h_entry_footer()</code> at the child theme.</h3>';

				}

			?>

		</footer>

	</article>
