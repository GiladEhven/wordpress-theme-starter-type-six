<?php

	namespace Ehven\Gilad\WordPress\Themes\Parents\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );



    function get_template_type() {

	    global $wp_query;

	    $type = 'unknown';

	    if ( $wp_query->is_404 ) {

	        $type = '404';

	    } elseif ( $wp_query->is_category ) {

	        $type = 'category';

	    } elseif ( $wp_query->is_home ) {

	        $type = 'home';

	    } elseif ( $wp_query->is_image ) {

	        $type = 'image';

	    } elseif ( $wp_query->is_page ) {

	        $type = is_front_page() ? 'front' : 'page';

	    } elseif ( $wp_query->is_search ) {

	        $type = 'search';

	    } elseif ( $wp_query->is_single ) {

	        $type = ( $wp_query->is_attachment ) ? 'attachment' : 'single';

	    } elseif ( $wp_query->is_tag ) {

	        $type = 'tag';

	    } elseif ( $wp_query->is_tax ) {

	        $type = 'tax';

	    } elseif ( $wp_query->is_archive ) {

	        if ( $wp_query->is_author ) {

	            $type = 'author';

	        } elseif ( $wp_query->is_day ) {

	            $type = 'day';

	        } elseif ( $wp_query->is_month ) {

	            $type = 'month';

	        } elseif ( $wp_query->is_year ) {

	            $type = 'year';

	        } else {

	            $type = 'archive';

	        }

	    }

	    return $type;

    }
