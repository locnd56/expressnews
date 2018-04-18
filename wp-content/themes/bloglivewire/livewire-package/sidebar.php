<div class="col2">

	<?php include('ads/ads-management.php'); ?>
	
	<?php include('ads/ads-300x250.php'); ?>

   <div class="col2_box">
   
   <?php 
   
   if (is_page) { ?> 
   
   <?php
if($post->post_parent)
$children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0"); else
$children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
if ($children) { ?>
<div id="related-cats" class="widget" >
<h2><?php the_title(); ?> Sub Pages</h2>
	<ul>
		<?php echo $children; ?>
	</ul>
</div>
<?php } ?>
<?php } ?>

   
   <?php if (is_single()) { ?>
	
		<?php
				$catlist = "";
				foreach((get_the_category()) as $category) { $catlist .= $category->cat_ID; } 
				$the_query = new WP_Query('cat=' . $catlist . '&showposts=5&orderby=post_date&order=desc');
		?>
			
		<div id="related-cats" class="widget" >
			<h2>More posts in this category</h2>
			<ul>
				<?php while ($the_query->have_posts()) : $the_query->the_post(); $do_not_duplicate = $post->ID; ?>	
				
						<li><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
				<?php endwhile; ?>
				
						<li class="cat_feed"><a href="<?php get_category_rss_link(true, $category->cat_ID, ''); ?>">This Category's RSS Feed</a></li>
			</ul>
		</div>
   
   <?php } else { ?>
   
   <div class="sideTabs">
   
        <ul class="idTabs">
				<li><a href="#feat">Latest News</a></li>
				<li><a href="#pop">Most Read</a></li>
            <li><a href="#comm">Most Commented</a></li>
        </ul>
        
        <div class="fix"></div>

		<div id="sidetabber">
		
			<ul class="list2" id="feat">
				<?php query_posts('showposts=10'); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a><?php edit_post_link(__('Edit'), ' &#183; ', ''); ?></li>
				<?php endwhile; endif; ?>
			</ul>

            <ul class="list1" id="pop">
				<?php if (function_exists('akpc_most_popular')) { akpc_most_popular($limit = 10); } ?>
            </ul>

			<ul class="list3" id="comm">
				<?php if (function_exists('mdv_most_commented')) {  mdv_most_commented(10); } ?>
			</ul>	

		</div><!--/sidetabber-->
	
	</div><!--/sideTabs-->
   	
	<?php } ?>
	
    <div class="fix" style="height:10px !important;"></div>
    
    <?php include('ads/ads-management.php'); ?>
	
	<?php if (function_exists('get_flickrrss')) { ?>
	
		<div class="flickr">
			<?php $flickr_url = get_option('premiumnews_flickr_url'); ?>
			<h2>Our Flickr Photos <span class="flickr-ar"> - <a href="<?php echo "$flickr_url"; ?>">See all photos</a></span></h2>
			<div class="photos"><?php get_flickrrss(); ?></div>
		</div><!--/flickr-->
	
	<?php } ?>
    
	<?php include('ads/ads-bottom.php'); ?>
	
	<div class="fix"></div>
	
	<div class="subcol fl">
	
		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(1) ) : else : ?>		
		
			<div class="widget">
			
				<h2 class="hl">Related Sites</h2>
				<ul>
					<?php get_links('-1','<li>','</li>'); ?>
				</ul>
			
			</div><!--/widget-->
		
		<?php endif; ?>
	
	</div><!--/subcol-->
		
	<div class="subcol fr">

		<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>		
		
			<div class="widget">
				
				<h2 class="hl">Information</h2>
				<ul>
					<li><a href="http://www.premiumnewstheme.com">Premium News Home</a></li>
					<li><a href="http://www.markforrester.co.za">Designed by Mark Forrester</a></li>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>					
					<li><a href="http://www.wordpress.org">Powered by Wordpress</a></li>
					<li><a href="http://localhost/premium/?feed=rss2">Entries RSS</a></li>
					<li><a href="http://localhost/premium/?feed=comments-rss2">Comments RSS</a></li>
				</ul>
				
			</div><!--/widget-->
		
		<?php endif; ?>
			
	</div><!--/subcol-->
	
	<div class="fix"></div>
    
    </div><!--/col2_box-->
	
</div><!--/col2-->
