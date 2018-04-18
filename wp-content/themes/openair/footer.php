	<div id="footer">
		<div class="container clearfix">
			<p class="copyright">
				Copyright &copy; <?php the_time('Y'); ?> <?php bloginfo('name'); ?> - Powered by <a href="http://wordpress8.org">Wordpress</a>
			</p>
			<p class="woothemes">
				<a href="http://www.woothemes.com" class="woothemes-link">Open Air by</a>
			</p>
		</div>
	</div>
	<?php wp_footer(); ?>
    
<?php if ( get_option('woo_google_analytics') <> "" ) { echo stripslashes(get_option('woo_google_analytics')); } ?>
    
</body>
</html>