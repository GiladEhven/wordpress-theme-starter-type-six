<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( post_password_required() ) return;

    ?>

                <section id="comments"><?php

                    if ( have_comments() ) {

                        // $template_comment = new Template_Comment();

                    } else {

                        //

                    }

                    comment_form(); ?>

                </section>
