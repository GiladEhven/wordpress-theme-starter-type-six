<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( post_password_required() ) return;

?>

<div class="<?php echo TYPESIX_CSS_CLASSES_FOR_COMMENTS_AREA; ?>" id="comments-area">

    <?php

        if ( have_comments() ) {

            ?>

            <header class="<?php echo TYPESIX_CSS_CLASSES_FOR_COMMENTS_AREA_HEADER; ?>" id="comments-header">

                <h2>

                    <?php

                        $v_comment_count = get_comments_number();

                        // WPCS: XSS OK.
                        printf( esc_html( _nx( TYPESIX_SET_COMMENTS_TITLE_FOR_ONE, TYPESIX_SET_COMMENTS_TITLE_FOR_MORE, $v_comment_count, 'comments title', 'wordpress-theme-starter-type-six' ) ), number_format_i18n( $v_comment_count ), '<span>' . get_the_title() . '</span>' );

                    ?>

                </h2>

            </header>

            <section class="<?php echo TYPESIX_CSS_CLASSES_FOR_COMMENTS_AREA_LIST; ?>" id="comments-list">

            <?php the_comments_navigation(); ?>

            <<?php echo TYPESIX_SET_COMMENTS_STYLE; ?>>

                <?php

                    wp_list_comments( array(

                        'avatar_size'      => TYPESIX_SET_COMMENTS_AVATAR_SIZE,
                        'reply_text'       => TYPESIX_SET_COMMENTS_REPLY_TEXT,
                        'reverse_children' => TYPESIX_SET_COMMENTS_REVERSE_CHILDREN,
                        'style'            => TYPESIX_SET_COMMENTS_STYLE,
                        'type'             => TYPESIX_SET_COMMENTS_TYPE,

                    ) );

                ?>

            </<?php echo TYPESIX_SET_COMMENTS_STYLE; ?>>

            <?php

                the_comments_navigation();

                if ( ! comments_open() ) {

                    ?><p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'wordpress-theme-starter-type-six' ); ?></p><?php
                }

            ?>

            </section>

            <?php

        } else {

            ?>

                <header class="<?php echo TYPESIX_CSS_CLASSES_FOR_COMMENTS_AREA_HEADER; ?>" id="comments-header"></header>

                <section class="<?php echo TYPESIX_CSS_CLASSES_FOR_COMMENTS_AREA_LIST; ?>" id="comments-list"></section>


            <?php

        }

        ?>

        <footer class="<?php echo TYPESIX_CSS_CLASSES_FOR_COMMENTS_AREA_FOOTER; ?>" id="comments-footer">

            <?php

                comment_form( array(

                    'comment_field'        => TYPESIX_SET_COMMENT_FORM_FIELD_COMMENT,
                    'comment_notes_after'  => TYPESIX_SET_COMMENT_FORM_NOTES_AFTER_BOX,
                    'comment_notes_before' => TYPESIX_SET_COMMENT_FORM_NOTES_BEFORE_BOX,

                    'fields'               => array(

                        'author'           => TYPESIX_SET_COMMENT_FORM_FIELD_AUTHOR,
                        'email'            => TYPESIX_SET_COMMENT_FORM_FIELD_EMAIL,
                        'url'              => TYPESIX_SET_COMMENT_FORM_FIELD_URL,

                    ),

                    'label_submit'         => TYPESIX_SET_COMMENT_FORM_SUBMIT,
                    'logged_in_as'         => TYPESIX_SET_COMMENT_FORM_LOGGED_IN_AS,
                    'must_log_in'          => TYPESIX_SET_COMMENT_FORM_MUST_LOG_IN,
                    'title_reply'          => TYPESIX_SET_COMMENT_FORM_TITLE,
                    'title_reply_after'    => TYPESIX_SET_COMMENT_FORM_REPLY_AFTER,
                    'title_reply_before'   => TYPESIX_SET_COMMENT_FORM_REPLY_BEFORE,
                    'title_reply_to'       => TYPESIX_SET_COMMENT_FORM_REPLY_TO,

                ) );

            ?>

        </footer>

</div>
