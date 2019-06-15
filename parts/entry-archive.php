<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

?>
<article id="doc-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) { ?>

		<div class="entry-meta">

			<?php

				t_posted_on();

				t_posted_by();

			?>

		</div>

		<?php } ?>

	</header>

	<?php t_post_thumbnail(); ?>

	<section>

		<?php the_excerpt(); ?>

	</section>

	<footer>

		<?php t_entry_meta(); ?>

	</footer>

</article>
