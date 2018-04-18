<?php get_header(); ?>

		<!-- Content Starts -->
		<div id="content" class="wrap">
			<div id="main" class="col-left">

			<?php if (have_posts()) : ?>
            <?php the_post(); ?>

				<div id="main-content">
																			
                    <?php woo_get_custom('embed'); ?>

					<!-- Post Starts -->
					<div class="post wrap">

						<h2 class="page">Error 404 - Page not found!</h2>
						<p>The page you trying to reach does not exist, or has been moved. Please use the menus or the search box to find what you are looking for.</p>

					</div>
					<!-- Post Ends -->
														
				</div>
				<!-- main-content ends -->

                <div id="comments">
                    <?php $withcomments = 1; comments_template(); ?>
                </div>

			<?php else: ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif; ?>

			</div>
			<!-- main ends -->
            			
			<div class="col-right">
				<?php get_sidebar(); ?>
			</div>
		</div>
		<!-- Content Ends -->
        
<?php get_footer(); ?>
