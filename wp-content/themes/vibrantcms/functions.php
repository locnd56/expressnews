<?php function woothemes_admin_head() { ?>
<style>

h2 { margin-bottom: 20px; }
.title { margin: 0px !important; background: #D4E9FA; padding: 10px; font-family: Georgia, serif; font-weight: normal !important; letter-spacing: 1px; font-size: 18px; }
.container { background: #EAF3FA; padding: 10px; }
.maintable { font-family:"Lucida Grande","Lucida Sans Unicode",Arial,Verdana,sans-serif; background: #EAF3FA; margin-bottom: 20px; padding: 10px 0px; }
.mainrow { padding-bottom: 10px !important; border-bottom: 1px solid #D4E9FA !important; float: left; margin: 0px 10px 10px 10px !important; }
.titledesc { font-size: 14px; font-weight:bold; width: 220px !important; margin-right: 20px !important; }
.forminp { width: 700px !important; valign: middle !important; }
.forminp input, .forminp select, .forminp textarea { margin-bottom: 9px !important; background: #fff; border: 1px solid #D4E9FA; width: 500px; padding: 4px; font-family:"Lucida Grande","Lucida Sans Unicode",Arial,Verdana,sans-serif; font-size: 12px; }
.forminp .checkbox { width:20px }
.forminp span { font-size: 10px !important; font-weight: normal !important; ine-height: 14px !important; }
.forminp .checkbox { width: 20px !important; }
.info { background: #FFFFCC; border: 1px dotted #D8D2A9; padding: 10px; color: #333; }
.info a { color: #333; text-decoration: none; border-bottom: 1px dotted #333 }
.info a:hover { color: #666; border-bottom: 1px dotted #666; }
.warning { background: #FFEBE8; border: 1px dotted #CC0000; padding: 10px; color: #333; font-weight: bold; }

</style>
<?php }

// VARIABLES

$themename = "VibrantCMS";
$shortname = "woo";
$manualurl = 'http://www.woothemes.com/support/theme-documentation/vibrantcms/';
$options = array();

add_option("woothemes_settings",$options);

$template_path = get_bloginfo('template_directory');

$layout_path = TEMPLATEPATH . '/layouts/'; 
$layouts = array();

$alt_stylesheet_path = TEMPLATEPATH . '/styles/';
$alt_stylesheets = array();

$functions_path = TEMPLATEPATH . '/functions/';

$ads_path = TEMPLATEPATH . '/images/ads/';
$ads = array();

$pn_categories_obj = get_categories('hide_empty=0');
$pn_categories = array();

$woo_pages_obj = get_pages('sort_column=post_parent,menu_order');
$woo_pages = array();

if ( is_dir($layout_path) ) {
	if ($layout_dir = opendir($layout_path) ) { 
		while ( ($layout_file = readdir($layout_dir)) !== false ) {
			if(stristr($layout_file, ".php") !== false) {
				$layouts[] = $layout_file;
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

foreach ($woo_pages_obj as $woo_page) {
	$woo_pages[$woo_page->ID] = $woo_page->post_title;
}

$other_entries = array("Select a Number:","1","2","3","4","5","6","7","8","9","10");
$steps = array("Select Format:","1., 2., 3.","01., 02., 03.","1 >, 2 >, 3 >","01 >, 02 >, 03 >","Step 01 >,Step 02 >,Step 03 >",);

$categories_tmp = array_unshift($pn_categories, "Select a category:");
$woo_pages_tmp = array_unshift($woo_pages, "Select a page:");

// THIS IS THE DIFFERENT FIELDS

$options = array (

				array(	"name" => "General Settings",
						"type" => "heading"),

				array(	"name" => "Theme Stylesheet",
						"desc" => "Please select your colour scheme here.",
					    "id" => $shortname."_alt_stylesheet",
					    "std" => "default.css",
					    "type" => "select",
					    "options" => $alt_stylesheets),

				array(	"name" => "Use Gravatars?",
						"desc" => "Check this box if you wish to use <a href='http://www.gravatar.com'>Gravatars</a> for Author & Commenter profiles.",
						"id" => $shortname."_gravatar",
						"std" => "false",
						"type" => "checkbox"),
						
				array(	"name" => "Custom Logo",
						"desc" => "Paste the full URL of your custom logo image, should you wish to replace the title.",
						"id" => $shortname."_logo",
						"std" => "",
						"type" => "text"),												    					

				array(	"name" => "Google Analytics",
						"desc" => "Please paste your Google Analytics (or other) tracking code here.",
			    		"id" => $shortname."_google_analytics",
			    		"std" => "",
			    		"type" => "textarea"),		

				array(	"name" => "Feedburner RSS URL",
						"desc" => "Enter your Feedburner URL here.",
			    		"id" => $shortname."_feedburner_url",
			    		"std" => "",
			    		"type" => "text"),												    									

				array(	"name" => "Front Page Layout",
						"type" => "heading"),			

				array(	"name" => "Featured Pages",
						"desc" => "Enter a comma-separated list of the page ID's that you'd like to display in the featured slider.",
						"id" => $shortname."_featpages",
						"std" => "",
						"type" => "text"),

				array(	"name" => "Featured Steps Format",
						"desc" => "Select the format you'd like to use for the featured steps.",
					    "id" => $shortname."_steps",
					    "std" => "Select Format:",
					    "type" => "select",
					    "options" => $steps),															
						
				array(	"name" => "Front Page Layout",
						"desc" => "Choose the layout of to be used for the other entries on your homepage.",
			    		"id" => $shortname."_layout",
			    		"std" => "1-default.php",
			    		"type" => "select",
			    		"options" => $layouts),			    		

				array(	"name" => "More Information (Default Homepage Layout)",
						"type" => "heading"),
						
				array(	"name" => "More Info Box #1 - Page ID",
						"desc" => "Enter the ID of the page that you'd like to display in this info box.",
						"id" => $shortname."_more1_ID",
						"std" => "",
						"type" => "text"),

				array(	"name" => "More Info Box #1 - Link Text",
						"desc" => "Enter the text for the action link.",
						"id" => $shortname."_more1_link",
						"std" => "Click here for more info",
						"type" => "text"),

				array(	"name" => "More Info Box #1 - Link URL",
						"desc" => "Enter the destination URL for the action link.",
						"id" => $shortname."_more1_url",
						"std" => "",
						"type" => "text"),												

				array(	"name" => "More Info Box #2 - Page ID",
						"desc" => "Enter the ID of the page that you'd like to display in this info box.",
						"id" => $shortname."_more2_ID",
						"std" => "",
						"type" => "text"),

				array(	"name" => "More Info Box #2 - Link Text",
						"desc" => "Enter the text for the action link.",
						"id" => $shortname."_more2_link",
						"std" => "Click here for more info",
						"type" => "text"),

				array(	"name" => "More Info Box #2 - Link URL",
						"desc" => "Enter the destination URL for the action link.",
						"id" => $shortname."_more2_url",
						"std" => "",
						"type" => "text"),

				array(	"name" => "Extended Footer",
						"type" => "heading"),
						
				array(	"name" => "About Section",
						"desc" => "Enter the ID of the page in this section.",
						"id" => $shortname."_about",
						"std" => "",
						"type" => "text"),

				array(	"name" => "Contact Section",
						"desc" => "Enter the ID of the page in this section.",
						"id" => $shortname."_contact",
						"std" => "",
						"type" => "text"),						

				array(	"name" => "Blog Settings",
						"type" => "heading"),																												

				array(	"name" => "Add Blog Link to Main Navigation?",
						"desc" => "If checked, this option will add a blog link to your main navigation next to the Home link.",
						"id" => $shortname."_blog",
						"std" => "false",
						"type" => "checkbox"),																									

				array( 	"name" => "Blog Permalink",
					   	"desc" => "Please enter the permalink to your blog parent category (i.e. <home url ignored>/category/blog/).",
						"id" => $shortname."_blogcat",
						"std" => "",
						"type" => "text"),

				array(	"name" => "Show sidebar tabber on blog pages?",
						"desc" => "Check this box if you wish to show the sidebar tabber on the blog pages.",
						"id" => $shortname."_tabber",
						"std" => "false",
						"type" => "checkbox"),															

				array(	"name" => "Banner Ad Management (336x280 MPU)",
						"type" => "heading"),

				array(	"name" => "Display 336x280 MPU",
						"desc" => "Check this box if you wish to display the 336x280 MPU in the sidebar.",
						"id" => $shortname."_show_mpu",
						"std" => "false",
						"type" => "checkbox"),

				array(	"name" => "336x280 Block Ad - Image Location",
						"desc" => "Enter the URL for this block ad.",
						"id" => $shortname."_block_image",
						"std" => $template_path . "/images/ad336.jpg",
						"type" => "text"),
						
				array(	"name" => "336x280 Block Ad - Destination",
						"desc" => "Enter the URL where this block ad points to.",
			    		"id" => $shortname."_block_url",
						"std" => "http://www.woothemes.com",
			    		"type" => "text"),
						
				array(	"name" => "Banner Ad Management (468x60 Banner)",
						"type" => "heading"),

				array(	"name" => "Display 468x60 Banner",
						"desc" => "Check this box if you wish to enable the 468x60 ad below first post in blog.",
						"id" => $shortname."_show_ad",
						"std" => "false",
						"type" => "checkbox"),

				array(	"name" => "468x60 Ad - Image Location",
						"desc" => "Enter the URL for this block ad.",
						"id" => $shortname."_ad_below_image",
						"std" => $template_path . "/images/ad468.jpg",
						"type" => "text"),
						
				array(	"name" => "468x60 Ad - Destination",
						"desc" => "Enter the URL where this block ad points to.",
			    		"id" => $shortname."_ad_below_url",
						"std" => "http://www.woothemes.com",
			    		"type" => "text"),
																														
		  );
		  
// ADMIN PANEL

function woothemes_add_admin() {

	 global $themename, $options;
	
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
						
				header("Location: admin.php?page=functions.php&saved=true");								
			
			die;

		} else if ( 'reset' == $_REQUEST['action'] ) {
			delete_option('sandbox_logo');
			
			header("Location: admin.php?page=functions.php&reset=true");
			die;
		}

	}

add_menu_page($themename." Options", $themename." Options", 'edit_themes', basename(__FILE__), 'woothemes_page');

}

function woothemes_page (){

		global $options, $themename, $manualurl;
		
		?>

<div class="wrap">

    			<form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">

						<h2><?php echo $themename; ?> Options</h2>

						<?php if ( $_REQUEST['saved'] ) { ?><div style="clear:both;height:20px;"></div><div class="warning"><?php echo $themename; ?>'s Options has been updated!</div><?php } ?>
						<?php if ( $_REQUEST['reset'] ) { ?><div style="clear:both;height:20px;"></div><div class="warning"><?php echo $themename; ?>'s Options has been reset!</div><?php } ?>						
						
						<div style="clear:both;height:20px;"></div>
						
						<div class="info">
						
							<div style="width: 70%; float: left; display: inline;padding-top:4px;"><strong>Stuck on these options?</strong> <a href="<?php echo $manualurl; ?>" target="_blank">Read The Documentation Here</a> or <a href="http://forum.woothemes.com" target="blank">Visit Our Support Forum</a></div>
							<div style="width: 30%; float: right; display: inline;text-align: right;"><input name="save" type="submit" value="Save changes" /></div>
							<div style="clear:both;"></div>
						
						</div>	    			
						
						<!--START: GENERAL SETTINGS-->
     						
     						<table class="maintable">
     							
							<?php foreach ($options as $value) { ?>
	
									<?php if ( $value['type'] <> "heading" ) { ?>
	
										<tr class="mainrow">
										<td class="titledesc"><?php echo $value['name']; ?></td>
										<td class="forminp">
		
									<?php } ?>		 
	
									<?php
										
										switch ( $value['type'] ) {
										case 'text':
		
									?>
									
		        							<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo get_settings( $value['id'] ); } else { echo $value['std']; } ?>" />
		
									<?php
										
										break;
										case 'select':
		
									?>
		
	            						<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
	                					<?php foreach ($value['options'] as $option) { ?>
	                						<option<?php if ( get_settings( $value['id'] ) == $option) { echo ' selected="selected"'; } elseif ($option == $value['std']) { echo ' selected="selected"'; } ?>><?php echo $option; ?></option>
	                					<?php } ?>
	            						</select>
		
									<?php
		
										break;
										case 'textarea':
										$ta_options = $value['options'];
		
									?>
									
										<textarea name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" cols="<?php echo $ta_options['cols']; ?>" rows="8"><?php  if( get_settings($value['id']) != "") { echo stripslashes(get_settings($value['id'])); } else { echo $value['std']; } ?></textarea>
		
									<?php
										
										break;
										case "radio":
		
 										foreach ($value['options'] as $key=>$option) { 
				
													$radio_setting = get_settings($value['id']);
													
													if($radio_setting != '') {
		    											
		    											if ($key == get_settings($value['id']) ) { $checked = "checked=\"checked\""; } else { $checked = ""; }
													
													} else {
													
														if($key == $value['std']) { $checked = "checked=\"checked\""; } else { $checked = ""; }
									} ?>
									
	            					<input type="radio" name="<?php echo $value['id']; ?>" value="<?php echo $key; ?>" <?php echo $checked; ?> /><?php echo $option; ?><br />
		
									<?php }
		 
										break;
										case "checkbox":
										
										if(get_settings($value['id'])) { $checked = "checked=\"checked\""; } else { $checked = ""; }
									
									?>
		            				
		            				<input type="checkbox" class="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />
		
									<?php
		
										break;
										case "multicheck":
		
 										foreach ($value['options'] as $key=>$option) {
 										
	 											$pn_key = $value['id'] . '_' . $key;
												$checkbox_setting = get_settings($pn_key);
				
 												if($checkbox_setting != '') {
		    		
		    											if (get_settings($pn_key) ) { $checked = "checked=\"checked\""; } else { $checked = ""; }
				
												} else { if($key == $value['std']) { $checked = "checked=\"checked\""; } else { $checked = ""; }
				
									} ?>
									
	            					<input type="checkbox" name="<?php echo $pn_key; ?>" id="<?php echo $pn_key; ?>" value="true" <?php echo $checked; ?> /><label for="<?php echo $pn_key; ?>"><?php echo $option; ?></label><br />
									
									<?php }
		 
										break;
										case "heading":

									?>
									
										</table> 
		    							
		    									<h3 class="title"><?php echo $value['name']; ?></h3>
										
										<table class="maintable">
		
									<?php
										
										break;
										default:
										break;
									
									} ?>
	
									<?php if ( $value['type'] <> "heading" ) { ?>
	
										<?php if ( $value['type'] <> "checkbox" ) { ?><br/><?php } ?><span><?php echo $value['desc']; ?></span>
										</td></tr>
	
									<?php } ?>		
	
							<?php } ?>	
							
							</table>	

							<p class="submit">
								<input name="save" type="submit" value="Save changes" />    
								<input type="hidden" name="action" value="save" />
							</p>							
							
							<div style="clear:both;"></div>		
						
						<!--END: GENERAL SETTINGS-->						
             
            </form>

</div><!--wrap-->

<div style="clear:both;height:20px;"></div>
 
 <?php

};

function woothemes_wp_head() { 
     $style = $_REQUEST[style];
     if ($style != '') {
          ?> <link href="<?php bloginfo('template_directory'); ?>/styles/<?php echo $style; ?>.css" rel="stylesheet" type="text/css" /><?php 
     } else { 
          $stylesheet = get_option('woo_alt_stylesheet');
          if($stylesheet != ''){
               ?><link href="<?php bloginfo('template_directory'); ?>/styles/<?php echo $stylesheet; ?>" rel="stylesheet" type="text/css" /><?php         
          }
     }     
}

add_action('wp_head', 'woothemes_wp_head');
add_action('admin_menu', 'woothemes_add_admin');
add_action('admin_head', 'woothemes_admin_head');	

// OTHER FUNCTIONS

if ( function_exists('register_sidebar') )
    register_sidebars(3,array(
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div><!--/widget-->',
        'before_title' => '<h3 class="hl">',
        'after_title' => '</h3>',
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
} 

// Custom fields 
require_once ($functions_path . '/custom.php');

// Easytube
require_once ($functions_path . '/easytube.php');

?>