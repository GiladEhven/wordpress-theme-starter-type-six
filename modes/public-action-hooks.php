<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



	if ( has_action( 'h_body_begin' ) )                      { h_body_begin(); }                      else    { add_action( 'h_body_begin',                      function() { echo '<div class="h">h_body_begin</div>'; }); }

//	if ( has_action( 'h_body_header' ) )                     { h_body_header(); }                     else    { add_action( 'h_body_header',                     function() { echo '<div class="h">h_body_header</div>'; }); }

	if ( has_action( 'h_main_before' ) )                     { h_main_before(); }                     else    { add_action( 'h_main_before',                     function() { echo '<div class="h">h_main_before</div>'; }); }

	if ( has_action( 'h_main_begin' ) )                      { h_main_begin(); }                      else    { add_action( 'h_main_begin',                      function() { echo '<div class="h">h_main_begin</div>'; }); }

	if ( has_action( 'h_get_template_part_before' ) )        { h_get_template_part_before(); }        else    { add_action( 'h_get_template_part_before',        function() { echo '<div class="h">h_get_template_part_before</div>'; }); }

	if ( has_action( 'h_get_template_part_after' ) )         { h_get_template_part_after(); }         else    { add_action( 'h_get_template_part_after',         function() { echo '<div class="h">h_get_template_part_after</div>'; }); }

	if ( has_action( 'h_loop_if_begin' ) )                   { h_loop_if_begin(); }                   else    { add_action( 'h_loop_if_begin',                   function() { echo '<div class="h">h_loop_if_begin</div>'; }); }

	if ( has_action( 'h_loop_while_begin' ) )                { h_loop_while_begin(); }                else    { add_action( 'h_loop_while_begin',                function() { echo '<div class="h">h_loop_while_begin</div>'; }); }

	if ( has_action( 'h_loop_entry_before' ) )               { h_loop_entry_before(); }               else    { add_action( 'h_loop_entry_before',               function() { echo '<div class="h">h_loop_entry_before</div>'; }); }

	if ( has_action( 'h_loop_entry_after' ) )                { h_loop_entry_after(); }                else    { add_action( 'h_loop_entry_after',                function() { echo '<div class="h">h_loop_entry_after</div>'; }); }

	if ( has_action( 'h_loop_post_navigation_before' ) )     { h_loop_post_navigation_before(); }     else    { add_action( 'h_loop_post_navigation_before',     function() { echo '<div class="h">h_loop_post_navigation_before</div>'; }); }

	if ( has_action( 'h_loop_post_navigation_after' ) )      { h_loop_post_navigation_after(); }      else    { add_action( 'h_loop_post_navigation_after',      function() { echo '<div class="h">h_loop_post_navigation_after</div>'; }); }

	if ( has_action( 'h_loop_posts_navigation_before' ) )    { h_loop_posts_navigation_before(); }    else    { add_action( 'h_loop_posts_navigation_before',    function() { echo '<div class="h">h_loop_posts_navigation_before</div>'; }); }

	if ( has_action( 'h_loop_posts_navigation_after' ) )     { h_loop_posts_navigation_after(); }     else    { add_action( 'h_loop_posts_navigation_after',     function() { echo '<div class="h">h_loop_posts_navigation_after</div>'; }); }

	if ( has_action( 'h_loop_comments_before' ) )            { h_loop_comments_before(); }            else    { add_action( 'h_loop_comments_before',            function() { echo '<div class="h">h_loop_comments_before</div>'; }); }

	if ( has_action( 'h_loop_comments_after' ) )             { h_loop_comments_after(); }             else    { add_action( 'h_loop_comments_after',             function() { echo '<div class="h">h_loop_comments_after</div>'; }); }

	if ( has_action( 'h_loop_while_end' ) )                  { h_loop_while_end(); }                  else    { add_action( 'h_loop_while_end',                  function() { echo '<div class="h">h_loop_while_end</div>'; }); }

	if ( has_action( 'h_loop_if_end' ) )                     { h_loop_if_end(); }                     else    { add_action( 'h_loop_if_end',                     function() { echo '<div class="h">h_loop_if_end</div>'; }); }

	if ( has_action( 'h_loop_else_core' ) )                  { h_loop_else_core(); }                  else    { add_action( 'h_loop_else_core',                  function() { echo '<div class="h">h_loop_else_core</div>'; }); }

//	TODO: THE FOLLOWING CAUSES HEADER OUTPUT ERRORS (RUNS CONCURRENTLY WITH CHILD THEME DEFAULT ACTION CALLS)

//	if ( has_action( 'h_entry_header' ) )                    { h_entry_header(); }                    else    { add_action( 'h_entry_header',                    function() { echo '<div class="h">h_entry_header</div>'; }); }

