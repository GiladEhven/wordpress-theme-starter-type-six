<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



    $common_entry_header = '<div class="col-12 h-common-content"><h3>This design/content is hooked into this space at <code>h_entry_header()</code> on <strong>all templates that support the <code>h_entry_header()</code> theme action hook</strong>, because it is implemented globally, rather than within a particular template, and without any template type detection conditional. Override in child theme with <small><code>h_entry_header()</code></small>, and add template type conditionals as required.</h3></div>';

    $in_container_begin = '<div class="row h"><div class="col-12"><div class="h-in-container"><h6 class="code">';
    $in_container_end   = '</h6></div></div></div>';

    $in_row_begin       = '<div class="col-12 h"><div class="h-in-row"><h6 class="code">';
    $in_row_end         = '</h6></div></div>';

    $in_deep_row_begin  = '<div class="row d"><div class="col-12"><div class="h-in-deep-row"><h6 class="code">';
    $in_deep_row_end    = '</h6></div></div></div>';

    $in_column_begin    = '<div class="h-in-column"><h6 class="code">';
    $in_column_end      = '</h6></div>';

    $in_nothing_begin   = '<div class="h-in-nothing"><h6 class="code">';
    $in_nothing_end     = '</h6></div>';



	if ( ! has_action( 'h_body_begin' ) )                      add_action( 'h_body_begin',                      function() use( $in_nothing_begin,   $in_nothing_end )   { echo $in_nothing_begin   . 'h_body_begin'                   . $in_nothing_end; });

	if ( ! has_action( 'h_body_header' ) )                     add_action( 'h_body_header',                     function() use( $in_container_begin, $in_container_end ) { echo $in_container_begin . 'h_body_header'                  . $in_container_end; });

	if ( ! has_action( 'h_main_before' ) )                     add_action( 'h_main_before',                     function() use( $in_nothing_begin,   $in_nothing_end )   { echo $in_nothing_begin   . 'h_main_before'                  . $in_nothing_end; });

	if ( ! has_action( 'h_main_begin' ) )                      add_action( 'h_main_begin',                      function() use( $in_row_begin,       $in_row_end )       { echo $in_row_begin       . 'h_main_begin'                   . $in_row_end; });

	if ( ! has_action( 'h_get_template_part_before' ) )        add_action( 'h_get_template_part_before',        function() use( $in_row_begin,       $in_row_end )       { echo $in_row_begin       . 'h_get_template_part_before'     . $in_row_end; });

	if ( ! has_action( 'h_get_template_part_after' ) )         add_action( 'h_get_template_part_after',         function() use( $in_row_begin,       $in_row_end )       { echo $in_row_begin       . 'h_get_template_part_after'      . $in_row_end; });

	if ( ! has_action( 'h_loop_if_begin' ) )                   add_action( 'h_loop_if_begin',                   function() use( $in_row_begin,       $in_row_end )       { echo $in_row_begin       . 'h_loop_if_begin'                . $in_row_end; });

	if ( ! has_action( 'h_loop_while_begin' ) )                add_action( 'h_loop_while_begin',                function() use( $in_row_begin,       $in_row_end )       { echo $in_row_begin       . 'h_loop_while_begin'             . $in_row_end; });

	if ( ! has_action( 'h_loop_entry_before' ) )               add_action( 'h_loop_entry_before',               function() use( $in_row_begin,       $in_row_end )       { echo $in_row_begin       . 'h_loop_entry_before'            . $in_row_end; });

	if ( ! has_action( 'h_loop_entry_after' ) )                add_action( 'h_loop_entry_after',                function() use( $in_row_begin,       $in_row_end )       { echo $in_row_begin       . 'h_loop_entry_after'             . $in_row_end; });

	if ( ! has_action( 'h_loop_post_navigation_before' ) )     add_action( 'h_loop_post_navigation_before',     function() use( $in_nothing_begin,   $in_nothing_end )   { echo $in_nothing_begin   . 'h_loop_post_navigation_before'  . $in_nothing_end; });

	if ( ! has_action( 'h_loop_post_navigation_after' ) )      add_action( 'h_loop_post_navigation_after',      function() use( $in_nothing_begin,   $in_nothing_end )   { echo $in_nothing_begin   . 'h_loop_post_navigation_after'   . $in_nothing_end; });

	if ( ! has_action( 'h_loop_posts_navigation_before' ) )    add_action( 'h_loop_posts_navigation_before',    function() use( $in_nothing_begin,   $in_nothing_end )   { echo $in_nothing_begin   . 'h_loop_posts_navigation_before' . $in_nothing_end; });

	if ( ! has_action( 'h_loop_posts_navigation_after' ) )     add_action( 'h_loop_posts_navigation_after',     function() use( $in_nothing_begin,   $in_nothing_end )   { echo $in_nothing_begin   . 'h_loop_posts_navigation_after'  . $in_nothing_end; });

	if ( ! has_action( 'h_loop_comments_before' ) )            add_action( 'h_loop_comments_before',            function() use( $in_row_begin,       $in_row_end )       { echo $in_row_begin       . 'h_loop_comments_before'         . $in_row_end; });

	if ( ! has_action( 'h_loop_comments_after' ) )             add_action( 'h_loop_comments_after',             function() use( $in_nothing_begin,   $in_nothing_end )   { echo $in_nothing_begin   . 'h_loop_comments_after'          . $in_nothing_end; });

	if ( ! has_action( 'h_loop_while_end' ) )                  add_action( 'h_loop_while_end',                  function() use( $in_row_begin,       $in_row_end )       { echo $in_row_begin       . 'h_loop_while_end'               . $in_row_end; });

	if ( ! has_action( 'h_loop_if_end' ) )                     add_action( 'h_loop_if_end',                     function() use( $in_row_begin,       $in_row_end )       { echo $in_row_begin       . 'h_loop_if_end'                  . $in_row_end; });

	if ( ! has_action( 'h_loop_else_core' ) )                  add_action( 'h_loop_else_core',                  function() use( $in_row_begin,       $in_row_end )       { echo $in_row_begin       . 'h_loop_else_core'               . $in_row_end; });

	if ( ! has_action( 'h_entry_header' ) )                    add_action( 'h_entry_header',                    function() use( $common_entry_header )                   { echo $common_entry_header; });

	if ( ! has_action( 'h_entry_article_begin' ) )             add_action( 'h_entry_article_begin',             function() use( $in_column_begin,    $in_column_end )    { echo $in_column_begin    . 'h_entry_article_begin'          . $in_column_end; });

	if ( ! has_action( 'h_entry_article_content_before' ) )    add_action( 'h_entry_article_content_before',    function() use( $in_column_begin,    $in_column_end )    { echo $in_column_begin    . 'h_entry_article_content_before' . $in_column_end; });

	if ( ! has_action( 'h_entry_article_content_after' ) )     add_action( 'h_entry_article_content_after',     function() use( $in_column_begin,    $in_column_end )    { echo $in_column_begin    . 'h_entry_article_content_after'  . $in_column_end; });

	if ( ! has_action( 'h_entry_article_end' ) )               add_action( 'h_entry_article_end',               function() use( $in_column_begin,    $in_column_end )    { echo $in_column_begin    . 'h_entry_article_end'            . $in_column_end; });

	if ( ! has_action( 'h_comments_before' ) )                 add_action( 'h_comments_before',                 function() use( $in_row_begin,       $in_row_end )       { echo $in_row_begin       . 'h_comments_before'              . $in_row_end; });

	if ( ! has_action( 'h_comments_begin' ) )                  add_action( 'h_comments_begin',                  function() use( $in_deep_row_begin,  $in_deep_row_end )  { echo $in_deep_row_begin  . 'h_comments_begin'               . $in_deep_row_end; });

	if ( ! has_action( 'h_comments_if_begin' ) )               add_action( 'h_comments_if_begin',               function() use( $in_deep_row_begin,  $in_deep_row_end )  { echo $in_deep_row_begin  . 'h_comments_if_begin'            . $in_deep_row_end; });

	if ( ! has_action( 'h_comments_header_begin' ) )           add_action( 'h_comments_header_begin',           function() use( $in_deep_row_begin,  $in_deep_row_end )  { echo $in_deep_row_begin  . 'h_comments_header_begin'        . $in_deep_row_end; });

	if ( ! has_action( 'h_comments_header_end' ) )             add_action( 'h_comments_header_end',             function() use( $in_deep_row_begin,  $in_deep_row_end )  { echo $in_deep_row_begin  . 'h_comments_header_end'          . $in_deep_row_end; });

	if ( ! has_action( 'h_comments_list_begin' ) )             add_action( 'h_comments_list_begin',             function() use( $in_deep_row_begin,  $in_deep_row_end )  { echo $in_deep_row_begin  . 'h_comments_list_begin'          . $in_deep_row_end; });

	if ( ! has_action( 'h_comments_list_end' ) )               add_action( 'h_comments_list_end',               function() use( $in_deep_row_begin,  $in_deep_row_end )  { echo $in_deep_row_begin  . 'h_comments_list_end'            . $in_deep_row_end; });

	if ( ! has_action( 'h_comments_if_end' ) )                 add_action( 'h_comments_if_end',                 function() use( $in_deep_row_begin,  $in_deep_row_end )  { echo $in_deep_row_begin  . 'h_comments_if_end'              . $in_deep_row_end; });

	if ( ! has_action( 'h_comments_else_begin' ) )             add_action( 'h_comments_else_begin',             function() { echo '<div class="h-in-nothing">h_comments_else_begin</div>'; });

	if ( ! has_action( 'h_comments_else_header' ) )            add_action( 'h_comments_else_header',            function() { echo '<div class="h-in-nothing">h_comments_else_header</div>'; });

	if ( ! has_action( 'h_comments_else_section' ) )           add_action( 'h_comments_else_section',           function() { echo '<div class="h-in-nothing">h_comments_else_section</div>'; });

	if ( ! has_action( 'h_comments_else_end' ) )               add_action( 'h_comments_else_end',               function() { echo '<div class="h-in-nothing">h_comments_else_end</div>'; });

	if ( ! has_action( 'h_main_end' ) )                        add_action( 'h_main_end',                        function() use( $in_row_begin,       $in_row_end )       { echo $in_row_begin       . 'h_main_end'                     . $in_row_end; });

	if ( ! has_action( 'h_main_after' ) )                      add_action( 'h_main_after',                      function() use( $in_nothing_begin,   $in_nothing_end )   { echo $in_nothing_begin   . 'h_main_after'                   . $in_nothing_end; });

	if ( ! has_action( 'h_body_footer' ) )                     add_action( 'h_body_footer',                     function() use( $in_container_begin, $in_container_end ) { echo $in_container_begin . 'h_body_footer'                  . $in_container_end; });

	if ( ! has_action( 'h_body_end' ) )                        add_action( 'h_body_end',                        function() use( $in_nothing_begin,   $in_nothing_end )   { echo $in_nothing_begin   . 'h_body_end'                     . $in_nothing_end; });
