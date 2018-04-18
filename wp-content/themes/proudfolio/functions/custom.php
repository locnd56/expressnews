<?php 

// Custom fields for WP write panel
// This code is protected under Creative Commons License: http://creativecommons.org/licenses/by-nc-nd/3.0/

$woo_metaboxes = array(
		"image" => array (
			"name"		=> "image",
			"default" 	=> "",
			"label" 	=> "Image",
			"type" 		=> "text",
			"desc"      => "Enter the URL for the General Preview Image (600x200px). "
		),
		"thumb" => array (
			"name"		=> "thumb",
			"default" 	=> "",
			"label" 	=> "Thumbnail",
			"type" 		=> "text",
			"desc"      => "Enter the URL for the Thumbnail (120x120px)."
		),
		"preview" => array (
			"name"		=> "preview",
			"default" 	=> "",
			"label" 	=> "Preview",
			"type" 		=> "text",
			"desc"      => "Enter the URL for the Larger preview image (Lightbox)."
		),
		"url" => array (
			"name"		=> "url",
			"default" 	=> "",
			"label" 	=> "Url",
			"type" 		=> "text",
			"desc"      => "Enter the URL for the Visit website link."
		),
	);
	
function woothemes_meta_box_content() {
	global $post, $woo_metaboxes;
	echo '<table>'."\n";
	foreach ($woo_metaboxes as $woo_metabox) {
		$woo_metaboxvalue = get_post_meta($post->ID,$woo_metabox["name"],true);
		if ($woo_metaboxvalue == "" || !isset($woo_metaboxvalue)) {
			$woo_metaboxvalue = $woo_metabox['default'];
		}
		echo "\t".'<tr>';
		echo "\t\t".'<th style="text-align: right;"><label for="'.$woo_metabox.'">'.$woo_metabox['label'].':</label></th>'."\n";
		echo "\t\t".'<td><input size="70" type="'.$woo_metabox['type'].'" value="'.$woo_metaboxvalue.'" name="woothemes_'.$woo_metabox["name"].'" id="'.$woo_metabox.'"/></td>'."\n";
		echo "\t".'</tr>'."\n";
		echo "\t\t".'<tr><td></td><td><span style="font-size:11px">'.$woo_metabox['desc'].'</span></td></tr>'."\n";				
	}
	echo '</table>'."\n\n";
}

function woothemes_metabox_insert($pID) {
	global $woo_metaboxes;
	foreach ($woo_metaboxes as $woo_metabox) {
		$var = "woothemes_".$woo_metabox["name"];
		if (isset($_POST[$var])) {
			add_post_meta($pID,$woo_metabox["name"],$_POST[$var],true) or update_post_meta($pID,$woo_metabox["name"],$_POST[$var]);
		}
	}
}

function woothemes_meta_box() {
	if ( function_exists('add_meta_box') ) {
		add_meta_box('woothemes-settings',$GLOBALS['themename'].' Custom Settings','woothemes_meta_box_content','post','normal');
		add_meta_box('woothemes-settings',$GLOBALS['themename'].' Custom Settings','woothemes_meta_box_content','page','normal');
	}
}

add_action('admin_menu', 'woothemes_meta_box');
add_action('wp_insert_post', 'woothemes_metabox_insert');
?>