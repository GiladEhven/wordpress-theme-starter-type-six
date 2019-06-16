<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

		<?php

			if ( is_singular() ) {

				the_title( '<h1 class="entry-title">', '</h1>' );

			} else {

				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

			if ( 'post' === get_post_type() ) {

				?>
				<div class="entry-meta">

					<?php

						t_posted_on();

						t_posted_by();

					?>

				</div><?php

			}

		?>

	</header>

	<?php t_post_thumbnail(); ?>

	<div class="entry-content">

		<?php

			the_content( sprintf(
				wp_kses(
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', '_s' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
				'after'  => '</div>',
			) );

		?>

	</div>

	<footer class="entry-footer">

		<?php t_entry_meta(); ?>

	</footer>

</article>
