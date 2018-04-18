<div id="bottom" class="fullspan">
	
	<div class="container_16 clearfix">
		
		<div class="grid_10">
		
			<?php $about = get_option('woo_about'); ?>

        	<?php query_posts('page_id=' . $about); ?>
	
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<h2><?php the_title(); ?></h2>
				
				<?php the_content(); ?>				
			
			<?php endwhile; endif; ?>
		
		</div>
		
		
		<div class="grid_6">
			<div id="newsletter">
			<?php $contact = get_option('woo_contact'); ?>

        	<?php query_posts('page_id=' . $contact); ?>
	
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<h3><?php the_title(); ?></h3>
				
				<?php the_content(); ?>				
			
			<?php endwhile; endif; ?>
			</div><!-- /newsletter -->
		</div>
	</div><!-- /container_16 -->

</div><!-- /bottom -->

<div id="footer" class="fullspan">

	<div class="container_16">
		<div class="grid_16">
			<p><span class="floatleft">Copyright &copy; <?php bloginfo(); ?></span><span class="floatright"> <a href="http://www.woothemes.com">VibrantCMS Theme</a> by <a href="http://www.woothemes.com" title="WooThemes - Premium WordPress Themes"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/woothemes.png" alt="WooThemes - Premium Wordpress Themes" /></a></span></p>
		</div>
	</div><!-- /container_16 -->

</div><!-- /footer -->

</div><!-- /wrap -->

<?php wp_footer(); ?>

<?php if ( get_option('woo_google_analytics') <> "" ) { echo stripslashes(get_option('woo_google_analytics')); } ?>

</body>
</html>