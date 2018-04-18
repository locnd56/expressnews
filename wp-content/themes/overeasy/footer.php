	<?php if ( !is_home() && !is_page() && ( function_exists('dynamic_sidebar') && (is_sidebar_active(2) || is_sidebar_active(3) || is_sidebar_active(4)) ) ) : // Don't show on the front page ?>
    <!-- Bottom Widgets -->
	<div class="box6">
		<div class="top"></div>
		<div class="spacer">
            <div class="col3">
                <?php dynamic_sidebar(2); ?>		           
            </div>
            <!--/col3 -->
            <div class="col3">
                <?php dynamic_sidebar(3);  ?>		           
            </div>
            <!--/col3 -->
            <div class="col3 last">
                <?php dynamic_sidebar(4);  ?>		           
            </div>
            <!--/col3 -->
            <br class="fix" />
		</div>
		<!--/spacer -->
		<div class="bot"></div>
	</div>
	<!--/box6 -->
    <?php endif; ?>

	<!-- Footer -->
	<div id="footer">
        <div class="box6">
            <div class="top"></div>
            <div class="spacer">
                <div class="fl">&copy; <?php the_time('Y'); ?> <?php bloginfo(); ?> - Powered by <a href="http://www.wordpress.org">Wordpress</a>.</div>
                <div class="fr">OverEasy by &nbsp; <a href="http://www.woothemes.com"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/ico-woothemes-trans.png" alt="WooThemes - Premium Wordpress Themes" width="86" height="21" /></a></div>
				<div class="fix"></div>
			</div>
            <!--/spacer -->
            <div class="bot"></div>
        </div>
	</div>
	<!--/footer -->
   	<?php wp_footer(); ?>

</div>
<!--/page -->

<?php if ( get_option('woo_google_analytics') <> "" ) { echo stripslashes(get_option('woo_google_analytics')); } ?>

</body>
</html>
