<?php get_header(); ?>
	
		<?php include(TEMPLATEPATH . '/includes/featured.php'); ?>

		<?php
            
            $layout = get_option('woo_layout');

            include('layouts/'.$layout);
            
        ?>      

<?php get_footer(); ?>