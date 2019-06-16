<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

?>
<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header>

	<?php t_post_thumbnail(); ?>

	<div class="entry-content">

		<?php

			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', '_s' ),
				'after'  => '</div>',
			) );

		?>

	</div>

	<?php if ( get_edit_post_link() ) { ?>

		<footer class="entry-footer">

			<?php

				edit_post_link(
					sprintf(
						wp_kses(
							__( 'Edit <span class="screen-reader-text">%s</span>', '_s' ),
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
