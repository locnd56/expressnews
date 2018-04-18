<?php get_header(); ?>

		<div id="centercol" class="grid_10">

		<?php if (have_posts()) : ?>
	
			<?php while (have_posts()) : the_post(); ?>										

				<div class="post box" id="post-<?php the_ID(); ?>">
				
					<h2 class="singleh2"><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                    <div class="date-comments">
                        <p class="fl"><?php the_time('D, M j, Y'); ?></p>    
                        <p class="fr"><?php the_category(', ') ?></p>		                                          
                    </div>        
		
					<div class="entry">
						<?php if ( get_post_meta($post->ID,'image', true) ) { ?> <!-- DISPLAYS THE IMAGE URL SPECIFIED IN THE CUSTOM FIELD -->
                            
                            <a title="<?php the_title(); ?>" href="<?php echo get_post_meta($post->ID, "image", $single = true); ?>" rel="bookmark">
                            	<img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo get_post_meta($post->ID, "image", $single = true); ?>&amp;h=100&amp;w=100&amp;zc=1&amp;q=80" alt="<?php the_title(); ?>" class="fl" style="margin-top:5px;" />  
                            </a>
						<?php } ?> 

						<?php the_content('<span class="continue">Continue Reading</span>'); ?>						
					</div>

					<?php the_tags('<span class="tags">', ', ', '</span>'); ?> 
				
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

				</div><!--/post-->			

				<div id="comments" class="box2">
					<?php comments_template(); ?>
				</div>

		<?php endwhile; ?>
		
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>		
	
	<?php endif; ?>							

		</div><!--/centercol-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>