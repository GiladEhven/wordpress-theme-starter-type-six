<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



    function h_head_begin()                     { do_action( 'h_head_begin' );                     }
    function h_head_add_meta_tags()             { do_action( 'h_head_add_meta_tags' );             }
    function h_head_add_link_tags()             { do_action( 'h_head_add_link_tags' );             }
    function h_head_end()                       { do_action( 'h_head_end' );                       }

    function h_body_begin()                     { do_action( 'h_body_begin' );                     }
    function h_body_liner_begin()               { do_action( 'h_body_liner_begin' );               }
    function h_body_header()                    { do_action( 'h_body_header' );                    }
    function h_main_begin()                     { do_action( 'h_main_begin' );                     }

    function h_template_before()                { do_action( 'h_template_before' );                }
    function h_template_begin()                 { do_action( 'h_template_begin' );                 }
    function h_template_core()                  { do_action( 'h_template_core' );                  }
    function h_template_end()                   { do_action( 'h_template_end' );                   }
    function h_template_after()                 { do_action( 'h_template_after' );                 }

    function h_loop_if_begin()                  { do_action( 'h_loop_if_begin' );                  }
    function h_loop_while_begin()               { do_action( 'h_loop_while_begin' );               }
    function h_loop_entry_before()              { do_action( 'h_loop_entry_before' );              }
    function h_loop_entry_after()               { do_action( 'h_loop_entry_after' );               }
    function h_loop_post_navigation_before()    { do_action( 'h_loop_post_navigation_before' );    }
    function h_loop_post_navigation_after()     { do_action( 'h_loop_post_navigation_after' );     }
    function h_loop_comments_before()           { do_action( 'h_loop_comments_before' );           }
    function h_loop_comments_after()            { do_action( 'h_loop_comments_after' );            }
    function h_loop_while_end()                 { do_action( 'h_loop_while_end' );                 }
    function h_loop_if_end()                    { do_action( 'h_loop_if_end' );                    }
    function h_loop_else_core()                 { do_action( 'h_loop_else_core' );                 }

    function h_main_end()                       { do_action( 'h_main_end' );                       }
    function h_body_footer()                    { do_action( 'h_body_footer' );                    }
    function h_body_liner_end()                 { do_action( 'h_body_liner_end' );                 }
    function h_body_end()                       { do_action( 'h_body_end' );                       }
