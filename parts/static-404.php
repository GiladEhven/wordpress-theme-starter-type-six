<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

?>

					<header>

						<h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wordpress-theme-starter-type-six' ); ?></h1>

					</header>

					<section>

						<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'wordpress-theme-starter-type-six' ); ?></p>

						<?php

							get_search_form();

							the_widget( 'WP_Widget_Recent_Posts' );

						?>

						<div class="widget widget_categories">

							<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'wordpress-theme-starter-type-six' ); ?></h2>

							<ul>
								<?php
									wp_list_categories( array(
										'orderby'    => 'count',
										'order'      => 'DESC',
										'show_count' => 1,
										'title_li'   => '',
										'number'     => 10,
									) );
								?>
							</ul>

						</div>

						<?php

							$_s_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'wordpress-theme-starter-type-six' ), convert_smilies( ':)' ) ) . '</p>';

							the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$_s_archive_content" );

							the_widget( 'WP_Widget_Tag_Cloud' );

						?>

					</section>

					<footer>

					</footer>
