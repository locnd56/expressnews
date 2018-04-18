	<?php if ( ( function_exists('dynamic_sidebar') && (is_sidebar_active(2) || is_sidebar_active(3) || is_sidebar_active(4)) ) ) : ?>

	<!-- Footer Starts -->
	<div id="footer-out">
	<div id="footer">
	<div class="position wrap">
		
		<!-- Footer Widget Area Starts -->
		
		<div class="block">
                <?php dynamic_sidebar(2); ?>		           
		</div>
		<div class="block">
                <?php dynamic_sidebar(3); ?>		           
		</div>
		<div class="block">
                <?php dynamic_sidebar(4); ?>		           
		</div>
		
		<!-- Footer Widget Area Ends -->
		<?php endif; ?>
		
	</div>
	</div>
	</div>
	<!-- Footer Ends -->
	<!-- Copyright Starts -->
	<div id="copyright-out">
	<div id="copyright" class="wrap">
		<div class="col-left">
			<p>&copy; 2008 <?php bloginfo(); ?>. All Rigths Reserved.</p>
		</div>
		<div class="col-right">
			<p>Powered by Wordpress. Designed by <a href="#"><img src="<?php bloginfo('template_directory'); ?>/<?php woo_style_path() ?>/img_woothemes.jpg" width="87" height="21" alt="Woo Themes" /></a></p>
		</div>
	</div>
	</div>
	<!-- Copyright Ends -->
	
</div>
<?php wp_footer(); ?>
<?php if ( get_option('woo_google_analytics') <> "" ) { echo stripslashes(get_option('woo_google_analytics')); } ?>

</body>
</html>