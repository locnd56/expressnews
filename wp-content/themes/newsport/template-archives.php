<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

        <div id="content">
            <div class="post">
                <div class="entry">

                <h2>The Last 30 Posts</h2>
    
                <ul>
                    <?php query_posts('showposts=30'); ?>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <?php $wp_query->is_home = false; ?>
                        <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a> - <?php the_time('j F Y') ?> - <?php echo $post->comment_count ?> comments</li>
                    
                    <?php endwhile; endif; ?>	
                </ul>				
            
                <h2>Categories</h2>
    
                <ul>
                    <?php wp_list_categories('title_li=&hierarchical=0&show_count=1') ?>	
                </ul>	

                <h2>Monthly Archives</h2>
    
                <ul>
                    <?php wp_get_archives('type=monthly&show_post_count=1') ?>	
                </ul>				

                </div>
            </div>
        </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
