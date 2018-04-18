<?php
	include(TEMPLATEPATH . '/includes/version.php');
	$counter = 0; $counter2 = 0;
	$the_query = new WP_Query('cat=-'. $ex_feat . ',-' . $ex_vid . ',-' . $ex_aside . '&showposts=' . $showposts . '&orderby=post_date&order=desc');		
	while ($the_query->have_posts()) : $the_query->the_post(); $do_not_duplicate = $post->ID;		
?>
	<?php $counter++; $counter2++; ?>

	<div class="grid_5 <?php if ($counter == 1) { echo 'alpha'; } else { echo 'omega'; $counter = 0; } ?>">
    
    	<div class="box">
    					
            <div class="date-comments">
                <p class="fl"><?php the_time('j. F Y'); ?></p>
                <p class="fr"><span class="comments"></span><?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?></p>
            </div>
            
            <h2><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>            
        
            <?php if ( get_post_meta($post->ID,'image', true) ) { ?> <!-- DISPLAYS THE IMAGE URL SPECIFIED IN THE CUSTOM FIELD -->
                
                <a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>"><img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo get_post_meta($post->ID, "image", $single = true); ?>&amp;h=75&amp;w=75&amp;zc=1&amp;q=80" alt="<?php the_title(); ?>" class="fl" style="margin-top:5px;" /></a>          	
                
            <?php } ?> 
        
            <p><?php echo strip_tags(get_the_excerpt(), '<a><strong>'); ?></p>            
            
            <span class="continue"><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>">Continue reading...</a></span>
        
        </div> <!-- end .box -->		
         
	</div> <!-- end .grid5 -->         		
	
	<?php if ( !($counter2 == $showposts) && ($counter == 0) ) { ?> <div class="fix"></div> <?php } ?>    
            
	<?php endwhile; ?>
    
    <div class="fix"></div>
	   
    <?php $archives_page = get_option('premiumnews_archives_page') . '/'; ?>
    
	<span class="fr continue-archives"><a href="<?php echo "$archives_page"; ?>">See more articles in the archive</a></span>
