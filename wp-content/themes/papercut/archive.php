<?php get_header(); ?>
		
		<div id="content" class="clearfix">
		
			<div id="left-col">
		
				<div id="left-top">
		
					<div class="left-content">
		
						<?php if (have_posts()) : ?>
		
							<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
							<?php /* If this is a category archive */ if (is_category()) { ?>
								<h2 class="pink archive">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
							<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
								<h2 class="pink archive">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
							<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
								<h2 class="pink archive">Archive for <?php the_time('F jS, Y'); ?></h2>
							<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
								<h2 class="pink archive">Archive for <?php the_time('F, Y'); ?></h2>
							<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
								<h2 class="pink archive">Archive for <?php the_time('Y'); ?></h2>
							<?php /* If this is an author archive */ } elseif (is_author()) { ?>
								<h2 class="pink archive">Author Archive</h2>
							<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
								<h2 class="pink archive">Blog Archives</h2>
							<?php } ?>
		
								<div class="divider"></div><br />
		
							<?php while (have_posts()) : the_post(); $count++; ?>
		
								<h5 class="uppercase light">Posted on <?php the_time('F j, Y'); ?> - by <?php the_author_posts_link(); ?></h5>
		
								<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            					
            					<?php if ( get_post_meta($post->ID,'image', true) ) { ?> <!-- DISPLAYS THE IMAGE URL SPECIFIED IN THE CUSTOM FIELD -->
                
                						<a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>"><img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo get_post_meta($post->ID, "image", $single = true); ?>&amp;h=<?php if ( get_option('woo_thumb_height') <> "" ) { echo get_option('woo_thumb_height'); } else { ?>100<?php } ?>&amp;w=<?php if ( get_option('woo_thumb_width') <> "" ) { echo get_option('woo_thumb_width'); } else { ?>100<?php } ?>&amp;zc=1&amp;q=80" alt="<?php the_title(); ?>" class="thumb-preview" /></a>          	
                
            					<?php } ?>								
		
								<?php the_content(); ?>
		
									<div class="divider"></div><br />
		
							<?php endwhile; ?>
		
						<?php endif; ?>
		
					</div><!--left-content-->
		
					<?php include('ads/ad468x60.php'); ?>
					
					<div class="divider"></div><br />
				
				</div><!--left-top-->
				
				<div id="left-bottom"></div>
			
	</div><!--left-col-->
			
	<div id="right-col">
		<?php get_sidebar(); ?>
	</div>
			
</div><!--content-->

</div><!--content-back-->

<?php get_footer(); ?>
