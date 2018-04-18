<div id="sidebar" class="grid_6">

	<?php include('ads/ads-management.php'); ?>

	<?php include('ads/ads-300x250.php'); ?>

	<?php include('ads/ads-top.php'); ?>			
	
    <div class="box2">
           
        <ul class="idTabs">
			<li><a href="#pop">Popular</a></li>
            <li><a href="#comm">Comments</a></li>
            <li><a href="#feat">Featured</a></li>
            <li><a href="#tagcloud">Tags</a></li>
        </ul>
        
        <div class="spacer white">

			<?php if (function_exists('akpc_most_popular')) { ?>
	            <ul class="list1" id="pop">            
					<?php akpc_most_popular($limit = 10); ?>                    
    	        </ul>
            <?php } ?>

			<ul class="list1" id="comm">
				<?php if (function_exists('mdv_most_commented')) {  mdv_most_commented(10); } ?>
			</ul>	

			<ul class="list1" id="feat">
				<?php 
					include(TEMPLATEPATH . '/includes/version.php');	
					$the_query = new WP_Query('cat=' . $ex_feat  . '&showposts=10&orderby=post_date&order=desc');	
					while ($the_query->have_posts()) : $the_query->the_post(); $do_not_duplicate = $post->ID;
				?>
				
					<li><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
				
				<?php endwhile; ?>		
			</ul>
            
			<?php if (function_exists('wp_tag_cloud')) { ?>
			
				<div class="list1" id="tagcloud">
					<?php wp_tag_cloud('smallest=10&largest=18'); ?>
				</div>
			
			<?php } ?>					

        </div>               
        <!--/spacer -->
        
    </div>
    <!--/box2 -->
    
    
	<?php
        
        $showvideo = get_option('premiumnews_show_video');
    
        if($showvideo){ include(TEMPLATEPATH . '/includes/video.php'); }
                
    ?>
            

	<?php
                    
    	$showasides = get_option('premiumnews_show_asides');
                
        if ($showasides) { 
                            
    ?>

    <div class="box2">
               
        <div class="spacer">

            <h3><span class="fl">Asides</span> <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/ico-misc.gif" alt="" class="fr" /></a></h3>
            
            <ul class="list2">
        
        	<?php 
        		$asides = get_option('premiumnews_asides_entries');
        		include(TEMPLATEPATH . '/includes/version.php');
        		
        		$the_query = new WP_Query('cat=' . $ex_aside . '&showposts=' . $asides . '&orderby=post_date&order=desc');
        		while ($the_query->have_posts()) : $the_query->the_post(); $do_not_duplicate = $post->ID;
        	?>
                
                <li><?php the_content(); ?></li>
            
            <?php endwhile; ?>
            
            </ul>
       
        </div><!--/spacer -->
            
    </div><!--/box2 -->
    
    <?php } ?>

	<?php if (function_exists('get_flickrrss')) { ?>
    
    <div class="box2">
        <div class="top"></div>
        <div class="spacer flickr">
            
            <h3>Latest <span style="color:#0063DC">Flick</span><span style="color:#FF0084">r</span> photos</h3>
            <?php get_flickrrss(); ?>
		
		</div><!--/spacer -->
        <div class="bot"></div>
    </div>
    <!--/box2 -->
    
    <?php } ?>

	<?php include('ads/ads-bottom.php'); ?>
    
	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>		
    
	<?php endif; ?>

    <div class="clear"></div>

	<div class="grid_3 alpha">
	
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>		
				
		<?php endif; ?>
	
	</div><!--/grid_3 alpha-->
		
	<div class="grid_3 omega">

		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(3) ) : else : ?>		
				
		<?php endif; ?>
			
	</div><!--/grid_3 omega-->	
    
    <div class="clear"></div>
    		
</div><!--/sidebar-->

<div class="fix"></div>
