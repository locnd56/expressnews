<?php
                    
	$showfeatured = get_option('premiumnews_show_featured');
   if ( $showfeatured ) { 
                
?>

<?php 

	$showfeatured = get_option('premiumnews_featured_entries'); // Number of other entries to be shown
	include(TEMPLATEPATH . '/includes/version.php');

	$the_query = new WP_Query('cat=' . $ex_feat . '&showposts=' . $showfeatured . '&orderby=post_date&order=desc');
	$wp_query->in_the_loop = true; // Need this for tags to work

	while ($the_query->have_posts()) : $the_query->the_post(); $do_not_duplicate = $post->ID;
?>    

    <div class="box">
                
        <div id="featuredpost">
    
        <?php if ( get_post_meta($post->ID,'image', true) ) { ?> <!-- DISPLAYS THE IMAGE URL SPECIFIED IN THE CUSTOM FIELD -->

            <a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo get_post_meta($post->ID, "image", $single = true); ?>&amp;h=195&amp;w=540&amp;zc=1&amp;q=80" alt="<?php the_title(); ?>" /></a>

		<?php } ?>
                   
        <div class="date-comments">
            <p class="fl"><?php the_time('j. F Y'); ?></p>
            <p class="fr"><span class="comments"></span><?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?></p>
        </div>

        <h2><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
        
        <p class="content"><?php echo strip_tags(get_the_excerpt(), '<a><strong>'); ?></p>
        
        <span class="continue"><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>">Continue reading...</a></span>
        
        </div><!--/featuredpost -->
                        
    </div><!--/box -->

<?php endwhile; ?>


<?php
                    
	}
                
?>