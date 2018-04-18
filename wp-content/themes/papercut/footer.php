		<div id="footer">
			
			<div class="footer-inner clearfix">
				
				<div class="left">
					&copy; 2008 <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>
				</div>
				
				<div class="right">
					The Papercut theme by <a href="http://www.woothemes.com" title="WooThemes"><img src="<?php bloginfo('template_directory'); ?>/images/woothemes.gif" alt="WooThemes - Premium Wordpress Themes" width="90" height="26" /></a></div>
			  </div>
		</div>
	
	</div><!--/footer -->
	
	<?php wp_footer(); ?>
	
	<?php if ( get_option('woo_google_analytics') <> "" ) { echo stripslashes(get_option('woo_google_analytics')); } ?>

</body>

</html>