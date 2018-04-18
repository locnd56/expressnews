<?php get_header(); ?>

		<div class="col1_home">
			
			<div class="col1_home_box">
				<?php include(TEMPLATEPATH . '/includes/featured.php'); ?>
         </div><!--/col1_home_nox-->
			
         <div class="col1_home_box">
				<?php
					$layout = get_option('premiumnews_layout');
					include('layouts/'.$layout);			
				?>
          </div><!--/col1_home_box-->
            
          <?php
				// Display Video
				include(TEMPLATEPATH . '/includes/video.php'); 
			?>

		</div><!--/col1_home-->
        
        <div class="col_mid_home">
        
        	<div class="mid_box">

	<?php
	
		$excluding = get_option('premiumnews_mid_exclude'); // Categories to exclude
		
		$cats = get_categories('exclude='. $ex_feat . ',' . $ex_vid. ',' . $excluding );
		foreach ($cats as $cat) {
		
			query_posts('showposts=1&posts_per_page=-1&cat='.$cat->cat_ID);
	
	?>
        	
        	<?php while (have_posts()) : the_post(); ?>		

				<div class="post-alt blog">	
					
               <p class="category"><span><?php echo $cat->cat_name; ?></span></p>
					<h2><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<p class="posted_on">Posted on <?php the_time('d F Y'); ?> <?php edit_post_link(__('Edit'), ' &#183; ', ''); ?></p>
		
					<div class="entry">
						<?php the_excerpt(); ?>
					</div>
				
				</div><!--/post-->

			<?php endwhile; ?>

	<?php } ?>

        </div>

		</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>