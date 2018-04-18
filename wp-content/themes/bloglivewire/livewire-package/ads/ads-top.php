<?php if ( !$GLOBALS['disable'] ) { ?>

<div class="col2_box">

<div class="ads">

	<h2>Site Sponsors</h2>

	<a <?php do_action('premiumnews_external_ad_link'); ?> href="<?php echo "$dest_url[1]"; ?>"><img src="<?php echo "$img_url[1]"; ?>" alt="" /></a>

	<a <?php do_action('premiumnews_external_ad_link'); ?> href="<?php echo "$dest_url[2]"; ?>"><img src="<?php echo "$img_url[2]"; ?>" alt="" class="last" /></a>

</div><!--/ads-->

</div><!--/col2_box-->

<?php } ?>