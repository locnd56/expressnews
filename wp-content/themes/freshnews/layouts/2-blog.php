<?php
	include(TEMPLATEPATH . '/includes/version.php');
	
	$the_query = new WP_Query('cat=-'. $ex_feat . ',-' . $ex_vid . ',-' . $ex_aside . '&showposts=' . $showposts . '&orderby=post_date&order=desc');		
	$wp_query->in_the_loop = true; // Need this for tags to work
	while ($the_query->have_posts()) : $the_query->the_post(); $do_not_duplicate = $post->ID;		
?>
					
    	<div class="box">
        
        <h2><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        
        <div class="date-comments">
            <p class="fl"><?php the_time('D, M j, Y'); ?></p>    
            <p><span class="fr comments"><?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?></span></p>
        </div>        
    
        <?php if ( get_post_meta($post->ID,'image', true) ) { ?> <!-- DISPLAYS THE IMAGE URL SPECIFIED IN THE CUSTOM FIELD -->
            
            <a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>"><img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo get_post_meta($post->ID, "image", $single = true); ?>&amp;h=125&amp;w=125&amp;zc=1&amp;q=80" alt="<?php the_title(); ?>" class="fl" style="margin-top:5px;" /></a>          	
            
        <?php } ?> 
    
        <div class="entry">
        		<?php the_content(); ?>
        </div>
        
        <span class="continue"><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>">Continue reading...</a></span>    				
	
    	</div>
        
	<?php endwhile; ?>
	
    
	<?php $archives_page = get_option('premiumnews_archives_page') . '/'; ?>
    
	<span class="fr continue-archives"><a href="<?php echo "$archives_page"; ?>">See more articles in the archive</a></span>
