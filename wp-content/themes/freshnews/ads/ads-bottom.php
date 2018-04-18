<?php $show = get_option('premiumnews_show_ads_bottom'); ?>

<?php if ( $show ) { ?>

<div class="box2">
       
    <div class="ads"> 
        
        <a <?php do_action('premiumnews_external_ad_link'); ?> href="<?php echo "$dest_url[3]"; ?>"><img src="<?php echo "$img_url[3]"; ?>" alt="" /></a>

        <a <?php do_action('premiumnews_external_ad_link'); ?> href="<?php echo "$dest_url[4]"; ?>"><img src="<?php echo "$img_url[4]"; ?>" alt="" class="last" /></a>
        
    </div>

</div>
<!--/box2 -->

<?php } ?>