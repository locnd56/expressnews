	<!-- FOOTER STARTS -->
	<div id="footer-out">
	<div id="footer" class="wrap">
        
		<div class="widget block">
			<?php dynamic_sidebar(2) ?>
		</div>
		<div class="widget block">
			<?php dynamic_sidebar(3) ?>
		</div>
		<div class="widget block last">
			<?php dynamic_sidebar(4) ?>
		</div>
	</div>
	</div>
	<!-- FOOTER ENDS -->
	<div id="copyright-out">
	<div id="copyright" class="wrap">
		<div class="col-left">
			<ul>
				<?php if (is_page()) { $highlight = "page_item"; } else {$highlight = "page_item current_page_item"; } ?>
				<li class="<?php echo $highlight; ?> first"><a href="<?php bloginfo('url'); ?>">Home</a></li>
				<?php wp_list_pages('sort_column=menu_order&depth=1&title_li='); ?>
			</ul>
		<p>&copy; Copyright <?php bloginfo('name'); ?>. All Rights Reserved.</p>
		</div>
		<div class="col-right">
			<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/img_top.gif" width="34" height="24" alt="Back on Top" /></a>
		</div>
	</div>
	</div>
<?php wp_footer(); ?>

<?php if ( get_option('woo_google_analytics') <> "" ) { echo stripslashes(get_option('woo_google_analytics')); } ?>
</body>
</html>