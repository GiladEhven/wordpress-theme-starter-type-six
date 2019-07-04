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

		$audio_attachment_counter =  0;
		$audio_attachments        =  array();

		$media_library_audios     =  get_posts( array(
		    'post_type'           => 'attachment',
		    'post_mime_type'      => 'audio',
		    'numberposts'         => -1
		));

		foreach ( $media_library_audios as $audio_file )
		{
			$audio_attachment_counter++;

			$audio_attachments[$audio_attachment_counter]['description'] = $audio_file->post_content;
			$audio_attachments[$audio_attachment_counter]['id']          = $audio_file->ID;
			$audio_attachments[$audio_attachment_counter]['title']       = $audio_file->post_title;
			$audio_attachments[$audio_attachment_counter]['url']         = wp_get_attachment_url( $audio_file->ID );
		}

		// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

		$pdf_attachment_counter   =  0;
		$pdf_attachments          =  array();

		$media_library_pdfs       =  get_posts( array(
		    'post_type'           => 'attachment',
		    'post_mime_type'      => 'application/pdf',
		    'numberposts'         => -1
		));

		foreach ( $media_library_pdfs as $pdf_file )
		{
			$pdf_attachment_counter++;

			$pdf_attachments[$pdf_attachment_counter]['description']     = $pdf_file->post_content;
			$pdf_attachments[$pdf_attachment_counter]['id']              = $pdf_file->ID;
			$pdf_attachments[$pdf_attachment_counter]['title']           = $pdf_file->post_title;
			$pdf_attachments[$pdf_attachment_counter]['url']             = wp_get_attachment_url( $pdf_file->ID );
		}

		// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

		$video_attachment_counter =  0;
		$video_attachments        =  array();

		$media_library_videos     =  get_posts( array(
		    'post_type'           => 'attachment',
		    'post_mime_type'      => 'video',
		    'numberposts'         => -1
		));

		foreach ( $media_library_videos as $video_file )
		{
			$video_attachment_counter++;

			$video_attachments[$video_attachment_counter]['description'] = $video_file->post_content;
			$video_attachments[$video_attachment_counter]['id']          = $video_file->ID;
			$video_attachments[$video_attachment_counter]['title']       = $video_file->post_title;
			$video_attachments[$video_attachment_counter]['url']         = wp_get_attachment_url( $video_file->ID );
		}

		// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - //

		$_404_link      = '<a href="/this-page-does-not-exist/" target="_blank">Show 404 page</a>';

		$audio_data     = $audio_attachments;
		$audio_link     = $audio_data ? wp_get_attachment_link( $audio_data[1]['id'], '', true, false, 'Audio playback page (right click to open)' ) : '<a href="javascript:;" target="_blank">No valid audio demo page found!</a>';

		$blog_link      = '<a href="' . get_post_type_archive_link( 'post' ) . '" target="_blank">Blog</a>';

		$category_label = 'Classic';
		$category_id    = get_cat_ID( $category_label );
		$category_link  = $category_id ? '<a href="' . get_category_link( $category_id ) . '" target="_blank">Category archive for &#8220;' . $category_label . '&#8221;</a>' : '<a href="javascript:;" target="_blank">No valid category page found!</a>';

		$date_day       = '<a href="' . get_home_url() . '/2018/11/03/" target="_blank">Date archive for &#8220;<strong>Day</strong>&#8221;</a>';
		$date_month     = '<a href="' . get_home_url() . '/2018/11/" target="_blank">Date archive for &#8220;<strong>Month</strong>&#8221;</a>';
		$date_year      = '<a href="' . get_home_url() . '/2018/" target="_blank">Date archive for &#8220;<strong>Year</strong>&#8221;</a>';

		$home_link      = '<a href="' . get_home_url() . '" target="_target">Home Page</a>';

		$image_data     = attachment_url_to_postid( get_home_url() . '/app/uploads/2014/01/spectacles.gif' );
		$image_link     = $image_data ? wp_get_attachment_link( $image_data, '', true, false, 'Image display page (right click to open)' ) : '<a href="javascript:;" target="_blank">No valid image demo page found!</a>';

		$page_data      = get_page_by_path( 'about/page-with-comments' );
		$page_link      = $page_data ? '<a href="' . get_permalink( $page_data ) . '" target="_blank">Page with comments</a>' : '<a href="javascript:;" target="_blank">No valid demo page found!</a>';

		$pdf_data       = $pdf_attachments;
		$pdf_link       = $pdf_data ? wp_get_attachment_link( $pdf_data[1]['id'], '', true, false, 'PDF display/download page (right click to open)' ) : '<a href="javascript:;" target="_blank">No valid PDF demo page found!</a>';

		$post_data      = get_page_by_path( 'hello-world', OBJECT, 'post' );
		$post_link      = $post_data ? '<a href="' . get_permalink( $post_data ) . '" target="_blank">Hello, World!</a>' : '<a href="javascript:;" target="_blank">No valid demo post found!</a>';

		$search_link    = '<a href="' . get_home_url() . '/?s=wp' . '" target="_blank">Search for &#8220;wp&#8221;</a>';

		$tag_label      = 'content';
		$tag_data       = get_term_by( 'name', $tag_label, 'post_tag' );
		$tag_id         =  $tag_data->term_id;
		$tag_link       = $tag_id ? '<a href="' . get_tag_link( $tag_id ) . '" target="_blank">Tag archive for &#8220;' . $tag_label . '&#8221;</a>' : '<a href="javascript:;" target="_blank">No valid tag page found!</a>';

		$user_data      = get_user_by( 'login', 'themedemos' );
		$user_link      = $user_data ? '<a href="' . get_author_posts_url( $user_data->ID ) . '" target="_blank">Author archive for [' . $user_data->user_login . ']</a>' : '<a href="javascript:;" target="_blank">No valid author archive found!</a>';

		$video_data     = $video_attachments;
		$video_link     = $video_data ? wp_get_attachment_link( $video_data[1]['id'], '', true, false, 'Video playback page (right click to open)' ) : '<a href="javascript:;" target="_blank">No valid video demo page found!</a>';

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
	                        <li>' . $_404_link . '</li>
	                    </ul>

	                </div>

	                <div class="activity-block" id="archive-template">

	                    <h3>Archive <span style="float: right;"><code>archive.php</code></span></h3>

	                    <p>For each of the below to display with <code>archive.php</code>, all more specific templates need to be disabled.</p>

	                    <ul>
	                        <li>' . $user_link . '</li>
	                        <li>' . $category_link . '</li>
	                        <li>' . $tag_link . '</li>
	                        <li>' . $search_link . '</li>
	                        <li style="height: 2px;"></li>
	                        <li>' . $date_year . '</li>
	                        <li>' . $date_month . '</li>
	                        <li>' . $date_day . '</li>
	                    </ul>

	                </div>

	                <div class="activity-block" id="attachment-template">

	                    <h3>Attachment <span style="float: right;"><code>attachment.php</code></span></h3>

	                    <ul>
	                    	<li>The following generic attachment demo is calling a PDF (only) at this time, but the demo should account for all types (view where possible + switchable download).
	                        <li>' . $pdf_link . '</li>
	                        <li>For each of the below to display with <code>attachment.php</code>, the more specific template needs to be disabled.</li>
	                        <li>' . $audio_link . '</li>
	                        <li>' . $video_link . '</li>
	                    </ul>

	                </div>

	                <div class="activity-block" id="audio-template">

	                    <h3>Audio <span style="float: right;"><code>audio.php</code></span></h3>

	                    <ul>
	                        <li>' . $audio_link . '</li>
	                    </ul>

	                </div>

	                <div class="activity-block" id="author-template">

	                    <h3>Author <span style="float: right;"><code>author.php</code></span></h3>

	                    <ul>
	                        <li>' . $user_link . '</li>
	                    </ul>

	                </div>

	                <div class="activity-block" id="category-template">

	                    <h3>Category <span style="float: right;"><code>category.php</code></span></h3>

	                    <ul>
	                        <li>' . $category_link . '</li>
	                    </ul>

	                </div>

	                <div class="activity-block" id="date-template">

	                    <h3>Date <span style="float: right;"><code>date.php</code></span></h3>

	                    <ul>
	                        <li>' . $date_year . '</li>
	                        <li>' . $date_month . '</li>
	                        <li>' . $date_day . '</li>
	                    </ul>

	                </div>

	                <div class="activity-block" id="front-page-template">

	                    <h3>Front Page <span style="float: right;"><code>front-page.php</code></span></h3>

	                    <ul>
	                        <li>' . $home_link . '</li>
	                    </ul>

	                </div>

	                <div class="activity-block" id="home-template">

	                    <h3>Home <span style="float: right;"><code>home.php</code></span></h3>

	                    <ul>
	                        <li>' . $blog_link . '</li>
	                    </ul>

	                </div>

	                <div class="activity-block" id="image-template">

	                    <h3>Image <span style="float: right;"><code>image.php</code></span></h3>

	                    <ul>
	                        <li>' . $image_link . '</li>
	                    </ul>

	                </div>

	                <div class="activity-block" id="index-template">

	                    <h3>Index <span style="float: right;"><code>index.php</code></span></h3>

	                    <p>For each of the below to display with <code>archive.php</code>, all more specific templates need to be disabled.</p>

	                    <ul>
	                        <li>' . $_404_link . '</li>
	                        <li style="height: 2px;"></li>
	                        <li>' . $user_link . '</li>
	                        <li>' . $category_link . '</li>
	                        <li>' . $tag_link . '</li>
	                        <li>' . $search_link . '</li>
	                        <li style="height: 2px;"></li>
	                        <li>' . $date_year . '</li>
	                        <li>' . $date_month . '</li>
	                        <li>' . $date_day . '</li>
	                        <li style="height: 2px;"></li>
	                        <li>' . $home_link . '</li>
	                        <li>' . $blog_link . '</li>
	                        <li style="height: 2px;"></li>
	                        <li>' . $page_link . '</li>
	                        <li>' . $post_link . '</li>
	                        <li style="height: 2px;"></li>
	                        <li>' . $pdf_link . '</li>
	                        <li>' . $audio_link . '</li>
	                        <li>' . $video_link . '</li>
	                    </ul>

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

	                    <ul>
	                        <li>' . $tag_link . '</li>
	                    </ul>

	                </div>

	                <div class="activity-block" id="taxonomy-template">

	                    <h3>Taxonomy <span style="float: right;"><code>taxonomy.php</code></span></h3>

	                </div>

	                <div class="activity-block" id="video-template">

	                    <h3>Video <span style="float: right;"><code>video.php</code></span></h3>

	                    <ul>
	                        <li>' . $video_link . '</li>
	                    </ul>

	                </div>

				</div>

	    ';

	}
