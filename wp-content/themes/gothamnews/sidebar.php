		<div id="sidebar" class="col-right">

			<!-- TABS STARTS -->           
			<div id="tabs" class="block">
                <ul class="tabs wrap">
                    <li><a href="#comm">Comments</a></li>
                    <li><a href="#feat">Featured</a></li>
                    <li><a href="#tagcloud">Tags</a></li>
                </ul>
                
                <ul class="inside" id="comm">
                    <div class="border-clear"></div>
                    <?php include(TEMPLATEPATH . '/includes/comments.php' ); ?>                    
                </ul>	
    
                <ul class="inside" id="feat">
                    <div class="border-clear"></div>
                    <?php 
					$feat = get_option('woo_featured_category');
                        $the_query = new WP_Query('category_name=' . get_option('woo_featured_category')  . '&showposts=5&orderby=post_date&order=desc');	
                        while ($the_query->have_posts()) : $the_query->the_post(); $do_not_duplicate = $post->ID;
                    ?>
                    
                        <li><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
                    
                    <?php endwhile; ?>		
                </ul>
                
                <ul class="inside" id="tagcloud">
                    <?php wp_tag_cloud('smallest=10&largest=18'); ?>
                </ul>
                    
            </div>      
			<!-- TABS ENDS -->

			<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>
			<?php endif; ?>
		</div>