<?php
/*
Template Name: Custom Homepage
*/
?>

<?php $wp_query->is_home = true; ?>

<?php get_header(); ?>

<?php if ( !get_option('woo_right_sidebar') ) { get_sidebar(); } ?>

<div id="content" class="grid_12 <?php if ( !get_option('woo_right_sidebar') ) { echo 'omega'; } else { echo 'alpha'; } ?>">
	
	<!-- Add you custom homepage manual code here to show above the widgets -->

	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(2) )  ?>		           

	<!-- Add you custom homepage manual code here to show below the widgets -->
	
</div><!-- /content -->	

<?php if ( get_option('woo_right_sidebar') ) { get_sidebar(); } ?>

<?php get_footer(); ?>