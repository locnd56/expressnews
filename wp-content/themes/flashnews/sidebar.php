<div id="rightcol">

	<?php include(TEMPLATEPATH . '/includes/stylesheet.php'); ?>

	<?php include('ads/ads-management.php'); ?>

	<?php include('ads/ads-top.php'); ?>			
	
    <div class="box2">
    
        <div class="top"></div>
        
        <ul class="nav1 idTabs">
			<li><a href="#pop"><span>Popular</span></a></li>
            <li><a href="#comm"><span>Comments</span></a></li>
            <li><a href="#feat"><span>Featured</span></a></li>
            <li><a href="#tagcloud"><span>Tags</span></a></li>
        </ul>
        
        <div class="spacer white">

            <ul class="list1" id="pop">
				<?php if (function_exists('akpc_most_popular')) { akpc_most_popular($limit = 10); } ?>
            </ul>

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
			
				<ul class="list1" id="tagcloud">
					<?php wp_tag_cloud('smallest=10&largest=18'); ?>
				</ul>
			
			<?php } ?>					


        </div>               
        <!--/spacer -->
        
        <div class="bot"></div>
        
    </div>
    <!--/box2 -->

	<?php
                    
    	$showasides = get_option('premiumnews_show_asides');
                
        if ($showasides) { 
                            
    ?>

    <div class="box2">
        
        <div class="top"></div>
        
        <div class="spacer">

            <h5><span class="fl">Asides</span> <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/ico-misc.gif" alt="" class="fr" /></a></h5>
            
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
        
        <div class="bot"></div>
    
    </div><!--/box2 -->
    
    <?php } ?>

	<?php
                    
        $showads = get_option('premiumnews_show_ads');
                
    	if($showads){ include('ads/ads-bottom.php'); }
                            
    ?>

	<?php if (function_exists('get_flickrrss')) { ?>
    
    <div class="box2">
        <div class="top"></div>
        <div class="spacer flickr">
            
            <h5>Latest <span style="color:#0063DC">Flick</span><span style="color:#FF0084">r</span></a> photos</h5>
            <?php get_flickrrss(); ?>
		
		</div><!--/spacer -->
        <div class="bot"></div>
    </div>
    <!--/box2 -->
    
    <?php } ?>
    		
</div><!--/rightcol-->

<div class="fix"></div>
