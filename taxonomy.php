<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    get_header();

    	h_template_before();

    		?>

                <div class="<?php echo TYPESIX_CSS_CLASSES_FOR_H_TEMPLATE; ?>" id="h-template-taxonomy">

                    <?php

                        h_template_begin();

                        get_template_part( 'parts/loop', get_post_type() );

                        h_template_end();

                    ?>

                </div>

		    <?php

		h_template_after();

    get_footer();
