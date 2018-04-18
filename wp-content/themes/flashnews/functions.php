<?php
$themename = "Premium News";
$shortname = "premiumnews";

$seoplugin = TEMPLATEPATH.'/seo/premium_news_seo.php';
if ( file_exists( $seoplugin ) ) {
	include( $seoplugin );
}

$template_path = get_bloginfo('template_directory');

$layout_path = TEMPLATEPATH . '/layouts/'; 
$layouts = array();

$bgr_path = TEMPLATEPATH . '/styles/bgr/'; 
$bgr = array();

$alt_stylesheet_path = TEMPLATEPATH . '/styles/';
$alt_stylesheets = array();

$modules_path = TEMPLATEPATH . '/modules/';
$modules = array();

$ads_path = TEMPLATEPATH . '/images/ads/';
$ads = array();

$pn_categories_obj = get_categories('hide_empty=0');
$pn_categories = array();

if ( is_dir($layout_path) ) {
	if ($layout_dir = opendir($layout_path) ) { 
		while ( ($layout_file = readdir($layout_dir)) !== false ) {
			if(stristr($layout_file, ".php") !== false) {
				$layouts[] = $layout_file;
			}
		}	
	}
}	

if ( is_dir($bgr_path) ) {
	if ($bgr_dir = opendir($bgr_path) ) { 
		while ( ($bgr_file = readdir($bgr_dir)) !== false ) {
			if(stristr($bgr_file, ".css") !== false) {
				$bgr[] = $bgr_file;
			}
		}	
	}
}	

if ( is_dir($alt_stylesheet_path) ) {
	if ($alt_stylesheet_dir = opendir($alt_stylesheet_path) ) { 
		while ( ($alt_stylesheet_file = readdir($alt_stylesheet_dir)) !== false ) {
			if(stristr($alt_stylesheet_file, ".css") !== false) {
				$alt_stylesheets[] = $alt_stylesheet_file;
			}
		}	
	}
}	

if ( is_dir($modules_path) ) {
	if ($modules_dir = opendir($modules_path) ) { 
		while ( ($module_file = readdir($modules_dir)) !== false ) {
			if(stristr($module_file, ".php") !== false) {
				$file_tmp = substr($module_file, 0, -4);
				$modules[$file_tmp] = $module_file;
			}
		}	
	}
}

if ( is_dir($ads_path) ) {
	if ($ads_dir = opendir($ads_path) ) { 
		while ( ($ads_file = readdir($ads_dir)) !== false ) {
			if((stristr($ads_file, ".jpg") !== false) || (stristr($ads_file, ".png") !== false) || (stristr($ads_file, ".gif") !== false)) {
				$ads[] = $ads_file;
			}
		}	
	}
}

foreach ($pn_categories_obj as $pn_cat) {
	$pn_categories[$pn_cat->cat_ID] = $pn_cat->cat_name;
}

$other_entries = array("Select a Number:","1","2","3","4","5","6","7","8","9","10");
$wpv = array("Select Version:","WP 2.3 or newer","WP 2.2 or older");

$bgr_tmp = asort($bgr);
$bgr_tmp = array_unshift($bgr, "Select a background:");

$alt_stylesheets_tmp = asort($alt_stylesheets);
$alt_stylesheets_tmp = array_unshift($alt_stylesheets, "Select a stylesheet:");

$categories_tmp = array_unshift($pn_categories, "Select a category:");

