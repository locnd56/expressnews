<div class="box">

	<?php	
		include(TEMPLATEPATH . '/includes/version.php');
		
		$the_query = new WP_Query('cat=-'. $ex_feat . ',-' . $ex_vid . '&showposts=' . $showposts . '&orderby=post_date&order=desc');
		
		$counter = 0;
				
		while ($the_query->have_posts()) : $the_query->the_post(); $do_not_duplicate = $post->ID;
	?>
	
		<?php $counter++; ?>

		<div class="post-alt blog" <?php if ( ($counter == 4) ) { echo 'style="background:none !important;margin-bottom:0 !important;"'; ?><?php } ?>>

			<?php if ( get_post_meta($post->ID, 'thumb', true) ) { ?> <!-- DISPLAYS THE IMAGE URL SPECIFIED IN THE CUSTOM FIELD -->
				
				<img src="<?php echo get_post_meta($post->ID, "thumb", $single = true); ?>" alt="" class="th" />			
				
			<?php } else { ?> <!-- DISPLAY THE DEFAULT IMAGE, IF CUSTOM FIELD HAS NOT BEEN COMPLETED -->
				
				<img src="<?php bloginfo('template_directory'); ?>/images/no-img-thumb.jpg" alt="" class="th" />
				
			<?php } ?> 		
			
			<h2><?php the_category(', ') ?></h2>
			<h3><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<p class="posted">Posted on <?php the_time('d F Y'); ?></p>

			<div class="entry">
				<?php the_content('<span class="continue">Continue Reading</span>'); ?> 
			</div>

			<p class="comments"><?php comments_popup_link('Comments (0)', 'Comments (1)', 'Comments (%)'); ?></p>
		
		</div><!--/post-->		

	<?php endwhile; ?>	
	
	<div class="fix"></div>
	
	<?php $archives_page = get_option('premiumnews_archives_page') . '/'; ?>
	
	<p class="ar hl3"><a href="<?php echo "$archives_page"; ?>" class="more">SEE MORE ARTICLES IN THE ARCHIVE</a></p>

</div>