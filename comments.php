<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

    if ( post_password_required() ) return;

    h_comments_before();

?>

<div class="<?php echo TYPESIX_CSS_CLASSES_FOR_COMMENTS; ?>" id="comments-area">

    <?php

        h_comments_begin();

        if ( have_comments() ) {

            h_comments_if_begin();

            ?>

            <header class="row" id="comments-header">

                <div class="<?php echo TYPESIX_CSS_CLASSES_FOR_COMMENTS_HEADER; ?>">

                    <?php h_comments_header_begin(); ?>

                    <h2>

                        <?php

                            $v_comment_count = get_comments_number();

                            // WPCS: XSS OK.
                            printf(

                                esc_html(

                                    _nx(

                                        'One comment on &ldquo;%2$s&rdquo;',
                                        '%1$s comments on &ldquo;%2$s&rdquo;',
                                        $v_comment_count,
                                        'comments title with number of comments',
                                        'wordpress-theme-starter-type-six'

                                    )

                                ),

                                number_format_i18n( $v_comment_count ), '<span>' . get_the_title() . '</span>'

                            );

                        ?>

                    </h2>

                    <?php h_comments_header_end(); ?>

                </div>

            </header>

            <section class="row" id="comments-list">

                <div class="<?php echo TYPESIX_CSS_CLASSES_FOR_COMMENTS_LIST; ?>">

                    <?php h_comments_list_begin(); ?>

                    <?php the_comments_navigation(); ?>

                    <<?php echo TYPESIX_SET_COMMENTS_STYLE; ?>>

                        <?php

                            wp_list_comments( array(

                                'avatar_size'      => TYPESIX_SET_COMMENTS_AVATAR_SIZE,
                                'reply_text'       => __( 'Respond to this comment', 'wordpress-theme-starter-type-six' ),
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

                    <?php h_comments_list_end(); ?>

                </div>

            </section>

            <?php

            h_comments_if_end();

        } else {

            h_comments_else_begin();

            ?>

                <header class="row" id="comments-header"><?php h_comments_else_header(); ?></header>

                <section class="row" id="comments-list"><?php h_comments_else_section(); ?></section>


            <?php

            h_comments_else_end();

        }

        ?>

        <footer class="row" id="comments-footer">

            <div class="<?php echo TYPESIX_CSS_CLASSES_FOR_COMMENTS_FOOTER; ?>">

                <?php

                    $aria_req      = ( $req ? " aria-required='true'" : '' );

                    $user_data     = get_userdata( get_current_user_id() );
                    $user_nicename = $user_data ? $user_data->user_nicename : 'no-one-logged-in';

                    comment_form( array(

                        'cancel_reply_after'   => '</small>',
                        'cancel_reply_before'  => '<small>',
                        'cancel_reply_link'    => __( 'Cancel reply to comment (return to regular reply form)', 'wordpress-theme-starter-type-six' ),
                        'class_form'           => 'comment-form',
                        'class_submit'         => 'submit-comment-form',
                        'comment_field'        => '<p class="comment-form-comment"><label for="comment">' . __( 'Comment', 'wordpress-theme-starter-type-six' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
                        'comment_notes_after'  => '<p class="form-allowed-tags">' . sprintf( __( 'The following HTML tags and attributes can be used in comments: %s', 'wordpress-theme-starter-type-six' ), ' <code>' . allowed_tags() . '</code>' ) . '</p>',
                        'comment_notes_before' => '<p>' . __( 'Your email address will not be shared.</p><p>Required fields are labeled in <strong>bold</strong>.', 'wordpress-theme-starter-type-six' ) . '</p>',

                        'fields'               => array(

                            'author'           => '<p class="comment-form-author"><label for="author">' . ( $req ? '<strong>' : '' ) . __( 'Name', 'wordpress-theme-starter-type-six' )  . ( $req ? '</strong>' : '' ) . '</label>' . '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
                            'email'            => '<p class="comment-form-email"><label for="email">'   . ( $req ? '<strong>' : '' ) . __( 'Email', 'wordpress-theme-starter-type-six' ) . ( $req ? '</strong>' : '' ) . '</label>' . '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
                            'url'              => '<p class="comment-form-url"><label for="url">'       . __( 'Website', 'wordpress-theme-starter-type-six' ) . '</label>' . '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>',

                        ),

                        'id_form'              => 'comment-form',
                        'id_submit'            => 'submit-comment-form',
                        'label_submit'         => __( 'Submit Comment', 'wordpress-theme-starter-type-six' ),
                        'logged_in_as'         => '<p class="logged-in-as">' . sprintf( __( 'Currently logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out now...">Log out</a> to comment anonymously (or log in with a different account to comment as that user).', 'wordpress-theme-starter-type-six' ), admin_url( 'profile.php' ), $user_nicename, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
                        'must_log_in'          => '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">signed in</a> to comment.', 'wordpress-theme-starter-type-six' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
                        'title_reply'          => __( 'Your thoughts are welcome!', 'wordpress-theme-starter-type-six' ),
                        'title_reply_after'    => '</h3>',
                        'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title">',
                        'title_reply_to'       => __( 'Reply to %s&rsquo;s comment', 'wordpress-theme-starter-type-six' ),

                    ) );

                ?>

            </div>

        </footer>

</div>
