		<div class="fix"></div>

	</div><!--/columns -->
	
	<div id="footer">
		<p>Copyright &copy; <a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a>. <a href="http://www.woothemes.com">NewsPress Theme</a> by <a href="http://www.woothemes.com" title="WooThemes - Premium WordPress Themes"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/woothemes.png" alt="WooThemes - Premium Wordpress Themes" /></a></p>
	</div><!--/footer -->

</div><!--/page -->

<?php wp_footer(); ?>

<?php if ( get_option('woo_google_analytics') <> "" ) { echo stripslashes(get_option('woo_google_analytics')); } ?>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/jquery-1.1.3.1.min.js"></script>	

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/jquery.easing.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/jquery.lavalamp.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/tabs.js"></script>			

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/superfish.js"></script>	

<script type="text/javascript">
$(document).ready(function(){
	$(".nav2")
	.superfish({
		animation : { opacity:"show",height:"show"}
	})
	.find(">li:has(ul)") /* .find(">li[ul]") in jQuery less than v1.2*/
		.mouseover(function(){
			$("ul", this).bgIframe({opacity:false});
		})
		.find("a")
			.focus(function(){
				$("ul", $(".nav>li:has(ul)")).bgIframe({opacity:false});
				/* $("ul", $(".nav>li[ul]")).bgIframe({opacity:false});
				in jQuery less than v1.2*/
			});
});
</script>

<script type="text/javascript">
$(document).ready(function(){
	$(".cats-list")
	.superfish({
		animation : { opacity:"show",height:"show"}
	})
	.find(">li:has(ul)") /* .find(">li[ul]") in jQuery less than v1.2*/
		.mouseover(function(){
			$("ul", this).bgIframe({opacity:false});
		})
		.find("a")
			.focus(function(){
				$("ul", $(".nav>li:has(ul)")).bgIframe({opacity:false});
				/* $("ul", $(".nav>li[ul]")).bgIframe({opacity:false});
				in jQuery less than v1.2*/
			});
});
</script>

<script type="text/javascript">
	$(function() {
		$("#lavaLamp, #2, #3").lavaLamp({
			fx: "backout", 
			speed: 700,
			click: function(event, menuItem) {
				return true;
			}
		});
	});
</script>		


</body>
</html>