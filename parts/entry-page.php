<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

?>
<article id="page-<?php the_ID(); ?>" <?php post_class( TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE ); ?>>

	<header class="<?php echo TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_HEADER; ?>">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header>

	<?php t_post_thumbnail(); ?>

	<section class="<?php echo TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_SECTION; ?>">

		<?php

			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wordpress-theme-starter-type-six' ),
				'after'  => '</div>',
			) );

		?>

	</section>

	<?php if ( get_edit_post_link() ) { ?>

		<footer class="<?php echo TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_FOOTER; ?>">

			<?php

				edit_post_link(
					sprintf(
						wp_kses(
							__( 'Edit <span class="screen-reader-text">%s</span>', 'wordpress-theme-starter-type-six' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);

			?>

		</footer>

	<?php } ?>

</article>
