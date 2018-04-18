<?php
	global $style_path;
	
	$stylesheet = get_option('premiumnews_alt_stylesheet');
	
	if ( $stylesheet == 'classic_blue.css' ) { $style_path = 'classic_blue'; }
	elseif ( $stylesheet == 'classic_green.css' ) { $style_path = 'classic_green'; }
	elseif ( $stylesheet == 'classic_purple.css' ) { $style_path = 'classic_purple'; }
	elseif ( $stylesheet == 'classic_red.css' ) { $style_path = 'classic_red'; }
	elseif ( $stylesheet == 'style-classic.css' ) { $style_path = 'style-classic'; }
	elseif ( $stylesheet == 'style-blue.css' ) { $style_path = 'style-blue'; }
	elseif ( $stylesheet == 'style-purple.css' ) { $style_path = 'style-purple'; }	
	elseif ( $stylesheet == 'style-orange.css' ) { $style_path = 'style-orange'; }		
	elseif ( $stylesheet == 'web2_green_brightblue.css' ) { $style_path = 'web2_green_brightblue'; }
	elseif ( $stylesheet == 'web2_darkblue_grey.css' ) { $style_path = 'web2_darkblue_grey'; }
	elseif ( $stylesheet == 'web2_green_grey.css' ) { $style_path = 'web2_green_grey'; }
	elseif ( $stylesheet == 'web2_red_blue.css' ) { $style_path = 'web2_red_blue'; }
	else { $style_path = 'classic_blue'; }
?>

