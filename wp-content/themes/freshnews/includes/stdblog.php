<?php
	include(TEMPLATEPATH . '/includes/version.php');
	
	$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$the_query = new WP_Query('cat=-' . $ex_vid . ',-' . $ex_aside . '&orderby=post_date&order=desc&paged=' . $page);		
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

	<span class="fl continue-archives-alt"><?php next_posts_link('Older Entries') ?></span>	    
	<span class="fr continue-archives"><?php previous_posts_link('Newer Entries') ?></span>