$options = array (
				array(	"name" => "General Settings",
						"type" => "heading"),
						
				array(	"name" => "Wordpress Version",
						"desc" => "Please select the version of WordPress you are using.",
					    "id" => $shortname."_wpv",
					    "std" => "Select version:",
					    "type" => "select",
					    "options" => $wpv),

				array(	"name" => "Background Colour",
						"desc" => "Choose your desired background colour.",
			    		"id" => $shortname."_bgr",
			    		"std" => "Select a background:",
			    		"type" => "select",
			    		"options" => $bgr),

				array(	"name" => "Theme Stylesheet",
						"desc" => "Please select your colour scheme here.",
					    "id" => $shortname."_alt_stylesheet",
					    "std" => "Select a stylesheet:",
					    "type" => "select",
					    "options" => $alt_stylesheets),

				array(	"name" => "Use Gravatars?",
						"desc" => "Check this box if you wish to use <a href='http://www.gravatar.com'>Gravatars</a> for Author & Commenter profiles.",
						"id" => $shortname."_gravatar",
						"std" => "false",
						"type" => "checkbox"),						    

				array(	"name" => "Feedburner ID",
						"desc" => "Enter your Feedburner ID here. To find your Feedburner ID, please see <a href='http://www.premiumnewstheme.com/tutorials/#4'>This Tutorial</a>.",
			    		"id" => $shortname."_feedburner_id",
			    		"std" => "Feedburner ID",
			    		"type" => "text"),					

				array(	"name" => "Archives Page",
						"desc" => "Please enter the page slug (Manage > Pages) for the WordPress page that displayes your Archives i.e. 'archives'. To set your Archives page, please see <a href='http://www.premiumnewstheme.com/tutorials/#5'>This Tutorial</a>",
						"id" => $shortname."_archives_page",
						"std" => "Enter the page slug",
						"type" => "text"),												

				array(	"name" => "Front Page Layout",
						"type" => "heading"),

				array(	"name" => "Display Featured Panel?",
						"desc" => "Check this box if you wish to display the featured article section on your homepage.",
						"id" => $shortname."_show_featured",
						"std" => "false",
						"type" => "checkbox"),						

				array( 	"name" => "Featured Category",
					   	"desc" => "Select the category that you would like to have displayed in the featured section on your homepage.",
						"id" => $shortname."_featured_category",
						"std" => "Select a category:",
						"type" => "select",
						"options" => $pn_categories),

				array(	"name" => "Featured Entries",
						"desc" => "Select the number of entries that should appear as featured entries on the homepage.",
			    		"id" => $shortname."_featured_entries",
			    		"std" => "Select a Number:",
			    		"type" => "select",
			    		"options" => $other_entries),						

				array(	"name" => "Display Video?",
						"desc" => "Check this box if you wish to display the video panel on your homepage.",
						"id" => $shortname."_show_video",
						"std" => "false",
						"type" => "checkbox"),
						
				array( 	"name" => "Video Category",
					   	"desc" => "Select the category that you would like to have displayed in the video panel on your homepage.",
						"id" => $shortname."_video_category",
						"std" => "Select a category:",
						"type" => "select",
						"options" => $pn_categories),

				array(	"name" => "Front Page Layout",
						"desc" => "Choose the layout of to be used for the other entries on your homepage.",
			    		"id" => $shortname."_layout",
			    		"std" => "Select a layout:",
			    		"type" => "select",
			    		"options" => $layouts),

				array(	"name" => "Homepage Entries (Full)",
						"desc" => "Select the number of entries that should appear below the Featured Entries or Video Panel.",
			    		"id" => $shortname."_other_entries",
			    		"std" => "Select a Number:",
			    		"type" => "select",
			    		"options" => $other_entries),

				array(	"name" => "Homepage Entries (Headline Only)",
						"desc" => "Select the number of entries that should appear below the Featured Entries or Video Panel.",
			    		"id" => $shortname."_other_headlines",
			    		"std" => "Select a Number:",
			    		"type" => "select",
			    		"options" => $other_entries),

				array(	"name" => "Asides / Sideblog Management",
						"type" => "heading"),

				array(	"name" => "Display / Use Asides?",
						"desc" => "Check this box if you wish to display and use one of your categories as the asides that will be published in the sidebar.",
						"id" => $shortname."_show_asides",
						"std" => "false",
						"type" => "checkbox"),

				array( 	"name" => "Asides Category",
					   	"desc" => "Select the category that you would like to have displayed as asides (and thus excluded from other homepage areas).",
						"id" => $shortname."_asides_category",
						"std" => "Select a category:",
						"type" => "select",
						"options" => $pn_categories),

				array(	"name" => "Number of Asides",
						"desc" => "Select the number of asides to display.",
			    		"id" => $shortname."_asides_entries",
			    		"std" => "Select a Number:",
			    		"type" => "select",
			    		"options" => $other_entries),												

				array(	"name" => "Banner Ad Management",
						"type" => "heading"),

				array(	"name" => "Advertising Page",
						"desc" => "Please enter the page slug (Manage > Pages) for the WordPress page that contains your advertising information &amp; rates i.e. 'advertising'.",
						"id" => $shortname."_ad_page",
						"std" => "Enter the page slug",
						"type" => "text"),

				array(	"name" => "Display Secondary Ads in Sidebar",
						"desc" => "Check this box if you would like to display all 4 banner ads in the sidebar. If unchecked, only 2 ads will be displayed.",
						"id" => $shortname."_show_ads",
						"std" => "false",
						"type" => "checkbox"),

				array(	"name" => "Banner Ad #1 - Image Location",
						"desc" => "Enter the URL for this banner ad.",
						"id" => $shortname."_ad_image_1",
						"std" => $template_path . "/images/ad-125x125.jpg",
						"type" => "text"),
						
				array(	"name" => "Banner Ad #1 - Destination",
						"desc" => "Enter the URL where this banner ad points to.",
			    		"id" => $shortname."_ad_url_1",
						"std" => "http://example.com/ads/ad1_destination.html",
			    		"type" => "text"),						

				array(	"name" => "Banner Ad #2 - Image Location",
						"desc" => "Enter the URL for this banner ad.",
						"id" => $shortname."_ad_image_2",
						"std" => $template_path . "/images/ad-125x125.jpg",
						"type" => "text"),
						
				array(	"name" => "Banner Ad #2 - Destination",
						"desc" => "Enter the URL where this banner ad points to.",
			    		"id" => $shortname."_ad_url_2",
						"std" => "http://example.com/ads/ad1_destination.html",
			    		"type" => "text"),

				array(	"name" => "Banner Ad #3 - Image Location",
						"desc" => "Enter the URL for this banner ad.",
						"id" => $shortname."_ad_image_3",
						"std" => $template_path . "/images/ad-125x125.jpg",
						"type" => "text"),
						
				array(	"name" => "Banner Ad #3 - Destination",
						"desc" => "Enter the URL where this banner ad points to.",
			    		"id" => $shortname."_ad_url_3",
						"std" => "http://example.com/ads/ad1_destination.html",
			    		"type" => "text"),

				array(	"name" => "Banner Ad #4 - Image Location",
						"desc" => "Enter the URL for this banner ad.",
						"id" => $shortname."_ad_image_4",
						"std" => $template_path . "/images/ad-125x125.jpg",
						"type" => "text"),
						
				array(	"name" => "Banner Ad #4 - Destination",
						"desc" => "Enter the URL where this banner ad points to.",
			    		"id" => $shortname."_ad_url_4",
						"std" => "http://example.com/ads/ad1_destination.html",
			    		"type" => "text")
																														
		  );

