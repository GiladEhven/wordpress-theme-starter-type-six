<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



    function h_head_begin()                      { do_action( 'h_head_begin' );                      }
    function h_head_add_meta_tags()              { do_action( 'h_head_add_meta_tags' );              }
    function h_head_add_link_tags()              { do_action( 'h_head_add_link_tags' );              }
    function h_head_end()                        { do_action( 'h_head_end' );                        }

    function h_body_begin()                      { do_action( 'h_body_begin' );                      }
    function h_body_header()                     { do_action( 'h_body_header' );                     }
    function h_main_before()                     { do_action( 'h_main_before' );                     }
    function h_main_begin()                      { do_action( 'h_main_begin' );                      }

    function h_get_template_part_before()        { do_action( 'h_get_template_part_before' );        }
    function h_get_template_part_after()         { do_action( 'h_get_template_part_after' );         }

    function h_loop_if_begin()                   { do_action( 'h_loop_if_begin' );                   }
    function h_loop_while_begin()                { do_action( 'h_loop_while_begin' );                }
    function h_loop_entry_before()               { do_action( 'h_loop_entry_before' );               }
    function h_loop_entry_after()                { do_action( 'h_loop_entry_after' );                }
    function h_loop_post_navigation_before()     { do_action( 'h_loop_post_navigation_before' );     }
    function h_loop_post_navigation_after()      { do_action( 'h_loop_post_navigation_after' );      }
    function h_loop_posts_navigation_before()    { do_action( 'h_loop_posts_navigation_before' );    }
    function h_loop_posts_navigation_after()     { do_action( 'h_loop_posts_navigation_after' );     }
    function h_loop_comments_before()            { do_action( 'h_loop_comments_before' );            }
    function h_loop_comments_after()             { do_action( 'h_loop_comments_after' );             }
    function h_loop_while_end()                  { do_action( 'h_loop_while_end' );                  }
    function h_loop_if_end()                     { do_action( 'h_loop_if_end' );                     }
    function h_loop_else_core()                  { do_action( 'h_loop_else_core' );                  }

    function h_entry_header()                    { do_action( 'h_entry_header' );                    }
    function h_entry_content()                   { do_action( 'h_entry_content' );                   }
    function h_entry_footer()                    { do_action( 'h_entry_footer' );                    }

    function h_main_end()                        { do_action( 'h_main_end' );                        }
    function h_main_after()                      { do_action( 'h_main_after' );                      }
    function h_body_footer()                     { do_action( 'h_body_footer' );                     }
    function h_body_end()                        { do_action( 'h_body_end' );                        }
