<?php

/*
Get Image from custom field
This function gets the custom field image and uses thumb.php to resize it
Parameters: 
		$key = Custom field key eg. "image"
		$width = Set width manually without using $type
		$height = Set height manually without using $type
 		$class = CSS class to use on the img tag eg. "alignleft". Default is "thumbnail"
		$quality = Enter a quality between 80-100. Default is 90
*/
function woo_get_image($key, $width, $height, $class = "thumbnail", $quality = 90) {

global $post;
$custom_field = get_post_meta($post->ID, $key, true);

if($custom_field) { //if the user set a custom field ?>

	<?php if (get_option('woo_resize')) : ?>

<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><img src="<?php echo bloginfo('template_url'); ?>/thumb.php?src=<?php echo $custom_field; ?>&amp;h=<?php echo $height; ?>&amp;w=<?php echo $width; ?>&amp;zc=1&amp;q=<?php echo $quality; ?>" alt="<?php the_title(); ?>" class="<?php echo $class; ?>" /></a>

	<?php endif; 
} else { 
return; 
}

}

/*
Get Video
This function gets the embed code from the custom field
Parameters: 
		$key = Custom field key eg. "embed"
		$width = Set width manually without using $type
		$height = Set height manually without using $type
*/

function woo_get_embed($key, $width, $height) {

global $post;
$custom_field = get_post_meta($post->ID, $key, true);

if ($custom_field) : 
	
	// Get custom width and height
	$custom_width = get_post_meta($post->ID, 'width', true);
	$custom_height = get_post_meta($post->ID, 'height', true);	
	
	// Set values
	if ( !$custom_width ) $width = 'width="'.$width.'"'; else $width = 'width="'.$custom_width.'"';
	if ( !$custom_height ) $height = 'height="'.$height.'"'; else $height = 'height="'.$custom_height.'"';
	
	$custom_field = preg_replace( '/width="[^"]+"/' , $width , $custom_field );
	$custom_field = preg_replace( '/height="[^"]+"/' , $height , $custom_field );	
?>
<div class="video">
	<?php echo $custom_field; ?>
</div>
<?php 
endif;

}


// Show menu in header.php
// Exlude the pages from the slider
function woo_show_pagemenu( $exclude="" ) {
	// Split the featured pages from the options, and put in an array
	if ( get_option('woo_ex_featpages') ) {
		$menupages = get_option('woo_featpages');
		$exclude = $menupages . ',' . $exclude;
	}
	
	$pages = wp_list_pages('sort_column=menu_order&title_li=&echo=0&depth=1&exclude='.$exclude);
	$pages = preg_replace('%<a ([^>]+)>%U','<a $1><span>', $pages);
	$pages = str_replace('</a>','</span></a>', $pages);
	echo $pages;
}

// Get the style path currently selected
function woo_style_path() {
	$style = $_REQUEST[style];
	if ($style != '') {
		$style_path = $style;
	} else {
		$stylesheet = get_option('woo_alt_stylesheet');
		$style_path = str_replace(".css","",$stylesheet);
	}
	if ($style_path == "default")
	  echo 'images/';
	else
	  echo 'styles/'.$style_path;
}

/*
Plugin Name: WP-PageNavi 
Plugin URI: http://www.lesterchan.net/portfolio/programming.php 
*/ 

function wp_pagenavi($before = '', $after = '', $prelabel = '', $nxtlabel = '', $pages_to_show = 5, $always_show = false) {
	global $request, $posts_per_page, $wpdb, $paged;
	if(empty($prelabel)) {
		$prelabel  = '<strong>&laquo;</strong>';
	}
	if(empty($nxtlabel)) {
		$nxtlabel = '<strong>&raquo;</strong>';
	}
	$half_pages_to_show = round($pages_to_show/2);
	if (!is_single()) {
		if(!is_category()) {
			preg_match('#FROM\s(.*)\sORDER BY#siU', $request, $matches);		
		} else {
			preg_match('#FROM\s(.*)\sGROUP BY#siU', $request, $matches);		
		}
		$fromwhere = $matches[1];
		$numposts = $wpdb->get_var("SELECT COUNT(DISTINCT ID) FROM $fromwhere");
		$max_page = ceil($numposts /$posts_per_page);
		if(empty($paged)) {
			$paged = 1;
		}
		if($max_page > 1 || $always_show) {
			echo "$before <div class='Nav'>";
			if ($paged >= ($pages_to_show-1)) {
				echo '<a href="'.get_pagenum_link().'">&laquo; First</a>';
			}
			previous_posts_link($prelabel);
			for($i = $paged - $half_pages_to_show; $i  <= $paged + $half_pages_to_show; $i++) {
				if ($i >= 1 && $i <= $max_page) {
					if($i == $paged) {
						echo "<strong class='on'>$i</strong>";
					} else {
						echo ' <a href="'.get_pagenum_link($i).'">'.$i.'</a> ';
					}
				}
			}
			next_posts_link($nxtlabel, $max_page);
			if (($paged+$half_pages_to_show) < ($max_page)) {
				echo '<a href="'.get_pagenum_link($max_page).'">Last &raquo;</a>';
			}
			echo "</div> $after";
		}
	}
}


?>