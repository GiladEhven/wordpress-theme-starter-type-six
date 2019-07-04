<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' ); ?>



	<article id="audio-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header class="audio-header">

			<?php

				if ( has_action( 'h_entry_header' ) ) {

					h_entry_header();

				} else {

					echo '<h3>This is the audio header. Attach any design to this space by hooking into <code>h_entry_header()</code> at the child theme.</h3>';

				}

			?>

		</header>

		<section class="audio-content">

			<?php

				if ( has_action( 'h_entry_content' ) ) {

					h_entry_content();

				} else {

					echo '<h3>This is the audio content. Attach any design to this space by hooking into <code>h_entry_content()</code> at the child theme.</h3>';

				}

			?>

		</section>

		<footer class="audio-footer">

			<?php

				if ( has_action( 'h_entry_footer' ) ) {

					h_entry_footer();

				} else {

					echo '<h3>This is the audio footer. Attach any design to this space by hooking into <code>h_entry_footer()</code> at the child theme.</h3>';

				}

			?>

		</footer>

	</article>
