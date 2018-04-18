<?php get_header(); ?>

		<div class="col1">

		<?php if (have_posts()) : ?>
		
		<div id="archivebox">
		
        		<?php if (is_category()) { ?>
        	
            	<h3><em>Archive |</em> <?php echo single_cat_title(); ?></h3>        
            	
            	<div class="archivefeed"><?php $cat_obj = $wp_query->get_queried_object(); $cat_id = $cat_obj->cat_ID; echo '<a href="'; get_category_rss_link(true, $cat, ''); echo '">RSS feed for this section</a>'; ?></div>
            	
				<?php } elseif (is_day()) { ?>
				<h3>Archive | <?php the_time('F jS, Y'); ?></h3>

				<?php } elseif (is_month()) { ?>
				<h3>Archive | <?php the_time('F, Y'); ?></h3>

				<?php } elseif (is_year()) { ?>
				<h3>Archive | <?php the_time('Y'); ?></h3>
				
				<?php } ?>
		
		</div><!--/archivebox-->
	
			<?php while (have_posts()) : the_post(); ?>		

				<div class="post-alt blog" id="post-<?php the_ID(); ?>">
		
					<?php if ( get_post_meta($post->ID, 'thumb', true) ) { ?> <!-- DISPLAYS THE IMAGE URL SPECIFIED IN THE CUSTOM FIELD -->
						
						<img src="<?php echo get_post_meta($post->ID, "thumb", $single = true); ?>" alt="" class="th" />			
						
					<?php } else { ?> <!-- DISPLAY THE DEFAULT IMAGE, IF CUSTOM FIELD HAS NOT BEEN COMPLETED -->
						
						<img src="<?php bloginfo('template_directory'); ?>/images/no-img-thumb.jpg" alt="" class="th" />
						
					<?php } ?> 		
					
					<?php if (function_exists('the_tags')) { ?><h3><?php the_tags('Tags: ', ', ', ''); ?></h3><?php } ?>
					<h2><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<h3 class="post_date">Posted on <?php the_time('d F Y'); ?></h3>
                    <hr style="clear:both;" />
		
					<div class="entry">
						<?php the_content('<span class="continue">Read the full story</span>'); ?> 
					</div>
		
					 <h3 class="posted">Posted in <?php the_category(', ') ?><span class="comments"><?php comments_popup_link('Comments (0)', 'Comments (1)', 'Comments (%)'); ?></span></h3>
				
				</div><!--/post-->

		<?php endwhile; ?>
		
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>		
	
	<?php endif; ?>							

		</div><!--/col1-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>