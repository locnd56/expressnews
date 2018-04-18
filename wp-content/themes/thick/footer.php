		<div class="clear">&nbsp;</div>
	
	</div>
	<!-- /wrapper -->

	<!-- footer -->
	<div id="footer" class="container_16">		
		<p id="footer-meta" class="grid_8">&copy; 2008 <?php bloginfo('name'); ?>, All Rights Reserved</p>
		<p id="footer-credits" class="grid_8"><a href="http://www.woothemes.com"><img src="<?php bloginfo('stylesheet_directory'); ?>/<?php echo woo_style_path(); ?>/images/woo-logo.gif" alt="WooThemes" id="woo" /></a>THiCK by</p>		
		<div class="clear">&nbsp;</div>		
	</div>
	<!-- /footer -->

<?php if ( get_option('woo_twitter') ) { ?>
	<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
	<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/<?php echo get_option('woo_twitter'); ?>.json?callback=twitterCallback2&amp;count=1"></script>
<?php } ?>
	
</body>
</html>
	