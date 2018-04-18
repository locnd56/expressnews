
		<div class="fix"></div>
	
	</div><!-- /container_16 -->
	
	<div id="footer">
	
		<div class="container_16">
			
			<?php if ( get_option('woo_nav_footer') ) { ?>
				<div class="footer_nav">
					
					<ul>
						<li><a href="<?php bloginfo('url'); ?>">Home</a></li>
						<?php woo_show_pagemenu(); ?>
					</ul>	
				
				</div><!-- /footer_nav -->
				
				<div class="fix"></div>
			<?php } ?>
			
			<div class="credit">Copyright &copy; 2009 <?php bloginfo('name'); ?>. All Rights Reserved. <span><a href="<?php if ( get_option('woo_feedburner_url') <> "" ) { echo get_option('woo_feedburner_url'); } else { echo get_bloginfo_rss('rss2_url'); } ?>">Subscribe to my RSS Feed.</a></span></div><!-- /credit -->
		
		</div>
	
	</div><!-- /footer -->

</div><!-- /bg-wrapper -->

<?php wp_footer(); ?>
<?php if ( get_option('woo_google_analytics') <> "" ) { echo stripslashes(get_option('woo_google_analytics')); } ?>

<?php if ( get_option('woo_twitter_user') ) { ?>
	<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
	<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/<?php echo get_option('woo_twitter_user'); ?>.json?callback=twitterCallback2&amp;count=5"></script>
<?php } ?>

</body>
</html>