	<!-- bottom Starts -->
    <div id="bottom-tile"></div>
	<div id="bottom-out">
        <div id="bottom" class="wrap">
    
            <ul id="features-tabs" class="clearfix">
                
                <li><a href="#tab-1">Most Popular</a></li>
                <li><a href="#tab-2">Random</a></li>
                
                <!--<li><a href="#tab-3">Tab name</a></li>-->
                                                        
            </ul><!-- End features-tabs -->
        
            <div id="features-top"></div><!-- End features-top -->
            
            <div id="features">
                                                            
                <div id="tab-1" class="clearfix">                
                    <?php include( TEMPLATEPATH . '/includes/popular.php' ); ?>												
                </div>
                                
                <div id="tab-2" class="clearfix">
                    <?php
                     $rand_posts = get_posts('numberposts=9&orderby=rand');
                     foreach( $rand_posts as $post ) :
                        
                        woo_get_image('image','80','80');
                     
                     endforeach; ?>

                </div>

                <!-- Remove comments to add tab
                <div id="tab-2" class="clearfix">
                    tab2										
                </div>
                -->

            </div><!-- End features -->
            
            <div class="wrap">
                
                <!-- Footer Widget Area Starts -->
                
                <div class="block left">
					<?php dynamic_sidebar(2); ?>		           
                </div>
                <div class="block middle">
					<?php dynamic_sidebar(3); ?>		           
                </div>
                <div class="block right">
					<?php dynamic_sidebar(4); ?>		           
                </div>
                
                <!-- Footer Widget Area Ends -->
                
            </div>
            
        </div><!-- bottom-out Ends -->
	</div>
	<!-- bottom Ends -->

	<!-- footer Starts -->
	<div id="footer-out">
	<div id="footer" class="wrap">
		<div class="col-left">
			<p>&copy; 2008 <?php bloginfo(); ?>. All Rights Reserved.</p>
		</div>
		<div class="col-right">
			<p>Powered by <a href="http://www.wordpress.org">Wordpress</a>. Designed by <a href="http://www.woothemes.com"><img src="<?php bloginfo('template_directory'); ?>/images/woothemes.png" width="87" height="21" alt="Woo Themes" /></a></p>
		</div>
	</div>
	</div>
	<!-- footer Ends -->
	
</div>
<?php wp_footer(); ?>
<?php if ( get_option('woo_google_analytics') <> "" ) { echo stripslashes(get_option('woo_google_analytics')); } ?>

<script type="text/javascript">
<!--
function showlayer(layer){
var myLayer = document.getElementById(layer);
if(myLayer.style.display=="none" || myLayer.style.display==""){
	myLayer.style.display="block";
} else {
	myLayer.style.display="none";
}
}            
-->
</script>

</body>
</html>