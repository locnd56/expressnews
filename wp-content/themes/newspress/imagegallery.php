<?php get_header(); ?>

		<div class="col1">

			<h1><?php the_title(); ?></h1>        
			
			<div class="imagegallery">
			
						<?php query_posts('showposts=16'); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>				
							
							<?php if ( get_post_meta($post->ID, 'image', true) ) { ?>
								<a title="Click here to read the story" href="<?php the_permalink() ?>"><img alt="<?php the_title_attribute(); ?>" src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo get_post_meta($post->ID, "image", $single = true); ?>&h=170&w=235&zc=1&q=80" /></a>
							<?php } ?>
						
						<?php endwhile; endif; ?>	
			
			</div><!--/imagegallery-->						

		</div><!--/col1-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>