if ( $seo_plugin_loaded ) {
	$options = add_seo_options($options);
}
		
function mytheme_add_admin() {

    global $themename, $shortname, $options;

    if ( $_GET['page'] == basename(__FILE__) ) {
    
        if ( 'save' == $_REQUEST['action'] ) {

                foreach ($options as $value) {
					if($value['type'] != 'multicheck'){
                    	update_option( $value['id'], $_REQUEST[ $value['id'] ] ); 
					}else{
						foreach($value['options'] as $mc_key => $mc_value){
							$up_opt = $value['id'].'_'.$mc_key;
							update_option($up_opt, $_REQUEST[$up_opt] );
						}
					}
				}

                foreach ($options as $value) {
					if($value['type'] != 'multicheck'){
                    	if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } 
					}else{
						foreach($value['options'] as $mc_key => $mc_value){
							$up_opt = $value['id'].'_'.$mc_key;						
							if( isset( $_REQUEST[ $up_opt ] ) ) { update_option( $up_opt, $_REQUEST[ $up_opt ]  ); } else { delete_option( $up_opt ); } 
						}
					}
				}
                header("Location: themes.php?page=functions.php&saved=true");
                die;

        } else if( 'reset' == $_REQUEST['action'] ) {

            foreach ($options as $value) {
				if($value['type'] != 'multicheck'){
                	delete_option( $value['id'] ); 
				}else{
					foreach($value['options'] as $mc_key => $mc_value){
						$del_opt = $value['id'].'_'.$mc_key;
						delete_option($del_opt);
					}
				}
			}
            header("Location: themes.php?page=functions.php&reset=true");
            die;

        }
    }

    add_theme_page($themename." Options", "$themename Options", 'edit_themes', basename(__FILE__), 'mytheme_admin');

}

