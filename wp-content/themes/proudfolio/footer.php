			<br class="dirtyLittleTrick" />
		</div><!-- .wrapper -->
		
		<div class="footer">
			<div>
				<div class="feeds">
					<h2>Subscribe</h2>
					<ul>
							<li><a href="<?php echo $GLOBALS['portfolio_rss']; ?>" title="Portfolio Feed">Portfolio</a></li>
				        	<li><a href="<?php echo $GLOBALS['blog_rss']; ?>" title="Blog Feed">Blog</a></li>
				        	<li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="Comments Feed">Blog comments</a></li>
					</ul>
				</div><!-- .feeds -->
				<div class="credits">
					<h2>&copy; 2008 <?php bloginfo('name') ?>.<br />All rights reserved.</h2>
					<p class="disclaimer"><?php echo get_option('woo_disclaimer'); ?></p>
					<p>Design by <a href="http://www.woothemes.com" title="WooThemes - Premium WordPress Themes"><img src="<?php bloginfo('stylesheet_directory'); ?>/style/images/woothemes.png" alt="WooThemes - Premium Wordpress Themes" /></a></p>
					<p>Powered by <a href="http://wordpress.org/" title="WordPress" rel="generator">Wordpress</a></p>
				</div><!-- .credits -->
			</div>
		</div><!-- .footer -->

<?php wp_footer() ?>

<?php if ( get_option('woo_google_analytics') <> "" ) { echo stripslashes(get_option('woo_google_analytics')); } ?>

	</body>

</html>