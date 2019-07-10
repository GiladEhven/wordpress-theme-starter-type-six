<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



    $common_entry_header = '<div class="col-12 h-common-content"><h4>This design is hooked into the entry header. This particular demo is not set within any document type detection conditional, so it displays on every template that uses the <code>h_entry_header()</code> action hook.</h4></div>';

    $in_container_begin = '<div class="row h"><div class="col-12">';
    $in_container_end   = '</div></div>';

    $in_row_begin       = '<div class="col-12 h">';
    $in_row_end         = '</div>';



	if ( ! has_action( 'h_body_begin' ) )                      add_action( 'h_body_begin',                      function() { echo '<div class="h-in-nothing">h_body_begin</div>'; });

	if ( ! has_action( 'h_body_header' ) )                     add_action( 'h_body_header',                     function() use( $in_container_begin, $in_container_end ) { echo $in_container_begin . '<div class="h-in-container">h_body_header</div>' . $in_container_end; });

	if ( ! has_action( 'h_main_before' ) )                     add_action( 'h_main_before',                     function() { echo '<div class="h-in-nothing">h_main_before</div>'; });

	if ( ! has_action( 'h_main_begin' ) )                      add_action( 'h_main_begin',                      function() use( $in_row_begin, $in_row_end ) { echo $in_row_begin . '<div class="h-in-row">h_main_begin</div>' . $in_row_end; });

	if ( ! has_action( 'h_get_template_part_before' ) )        add_action( 'h_get_template_part_before',        function() use( $in_row_begin, $in_row_end ) { echo $in_row_begin . '<div class="h-in-row">h_get_template_part_before</div>' . $in_row_end; });

	if ( ! has_action( 'h_get_template_part_after' ) )         add_action( 'h_get_template_part_after',         function() { echo '<div class="h-in-nothing">h_get_template_part_after</div>'; });

	if ( ! has_action( 'h_loop_if_begin' ) )                   add_action( 'h_loop_if_begin',                   function() use( $in_row_begin, $in_row_end ) { echo $in_row_begin . '<div class="h-in-row">h_loop_if_begin</div>' . $in_row_end; });

	if ( ! has_action( 'h_loop_while_begin' ) )                add_action( 'h_loop_while_begin',                function() use( $in_row_begin, $in_row_end ) { echo $in_row_begin . '<div class="h-in-row">h_loop_while_begin</div>' . $in_row_end; });

	if ( ! has_action( 'h_loop_entry_before' ) )               add_action( 'h_loop_entry_before',               function() use( $in_row_begin, $in_row_end ) { echo $in_row_begin . '<div class="h-in-row">h_loop_entry_before</div>' . $in_row_end; });





	if ( ! has_action( 'h_loop_entry_after' ) )                add_action( 'h_loop_entry_after',                function() { echo '<div class="h-in-nothing">h_loop_entry_after</div>'; });

	if ( ! has_action( 'h_loop_post_navigation_before' ) )     add_action( 'h_loop_post_navigation_before',     function() { echo '<div class="h-in-nothing">h_loop_post_navigation_before</div>'; });

	if ( ! has_action( 'h_loop_post_navigation_after' ) )      add_action( 'h_loop_post_navigation_after',      function() { echo '<div class="h-in-nothing">h_loop_post_navigation_after</div>'; });

	if ( ! has_action( 'h_loop_posts_navigation_before' ) )    add_action( 'h_loop_posts_navigation_before',    function() { echo '<div class="h-in-nothing">h_loop_posts_navigation_before</div>'; });

	if ( ! has_action( 'h_loop_posts_navigation_after' ) )     add_action( 'h_loop_posts_navigation_after',     function() { echo '<div class="h-in-nothing">h_loop_posts_navigation_after</div>'; });

	if ( ! has_action( 'h_loop_comments_before' ) )            add_action( 'h_loop_comments_before',            function() { echo '<div class="h-in-nothing">h_loop_comments_before</div>'; });

	if ( ! has_action( 'h_loop_comments_after' ) )             add_action( 'h_loop_comments_after',             function() { echo '<div class="h-in-nothing">h_loop_comments_after</div>'; });

	if ( ! has_action( 'h_loop_while_end' ) )                  add_action( 'h_loop_while_end',                  function() { echo '<div class="h-in-nothing">h_loop_while_end</div>'; });

	if ( ! has_action( 'h_loop_if_end' ) )                     add_action( 'h_loop_if_end',                     function() { echo '<div class="h-in-nothing">h_loop_if_end</div>'; });

	if ( ! has_action( 'h_loop_else_core' ) )                  add_action( 'h_loop_else_core',                  function() { echo '<div class="h-in-nothing">h_loop_else_core</div>'; });