function mytheme_admin() {

    global $themename, $shortname, $options;

    if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
    if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
    
?>
<div class="wrap">
<h2><?php echo $themename; ?> settings</h2>

<form method="post">

<table class="optiontable">

<?php foreach ($options as $value) { 
	
	switch ( $value['type'] ) {
		case 'text':
		option_wrapper_header($value);
		?>
		        <input style="width:400px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" />
		<?php
		option_wrapper_footer($value);
		break;
		
		case 'select':
		option_wrapper_header($value);
		?>
	            <select style="width:240px;" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
	                <?php foreach ($value['options'] as $option) { ?>
	                <option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option>
	                <?php } ?>
	            </select>
		<?php
		option_wrapper_footer($value);
		break;
		
		case 'textarea':
		$ta_options = $value['options'];
		option_wrapper_header($value);
		?>
				<textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" cols="<?php echo $ta_options['cols']; ?>" rows="<?php echo $ta_options['rows']; ?>"><?php 
				if( get_settings($value['id']) != "") {
						echo get_settings($value['id']);
					}else{
						echo $value['std'];
				}?></textarea>
		<?php
		option_wrapper_footer($value);
		break;

		case "radio":
		option_wrapper_header($value);
		
 		foreach ($value['options'] as $key=>$option) { 
				$radio_setting = get_settings($value['id']);
				if($radio_setting != ''){
		    		if ($key == get_settings($value['id']) ) {
						$checked = "checked=\"checked\"";
						} else {
							$checked = "";
						}
				}else{
					if($key == $value['std']){
						$checked = "checked=\"checked\"";
					}else{
						$checked = "";
					}
				}?>
	            <input type="radio" name="<?php echo $value['id']; ?>" value="<?php echo $key; ?>" <?php echo $checked; ?> /><?php echo $option; ?><br />
		<?php 
		}
		 
		option_wrapper_footer($value);
		break;
		
		case "checkbox":
		option_wrapper_header($value);
						if(get_settings($value['id'])){
							$checked = "checked=\"checked\"";
						}else{
							$checked = "";
						}
					?>
		            <input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
		<?php
		option_wrapper_footer($value);
		break;

		case "multicheck":
		option_wrapper_header($value);
		
 		foreach ($value['options'] as $key=>$option) {
	 			$pn_key = $value['id'] . '_' . $key;
				$checkbox_setting = get_settings($pn_key);
				if($checkbox_setting != ''){
		    		if (get_settings($pn_key) ) {
						$checked = "checked=\"checked\"";
						} else {
							$checked = "";
						}
				}else{
					if($key == $value['std']){
						$checked = "checked=\"checked\"";
					}else{
						$checked = "";
					}
				}?>
	            <input type="checkbox" name="<?php echo $pn_key; ?>" id="<?php echo $pn_key; ?>" value="true" <?php echo $checked; ?> /><label for="<?php echo $pn_key; ?>"><?php echo $option; ?></label><br />
		<?php 
		}
		 
		option_wrapper_footer($value);
		break;
		
		case "heading":
		?>
		<tr valign="top"> 
		    <td colspan="2" style="text-align: center;"><h3><?php echo $value['name']; ?></h3></td>
		</tr>
		<?php
		break;
		
		default:

		break;
	}
}
?>

</table>

<p class="submit">
<input name="save" type="submit" value="Save changes" />    
<input type="hidden" name="action" value="save" />
</p>
</form>
<form method="post">
<p class="submit">
<input name="reset" type="submit" value="Reset" />
<input type="hidden" name="action" value="reset" />
</p>
</form>

<?php
}

function option_wrapper_header($values){
	?>
	<tr valign="top"> 
	    <th scope="row"><?php echo $values['name']; ?>:</th>
	    <td>
	<?php
}

function option_wrapper_footer($values){
	?>
	    </td>
	</tr>
	<tr valign="top">
		<td>&nbsp;</td><td><small><?php echo $values['desc']; ?></small></td>
	</tr>
	<?php 
}

function mytheme_wp_head() { 
	$stylesheet = get_option('premiumnews_alt_stylesheet');
	if($stylesheet != ''){?>
		<link href="<?php bloginfo('template_directory'); ?>/styles/<?php echo $stylesheet; ?>" rel="stylesheet" type="text/css" />
<?php }
} 

if ( $seo_plugin_loaded ) {
add_seo_actions_filters();
}

add_action('wp_head', 'mytheme_wp_head');
add_action('admin_menu', 'mytheme_add_admin'); 

if ( function_exists('register_sidebar') )
    register_sidebars(2,array(
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div><!--/widget-->',
        'before_title' => '<h2 class="hl">',
        'after_title' => '</h2>',
    ));

$bm_trackbacks = array();
$bm_comments = array();

function split_comments( $source ) {

    if ( $source ) foreach ( $source as $comment ) {

        global $bm_trackbacks;
        global $bm_comments;

        if ( $comment->comment_type == 'trackback' || $comment->comment_type == 'pingback' ) {
            $bm_trackbacks[] = $comment;
        } else {
            $bm_comments[] = $comment;
        }
    }
} ?>