<?php

	namespace Ehven\Gilad\WordPress\Themes\Starters\TypeSix;

    if ( ! defined( 'ABSPATH' ) ) exit( 'Nothing to see here. Go <a href="/">home</a>.' );

	class View_Footer { public function __construct( $data ) {

	/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	 *                                                                                       *
	 *    This file is for FOOTER MAIN DESIGN ONLY! No chrome!                               *
	 *                                                                                       *
	 *    In [footer.php]:             </main>                                               *
	 *                                                                                       *
	 *                                 <footer>                                              *
	 *                                                                                       *
	 *    In this file:                    Everything between "DO NOT EDIT" lines            *
	 *                                                                                       *
	 *    In [footer.php]:             </footer>                                             *
	 *                                                                                       *
	 *                             </div>                                                    *
	 *                                                                                       *
	 *                             <?php wp_footer(); ?>                                     *
	 *                                                                                       *
	 *                         </body>                                                       *
	 *                                                                                       *
	 *                     </html>                                                           *
	 *                                                                                       *
	 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

	   //  --------------------------  DO NOT EDIT ABOVE THIS LINE  --------------------------  //  ?>



				<h1><?php echo $data['sample-one'] . ' ' . $data['sample-two']; ?></h1>
				<h2>And the above heading was assembled from two array values passed to a view (to demonstrate use of this theme\'s structure).</h2>



<?php  //  --------------------------  DO NOT EDIT BELOW THIS LINE  --------------------------  //

	} } // End [__construct] // End [class]
