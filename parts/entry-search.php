<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

?>
<article id="hit-<?php the_ID(); ?>" <?php post_class( TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE ); ?>>

	<header class="<?php echo TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_HEADER; ?>">

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

	<section class="<?php echo TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_SECTION; ?>">

		<?php the_excerpt(); ?>

	</section>

	<footer class="<?php echo TYPESIX_CSS_CLASSES_FOR_ENTRY_ARTICLE_FOOTER; ?>">

		<?php t_entry_meta(); ?>

	</footer>

</article>
