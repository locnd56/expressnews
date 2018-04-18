	<!-- footer Starts -->
	<div id="footer-out">
	<div id="footer" class="wrap">
		<div class="col-left">
			<p>&copy; 2008 <?php bloginfo(); ?>. All Rights Reserved.</p>
		</div>
		<div class="col-right">
			<p>Powered by Wordpress. Designed by <a href="http://www.woothemes.com"><img src="<?php bloginfo('template_directory'); ?>/images/woothemes.png" width="87" height="21" alt="Woo Themes" /></a></p>
		</div>
	</div>
	</div>
	<!-- footer Ends -->
	
</div>
<?php wp_footer(); ?>
<?php if ( get_option('woo_google_analytics') <> "" ) { echo stripslashes(get_option('woo_google_analytics')); } ?>

<?php if ( get_option('woo_twitter') ) { ?>
	<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
	<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/<?php echo get_option('woo_twitter'); ?>.json?callback=twitterCallback2&amp;count=1"></script>
<?php } ?>

</body>
</html>