<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



                h_main_end(); ?>

            </div>

		</main>

        <?php h_main_after(); ?>

		<footer class="<?php echo TYPESIX_CSS_CLASSES_FOR_BODY_FOOTER; ?>" id="body-footer">

            <?php h_body_footer(); ?>

		</footer>

        <?php

            h_body_end();

            wp_footer();

        ?>

	</body>

</html>
