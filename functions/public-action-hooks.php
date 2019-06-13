<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



    function h_metatags_add()                  { do_action( 'h_metatags_add' );               }
    function h_linktags_add()                  { do_action( 'h_linktags_add' );               }
    function h_body_begin()                    { do_action( 'h_body_begin' );                 }
    function h_body_liner_begin()              { do_action( 'h_body_liner_begin' );           }
    function h_body_header()                   { do_action( 'h_body_header' );                }
    function h_main_begin()                    { do_action( 'h_main_begin' );                 }



    function h_template_404_before()           { do_action( 'h_template_404_before' );        }
    function h_template_404()                  { do_action( 'h_template_404' );               }
    function h_template_404_after()            { do_action( 'h_template_404_after' );         }

    function h_template_before()               { do_action( 'h_template_before' );            }
    function h_template_begin()                { do_action( 'h_template_begin' );             }
    function h_template_end()                  { do_action( 'h_template_end' );               }
    function h_template_after()                { do_action( 'h_template_after' );             }

    function h_template_front_page_before()    { do_action( 'h_template_front_page_before' ); }
    function h_template_front_page()           { do_action( 'h_template_front_page' );        }
    function h_template_front_page_after()     { do_action( 'h_template_front_page_after' );  }



    function h_main_end()                      { do_action( 'h_main_end' );                   }
    function h_body_footer()                   { do_action( 'h_body_footer' );                }
    function h_body_liner_end()                { do_action( 'h_body_liner_end' );             }
    function h_body_end()                      { do_action( 'h_body_end' );                   }
