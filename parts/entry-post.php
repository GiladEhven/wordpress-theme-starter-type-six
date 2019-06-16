<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE ); ?>>

	<header class="<?php echo TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_HEADER; ?>">

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

	<section class="<?php echo TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_SECTION; ?>">

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

	</section>

	<footer class="<?php echo TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_FOOTER; ?>">

		<?php t_entry_meta(); ?>

	</footer>

</article>
