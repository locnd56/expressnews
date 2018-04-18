<?php
		$version = get_option('premiumnews_wpv'); // Version of WordPress you are using
		
		if ($version == "WP 2.3 or newer") { 
		
			$featuredcat = get_option('premiumnews_featured_category'); // ID of the Featured Category
			$ex_feat = $wpdb->get_var("SELECT term_id FROM $wpdb->terms WHERE name='$featuredcat'");
	
			$vidcat = get_option('premiumnews_video_category'); // ID of the Video Category
			$ex_vid = $wpdb->get_var("SELECT term_id FROM $wpdb->terms WHERE name='$vidcat'");

			$asidecat = get_option('premiumnews_asides_category'); // ID of the Asides Category
			$ex_aside = $wpdb->get_var("SELECT term_id FROM $wpdb->terms WHERE name='$asidecat'");			
			
			$showposts = get_option('premiumnews_other_entries'); // Number of other entries to be shown
			$show_headlines = get_option('premiumnews_other_entries'); // Number of headlines to be shown
		
		} else {
		
			$featuredcat = get_option('premiumnews_featured_category'); // ID of the Featured Category
			$ex_feat = $wpdb->get_var("SELECT cat_ID FROM $wpdb->categories WHERE cat_name='$featuredcat'");

			$vidcat = get_option('premiumnews_video_category'); // ID of the Video Category
			$ex_vid = $wpdb->get_var("SELECT cat_ID FROM $wpdb->categories WHERE cat_name='$vidcat'");

			$asidecat = get_option('premiumnews_asides_category'); // ID of the Asides Category
			$ex_aside = $wpdb->get_var("SELECT cat_ID FROM $wpdb->categories WHERE cat_name='$asidecat'");			
			
			$showposts = get_option('premiumnews_other_entries'); // Number of other entries to be shown
			$show_headlines = get_option('premiumnews_other_entries'); // Number of headlines to be shown		
		
		}
?>