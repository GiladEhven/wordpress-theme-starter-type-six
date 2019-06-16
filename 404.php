<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    get_header();

    	h_template_before();

    		?>

                <div class="<?php echo TYPESIX_CSS_CLASSES_FOR_H_TEMPLATE; ?>" id="h-template-404">

                    <?php

                        h_get_template_part_before();

                        get_template_part( 'parts/static', '404' );

                        h_get_template_part_after();

                    ?>

                </div>

		    <?php

		h_template_after();

    get_footer();
