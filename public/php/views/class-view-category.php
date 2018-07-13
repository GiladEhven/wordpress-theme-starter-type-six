<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

	class View_Category { public function __construct( $data ) {

	//  --------------------------  DO NOT EDIT ABOVE THIS LINE  --------------------------  //

			echo '<h1>' . $data['sample-one'] . ' ' . $data['sample-two'] . '</h1>';
			echo '<h2>And the above heading was assembled from two array values passed to a view (to demonstrate use of this theme\'s structure).</h2>';

	//  --------------------------  DO NOT EDIT BELOW THIS LINE  --------------------------  //

	} } // End [__construct] // End [class]
