<?php get_header(); ?>

		<div class="col1">

		<?php if (have_posts()) : ?>
	
			<?php while (have_posts()) : the_post(); ?>		

				<div id="archivebox">
					
						<h3><em>Categorized |</em> <?php the_category(', ') ?></h3>
						<?php if (function_exists('the_tags')) { ?><p class="singletags"><?php the_tags('Tags : ', ', ', ''); ?></p><?php } ?>       
				
				</div><!--/archivebox-->			

				<div class="post-alt blog" id="post-<?php the_ID(); ?>">
				
					<h2><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<p class="posted_on">Posted on <?php the_time('d F Y'); ?> <?php edit_post_link(__('Edit'), ' &#183; ', ''); ?></p>
		
					<div class="entry">
						<?php the_content('<span class="continue">Continue Reading</span>'); ?> 
					</div>
                    
                <div class="author_info">
                	<h3>This post was written by:</h3>                	
                	
                		<?php
                			// Determine which gravatar to use for the user
                			$email = get_the_author_email();
                			$grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=".md5($email). "&default=".urlencode($GLOBALS['defaultgravatar'] )."&size=48";
                			$usegravatar = get_option('premiumnews_gravatar');
                		?>
                		
                    <?php  if ( $usegravatar ) { ?><span class="author_photo"><img src="<?php echo $grav_url; ?>" width="48" height="48" alt="" /></span><?php } ?>
                    <p><?php the_author_posts_link(); ?> - who has written <?php the_author_posts(); ?> posts on <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>.</p>
                    <p><?php the_author_description(); ?> <br style="clear:both;" /></p>
                    <p class="author_email"><a href="mailto:<?php the_author_email(); ?>">Contact the author</a></p>
                </div>
                
                <?php comments_template(); ?>
				
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