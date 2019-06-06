<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

                    gilad_hook_main_end();

                ?>

			</main>

			<footer id="body-footer">

                <?php

                    gilad_hook_body_footer();

                ?>

			</footer>

            <?php gilad_hook_body_liner_end(); ?>

		</div>

        <?php

            gilad_hook_body_end();

            wp_footer();

        ?>

	</body>

</html>
