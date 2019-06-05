<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

            gilad_main_end(); ?>

			</main>

			<footer>

			    <?php

                    gilad_footer_begin();

                    // $template_footer = new Template_Footer();

                    gilad_footer_end();

                ?>

			</footer>

            <?php gilad_wrapper_end(); ?>

		</div>

        <?php

            gilad_body_end();

            wp_footer();

        ?>

	</body>

</html>
