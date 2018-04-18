		<div class="fix"></div>

		<div class="box boxbottom">
			<div class="top"></div>
			<div class="spacer">

				<?php
                    
                    $showvideo = get_option('premiumnews_show_video');
                
                    if($showvideo){ include(TEMPLATEPATH . '/includes/video.php'); }
                            
                ?>

				<div class="col3">
					<h3>Categories</h3>
					<ul class="list3">
						<?php wp_list_categories('title_li=&hierarchical=0&show_count=1') ?>	
					</ul>
				</div>
                
				<div class="col3">
					<h3>Archives</h3>
					<ul class="list3">
		 				<?php wp_get_archives('type=monthly&show_post_count=1') ?>		
					</ul>
				</div>
                
				<div class="fix"></div>
			</div>
			<!--/spacer -->
			<div class="bot"></div>
		</div>
		<!--/box -->
	</div>
	<!--/columns -->
	<div id="page-bot"></div>	
    
</div>
<!--/page -->

<div id="footer">
    <p class="fl">&copy; <?php the_time('Y'); ?> <?php bloginfo(); ?>. Powered by <a href="#">Wordpress</a>. </p>
    <p class="fr"><a href="http://www.premiumnewstheme.com">Flash News Theme</a> by <a href="http://www.adii.co.za">Adii</a> and <a href="http://www.jepson.no">Magnus Jepson</a></p>
</div>

<?php wp_footer(); ?>

</body>
</html>