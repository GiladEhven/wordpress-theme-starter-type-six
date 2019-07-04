<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



	add_action( 'wp_dashboard_setup', function() {

	    wp_add_dashboard_widget(
	        'template-test-links-widget',
	        __( 'Template Test Links', 'text_domain' ),
	        __NAMESPACE__ . '\template_test_links_widget_renderer'
	    );

	});

	function template_test_links_widget_renderer() {

		$image_data  = attachment_url_to_postid( get_home_url() . '/app/uploads/2014/01/spectacles.gif' );
		$image_link  = $image_data ? wp_get_attachment_link( $image_data, '', true, false, 'Image display page (right click to open)' ) : '<a href="javascript:;" target="_blank">No valid image demo page found!</a>';

		$page_data   = get_page_by_path( 'about/page-with-comments' );
		$page_link   = $page_data ? '<a href="' . get_permalink( $page_data ) . '" target="_blank">Page with comments</a>' : '<a href="javascript:;" target="_blank">No valid demo page found!</a>';

		$post_data   = get_page_by_path( 'hello-world', OBJECT, 'post' );
		$post_link   = $post_data ? '<a href="' . get_permalink( $post_data ) . '" target="_blank">Hello, World!</a>' : '<a href="javascript:;" target="_blank">No valid demo post found!</a>';

		$search_link = '<a href="' . get_home_url() . '/?s=wp' . '" target="_blank">Search for &#8220;wp&#8221;</a>';

		$user_data   = get_user_by( 'login', 'themedemos' );
		$user_link   = $user_data ? '<a href="' . get_author_posts_url( $user_data->ID ) . '" target="_blank">Author archive for [' . $user_data->user_login . ']</a>' : '<a href="javascript:;" target="_blank">No valid author archive found!</a>';

	    echo '

	            <div id="emplate-test-links-widget-core">

	                <div class="activity-block">

	                	<h3>Requirements and Setup</h3>

	                    <p>The following links depend upon <a href="https://codex.wordpress.org/Theme_Unit_Test" target="_blank">Theme Unit Test</a> data.</p>

	                    <p>These links also require "Common Settings" in Permalinks to be set to "Post name".</p>

	                </div>

	                <div class="activity-block" id="404-template">

	                    <h3>404 <span style="float: right;"><code>404.php</code></span></h3>

	                    <ul>
	                        <li><a href="/this-page-does-not-exist/" target="_blank">Show 404 page</a></li>
	                    </ul>

	                </div>

	                <div class="activity-block" id="archive-template">

	                    <h3>Archive <span style="float: right;"><code>archive.php</code></span></h3>

	                </div>

	                <div class="activity-block" id="attachment-template">

	                    <h3>Attachment <span style="float: right;"><code>attachment.php</code></span></h3>

	                </div>

	                <div class="activity-block" id="author-template">

	                    <h3>Author <span style="float: right;"><code>author.php</code></span></h3>

	                    <ul>
	                        <li>' . $user_link . '</li>
	                    </ul>

	                </div>

	                <div class="activity-block" id="category-template">

	                    <h3>Category <span style="float: right;"><code>category.php</code></span></h3>

	                </div>

	                <div class="activity-block" id="date-template">

	                    <h3>Date <span style="float: right;"><code>date.php</code></span></h3>

	                </div>

	                <div class="activity-block" id="front-page-template">

	                    <h3>Front Page <span style="float: right;"><code>front-page.php</code></span></h3>

	                </div>

	                <div class="activity-block" id="home-template">

	                    <h3>Home <span style="float: right;"><code>home.php</code></span></h3>

	                </div>

	                <div class="activity-block" id="image-template">

	                    <h3>Image <span style="float: right;"><code>image.php</code></span></h3>

	                    <ul>
	                        <li>' . $image_link . '</li>
	                    </ul>

	                </div>

	                <div class="activity-block" id="index-template">

	                    <h3>Index <span style="float: right;"><code>index.php</code></span></h3>

	                </div>

	                <div class="activity-block" id="page-template">

	                    <h3>Page <span style="float: right;"><code>page.php</code></span></h3>

	                    <ul>
	                        <li>' . $page_link . '</li>
	                    </ul>

	                </div>

	                <div class="activity-block" id="single-template">

	                    <h3>Post <span style="float: right;"><code>single.php</code></span></h3>

	                    <ul>
	                        <li>' . $post_link . '</li>
	                    </ul>

	                </div>

	                <div class="activity-block" id="search-template">

	                    <h3>Search <span style="float: right;"><code>search.php</code></span></h3>

	                    <ul>
	                        <li>' . $search_link . '</li>
	                    </ul>

	                </div>

	                <div class="activity-block" id="tag-template">

	                    <h3>Tag <span style="float: right;"><code>tag.php</code></span></h3>

	                </div>

	                <div class="activity-block" id="taxonomy-template">

	                    <h3>Taxonomy <span style="float: right;"><code>taxonomy.php</code></span></h3>

	                </div>

	</div>

	    ';

	}