//	TODO: THE FOLLOWING CAUSES HEADER OUTPUT ERRORS (RUNS CONCURRENTLY WITH CHILD THEME DEFAULT ACTION CALLS)

	if ( ! has_action( 'h_entry_header' ) )                    add_action( 'h_entry_header',                    function() use ( $common_entry_header ) { echo $common_entry_header; });

//	if ( ! has_action( 'h_entry_content' ) )                   add_action( 'h_entry_content',                   function() use ( $common_entry_content ) { echo $common_entry_content; });

//	if ( ! has_action( 'h_entry_footer' ) )                    add_action( 'h_entry_footer',                    function() { echo '<div class="h-in-nothing">h_entry_footer</div>'; });

	if ( ! has_action( 'h_entry_article_begin' ) )             add_action( 'h_entry_article_begin',             function() { echo '<div class="h-in-column">h_entry_article_begin</div>'; });

	if ( ! has_action( 'h_entry_article_content_before' ) )    add_action( 'h_entry_article_content_before',    function() { echo '<div class="h-in-column">h_entry_article_content_before</div>'; });

	if ( ! has_action( 'h_entry_article_content_after' ) )     add_action( 'h_entry_article_content_after',     function() { echo '<div class="h-in-nothing">h_entry_article_content_after</div>'; });

	if ( ! has_action( 'h_entry_article_end' ) )               add_action( 'h_entry_article_end',               function() { echo '<div class="h-in-nothing">h_entry_article_end</div>'; });

	if ( ! has_action( 'h_comments_before' ) )                 add_action( 'h_comments_before',                 function() { echo '<div class="h-in-nothing">h_comments_before</div>'; });

	if ( ! has_action( 'h_comments_begin' ) )                  add_action( 'h_comments_begin',                  function() { echo '<div class="h-in-nothing">h_comments_begin</div>'; });

	if ( ! has_action( 'h_comments_if_begin' ) )               add_action( 'h_comments_if_begin',               function() { echo '<div class="h-in-nothing">h_comments_if_begin</div>'; });

	if ( ! has_action( 'h_comments_header_begin' ) )           add_action( 'h_comments_header_begin',           function() { echo '<div class="h-in-nothing">h_comments_header_begin</div>'; });

	if ( ! has_action( 'h_comments_header_end' ) )             add_action( 'h_comments_header_end',             function() { echo '<div class="h-in-nothing">h_comments_header_end</div>'; });

	if ( ! has_action( 'h_comments_list_begin' ) )             add_action( 'h_comments_list_begin',             function() { echo '<div class="h-in-nothing">h_comments_list_begin</div>'; });

	if ( ! has_action( 'h_comments_list_end' ) )               add_action( 'h_comments_list_end',               function() { echo '<div class="h-in-nothing">h_comments_list_end</div>'; });

	if ( ! has_action( 'h_comments_if_end' ) )                 add_action( 'h_comments_if_end',                 function() { echo '<div class="h-in-nothing">h_comments_if_end</div>'; });

	if ( ! has_action( 'h_comments_else_begin' ) )             add_action( 'h_comments_else_begin',             function() { echo '<div class="h-in-nothing">h_comments_else_begin</div>'; });

	if ( ! has_action( 'h_comments_else_header' ) )            add_action( 'h_comments_else_header',            function() { echo '<div class="h-in-nothing">h_comments_else_header</div>'; });

	if ( ! has_action( 'h_comments_else_section' ) )           add_action( 'h_comments_else_section',           function() { echo '<div class="h-in-nothing">h_comments_else_section</div>'; });

	if ( ! has_action( 'h_comments_else_end' ) )               add_action( 'h_comments_else_end',               function() { echo '<div class="h-in-nothing">h_comments_else_end</div>'; });

	if ( ! has_action( 'h_main_end' ) )                        add_action( 'h_main_end',                        function() { echo '<div class="h-in-nothing">h_main_end</div>'; });

	if ( ! has_action( 'h_main_after' ) )                      add_action( 'h_main_after',                      function() { echo '<div class="h-in-nothing">h_main_after</div>'; });

//	TODO: THE FOLLOWING CAUSES HEADER OUTPUT ERRORS (RUNS CONCURRENTLY WITH CHILD THEME DEFAULT ACTION CALLS)

//	if ( ! has_action( 'h_body_footer' ) )                     add_action( 'h_body_footer',                     function() { echo '<div class="h-in-nothing">h_body_footer</div>'; });

	if ( ! has_action( 'h_body_end' ) )                        add_action( 'h_body_end',                        function() { echo '<div class="h-in-nothing">h_body_end</div>'; });
