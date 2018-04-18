<?php get_header(); ?>

		<div id="centercol" class="grid_10">
		
		<?php if (get_option('premiumnews_show_blog') == false) { ?>

		<?php include(TEMPLATEPATH . '/includes/featured.php'); ?>

		<?php
            
            $layout = get_option('premiumnews_layout');

            include('layouts/'.$layout);
            
        ?>
        
        <?php } else { include(TEMPLATEPATH . '/includes/stdblog.php'); } ?>

		</div><!--/centercol-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>