<?php include(TEMPLATEPATH . '/includes/featured.php'); ?>

<div id="content" class="fullspan">

	<div class="container_16 clearfix">
		<div class="grid_5">
			
			<?php $more1 = get_option('woo_more1_ID'); ?>

        	<?php query_posts('page_id=' . $more1); ?>
	
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>					
			
			<div class="moreinfo">
				<h3><?php the_title(); ?></h3>
				
				<?php the_content(); ?>

				<p class="more"><a href="<?php echo get_option('woo_more1_url'); ?>" title="<?php echo get_option('woo_more1_link'); ?>"><?php echo get_option('woo_more1_link'); ?></a></p>
			</div><!-- /moreinfo -->
			
			<?php endwhile; endif; ?>
			
		</div>
		
		<div class="grid_5">
			
			<?php $more2 = get_option('woo_more2_ID'); ?>

        	<?php query_posts('page_id=' . $more2); ?>
	
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>					
			
			<div class="moreinfo">
				<h3><?php the_title(); ?></h3>
				
				<?php the_content(); ?>

				<p class="more"><a href="<?php echo get_option('woo_more2_url'); ?>" title="<?php echo get_option('woo_more2_link'); ?>"><?php echo get_option('woo_more2_link'); ?></a></p>
			</div><!-- /moreinfo -->
			
			<?php endwhile; endif; ?>
			
		</div>
			
		<div class="grid_6">
			<div id="news">
				<h3>Company / Product News</h3>
				
				<a class="feed" href="<?php if ( get_option('woo_feedburner_url') <> "" ) { echo get_option('woo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>" title="Subribe to our RSS feed"><img src="<?php bloginfo('template_directory'); ?>/images/design/rss.gif" alt="RSS" /></a>
				
				<ul>
					<?php
                    include(TEMPLATEPATH . '/includes/version.php');
                    include(TEMPLATEPATH . '/includes/categories.php');                    
                    $the_query = new WP_Query('cat=' . inc_cats() . '&orderby=post_date&order=desc');		
                    while ($the_query->have_posts()) : $the_query->the_post(); $do_not_duplicate = $post->ID;		
                	?>

					<li><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a><span class="date"><?php the_time('j.m'); ?></span></li>
				
					<?php endwhile; ?>
                </ul>
				
				<?php $archives_page = get_option('woo_archives_page') . '/'; ?>
				<p class="more alignr"><a href="<?php echo get_option('home'); echo get_option('woo_blogcat'); ?>" title="Read More">Read More</a></p>
				
			</div><!-- /news -->
		</div>
	</div><!-- /container_16 -->

</div><!-- /content -->
