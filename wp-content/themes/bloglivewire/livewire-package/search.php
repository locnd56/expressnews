<?php get_header(); ?>

		<div class="col1">

		<?php if (have_posts()) : ?>
		
		<div id="archivebox">
        	
            	<h3><em>Search Results |</em> <?php printf(__('\'%s\''), $s) ?></h3>        
		
		</div><!--/archivebox-->
	
			<?php while (have_posts()) : the_post(); ?>		

				<div class="post-alt blog" id="post-<?php the_ID(); ?>">
		
					<?php if ( get_post_meta($post->ID, 'thumb', true) ) { ?> <!-- DISPLAYS THE IMAGE URL SPECIFIED IN THE CUSTOM FIELD -->
						
						<img src="<?php echo get_post_meta($post->ID, "thumb", $single = true); ?>" alt="" class="th" />			
						
					<?php } else { ?> <!-- DISPLAY THE DEFAULT IMAGE, IF CUSTOM FIELD HAS NOT BEEN COMPLETED -->
						
						<img src="<?php bloginfo('template_directory'); ?>/images/no-img-thumb.jpg" alt="" class="th" />
						
					<?php } ?> 		
	
					<h2><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<h3 class="post_date">Posted on <?php the_time('d F Y'); ?></h3>
		
					<div class="entry">
						<?php the_excerpt('<p class="continue">Read the full story</p>'); ?> 
					</div>
                    
                    <?php if (function_exists('the_tags')) { ?><p class="singletags"><?php the_tags('Tags: ', ', ', ''); ?></p><?php } ?>
		
					<div class="postmeta">
        				<span class="posted_in"><?php the_category(', ') ?></span>
        				<span class="comments"><?php comments_popup_link('Comments (0)', 'Comments (1)', 'Comments (%)'); ?></span>
					</div>
				
				</div><!--/post-->

		<?php endwhile; ?>
		
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>
		
		<?php else : ?>

		<div id="archivebox">
        	
            	<h3><em>Search Results |</em> None Found</h3>				
		
		</div><!--/archivebox-->	
        
        <p>Sorry. Your search yielded no results. Perhaps you'll find what you are looking for in our archive.</p>   
        
        	<div class="arclist fl">     
			
				<h3>Categories</h3>
	
				<ul>
					<?php wp_list_categories('title_li=&hierarchical=0&show_count=1') ?>	
				</ul>				
			
			</div><!--/arclist-->
			
			<div class="arclist fr">
			
				<h3>Monthly Archives</h3>
	
				<ul>
					<?php wp_get_archives('type=monthly&show_post_count=1') ?>	
				</ul>				
			
			</div><!--/arclist-->
			
			<div class="fix"></div>
			
			<div class="arclist fl" style="width:100%">
			
				<h3>The Last 30 Posts</h3>
	
				<ul>
						<?php query_posts('showposts=30'); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						
							<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a> - Posted on <?php the_time('j F Y') ?> - Comments (<?php echo $post->comment_count ?>)</li>
						
						<?php endwhile; endif; ?>	
				</ul>				
			
			</div><!--/arclist-->	
	
	<?php endif; ?>							

		</div><!--/col1-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>	