//	if ( has_action( 'h_entry_content' ) )                   { h_entry_content(); }                   else    { add_action( 'h_entry_content',                   function() { echo '<div class="h">h_entry_content</div>'; }); }

//	if ( has_action( 'h_entry_footer' ) )                    { h_entry_footer(); }                    else    { add_action( 'h_entry_footer',                    function() { echo '<div class="h">h_entry_footer</div>'; }); }

	if ( has_action( 'h_entry_article_begin' ) )             { h_entry_article_begin(); }             else    { add_action( 'h_entry_article_begin',             function() { echo '<div class="h">h_entry_article_begin</div>'; }); }

	if ( has_action( 'h_entry_article_content_before' ) )    { h_entry_article_content_before(); }    else    { add_action( 'h_entry_article_content_before',    function() { echo '<div class="h">h_entry_article_content_before</div>'; }); }

	if ( has_action( 'h_entry_article_content_after' ) )     { h_entry_article_content_after(); }     else    { add_action( 'h_entry_article_content_after',     function() { echo '<div class="h">h_entry_article_content_after</div>'; }); }

	if ( has_action( 'h_entry_article_end' ) )               { h_entry_article_end(); }               else    { add_action( 'h_entry_article_end',               function() { echo '<div class="h">h_entry_article_end</div>'; }); }

	if ( has_action( 'h_comments_before' ) )                 { h_comments_before(); }                 else    { add_action( 'h_comments_before',                 function() { echo '<div class="h">h_comments_before</div>'; }); }

	if ( has_action( 'h_comments_begin' ) )                  { h_comments_begin(); }                  else    { add_action( 'h_comments_begin',                  function() { echo '<div class="h">h_comments_begin</div>'; }); }

	if ( has_action( 'h_comments_if_begin' ) )               { h_comments_if_begin(); }               else    { add_action( 'h_comments_if_begin',               function() { echo '<div class="h">h_comments_if_begin</div>'; }); }

	if ( has_action( 'h_comments_header_begin' ) )           { h_comments_header_begin(); }           else    { add_action( 'h_comments_header_begin',           function() { echo '<div class="h">h_comments_header_begin</div>'; }); }

	if ( has_action( 'h_comments_header_end' ) )             { h_comments_header_end(); }             else    { add_action( 'h_comments_header_end',             function() { echo '<div class="h">h_comments_header_end</div>'; }); }

	if ( has_action( 'h_comments_list_begin' ) )             { h_comments_list_begin(); }             else    { add_action( 'h_comments_list_begin',             function() { echo '<div class="h">h_comments_list_begin</div>'; }); }

	if ( has_action( 'h_comments_list_end' ) )               { h_comments_list_end(); }               else    { add_action( 'h_comments_list_end',               function() { echo '<div class="h">h_comments_list_end</div>'; }); }

	if ( has_action( 'h_comments_if_end' ) )                 { h_comments_if_end(); }                 else    { add_action( 'h_comments_if_end',                 function() { echo '<div class="h">h_comments_if_end</div>'; }); }

	if ( has_action( 'h_comments_else_begin' ) )             { h_comments_else_begin(); }             else    { add_action( 'h_comments_else_begin',             function() { echo '<div class="h">h_comments_else_begin</div>'; }); }

	if ( has_action( 'h_comments_else_header' ) )            { h_comments_else_header(); }            else    { add_action( 'h_comments_else_header',            function() { echo '<div class="h">h_comments_else_header</div>'; }); }

	if ( has_action( 'h_comments_else_section' ) )           { h_comments_else_section(); }           else    { add_action( 'h_comments_else_section',           function() { echo '<div class="h">h_comments_else_section</div>'; }); }

	if ( has_action( 'h_comments_else_end' ) )               { h_comments_else_end(); }               else    { add_action( 'h_comments_else_end',               function() { echo '<div class="h">h_comments_else_end</div>'; }); }

	if ( has_action( 'h_main_end' ) )                        { h_main_end(); }                        else    { add_action( 'h_main_end',                        function() { echo '<div class="h">h_main_end</div>'; }); }

	if ( has_action( 'h_main_after' ) )                      { h_main_after(); }                      else    { add_action( 'h_main_after',                      function() { echo '<div class="h">h_main_after</div>'; }); }

//	TODO: THE FOLLOWING CAUSES HEADER OUTPUT ERRORS (RUNS CONCURRENTLY WITH CHILD THEME DEFAULT ACTION CALLS)

//	if ( has_action( 'h_body_footer' ) )                     { h_body_footer(); }                     else    { add_action( 'h_body_footer',                     function() { echo '<div class="h">h_body_footer</div>'; }); }

	if ( has_action( 'h_body_end' ) )                        { h_body_end(); }                        else    { add_action( 'h_body_end',                        function() { echo '<div class="h">h_body_end</div>'; }); }
