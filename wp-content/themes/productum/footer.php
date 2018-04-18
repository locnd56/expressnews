		</div><!-- / #contentWrap -->
		
		</div><!-- / #content -->

		<div id="footer">
		
			<div id="footerWrap" class="container_16 clearfix">
			
				<div class="grid_4">
                
                 <!-- Add you sidebar manual code here to show above the widgets -->

				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(3) )  ?>		           

				<!-- Add you sidebar manual code here to show below the widgets -->
					
				</div>
				
				<div class="grid_4">
                
                <!-- Add you sidebar manual code here to show above the widgets -->

				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(4) )  ?>		           

				<!-- Add you sidebar manual code here to show below the widgets -->
					
				</div>
				
				<div class="grid_4">
                
                <!-- Add you sidebar manual code here to show above the widgets -->

				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(5) )  ?>		           

				<!-- Add you sidebar manual code here to show below the widgets -->
				
				</div>
				
				<div class="grid_4">
				
					 <!-- Add you sidebar manual code here to show above the widgets -->

				<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar(6) )  ?>		           

				<!-- Add you sidebar manual code here to show below the widgets -->
					
				</div>
				
			</div><!-- / #footerWrap -->
		
		</div><!-- / #footer -->
        
        <div class="container_16 clearfix">
        
        	<div class="grid_16 credits">
                	 <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> All rights reserved. Powered by <a href="http://www.wordpress.org">Wordpress</a>. Designed by <a href="http://www.woothemes.com"><img src="<?php bloginfo('template_url'); ?>/images/woo-themes.png" alt="Woo Themes" title="" /></a>
                </p>
        	</div><!-- / #credits -->
            
		</div><!-- / #container_16 -->
    	
	</div><!-- / #wrap -->
    
    <?php wp_footer(); ?>
    
	<?php if ( get_option('woo_google_analytics') <> "" ) { echo stripslashes(get_option('woo_google_analytics')); } ?>

	<script type="text/javascript">
    <!--//--><![CDATA[//><!--
        var clear = "<?php bloginfo('template_url'); ?>/img/blank.gif";
        var loading = "<?php bloginfo('template_url'); ?>/img/loading.gif";
    //-->!]]>
    </script>
    <script type="text/javascript" src="<?php bloginfo('template_url') ?>/includes/js/setup.imgswitch.js"></script>

</body>
</html>