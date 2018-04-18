<?php get_header(); ?>

	<div id="main" class="grid_8">
			
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<h2 class="single"><?php the_title(); ?></h2>
				
		<?php the_content(); ?>
		<?php endwhile; endif; ?>
			
	</div><!-- / #main -->

<?php get_sidebar(); ?>
<?php get_sidebar("2"); ?>
<div class="clear"></div>
<?php get_footer(); ?>