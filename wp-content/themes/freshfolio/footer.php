	<div id="footer">
		<p class="fl">&copy; <?php the_time('Y'); ?> <?php bloginfo(); ?>. Powered by <a href="#">Wordpress</a>. <a href="http://validator.w3.org/check?uri=<?php bloginfo('wpurl'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/ico-html.gif" alt="HTML" /></a> <a href="http://jigsaw.w3.org/css-validator/validator?uri=<?php bloginfo('wpurl'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/ico-css.gif" alt="CSS" /></a></p>
		<p class="fr"><a href="http://www.woothemes.com">Fresh Folio</a> by <a href="http://www.woothemes.com" title="WooThemes - Premium WordPress Themes"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/woothemes.png" alt="WooThemes - Premium Wordpress Themes" /></a></p>
	</div>
	<!--/footer -->
	<?php wp_footer(); ?>
</div>
<!--/page -->

<?php if ( get_option('woo_google_analytics') <> "" ) { echo stripslashes(get_option('woo_google_analytics')); } ?>

</div><!-- /#background -->

</body>
</html>
