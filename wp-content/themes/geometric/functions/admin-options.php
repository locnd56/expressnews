<?php

// THIS IS THE DIFFERENT FIELDS
$options[] = array(	"name" => "General Settings",
					"type" => "heading");
						
$options[] = array(	"name" => "Theme Stylesheet",
					"desc" => "Please select your colour scheme here.",
					"id" => $shortname."_alt_stylesheet",
					"std" => "",
					"type" => "select",
					"options" => $alt_stylesheets);

$options[] = array(	"name" => "Sidebar on the left or right?",
					"desc" => "Check this box, if you'd like to display the sidebar on the right. If unchecked, the sidebar will default to the left.",
					"id" => $shortname."_right_sidebar",
					"std" => "true",
					"type" => "checkbox");						

$options[] = array(	"name" => "Custom Logo",
					"desc" => "Paste the full URL of your custom logo image, should you wish to replace our default logo e.g. 'http://www.yoursite.com/logo-trans.png'. <br />NOTE: You need to name the logo 'logoname-trans.png' to make it transparent in IE6 .",
					"id" => $shortname."_logo",
					"std" => "",
					"type" => "text");					 							    

$options[] = array(	"name" => "Favicon",
					"desc" => "Paste the full URL of your custom favicon image here (16x16px).",
					"id" => $shortname."_favicon",
					"std" => "http://www.woothemes.com/favicon.ico",
					"type" => "text");					 							    					

$options[] = array(	"name" => "Google Analytics",
					"desc" => "Please paste your Google Analytics (or other) tracking code here.",
					"id" => $shortname."_google_analytics",
					"std" => "",
					"type" => "textarea");		

$options[] = array(	"name" => "Feedburner RSS URL",
					"desc" => "Enter your Feedburner URL here.",
					"id" => $shortname."_feedburner_url",
					"std" => "",
					"type" => "text");		

$options[] = array(	"name" => "Navigation Settings",
					"type" => "heading");	

$options[] = array(	"name" => "Display Home Link + Pages in Top Navigation",
					"desc" => "Display Home Link + Pages in Top Navigation. Exclude any pages you don't want to display below.",
					"id" => $shortname."_nav_home_pages",
					"std" => "true",
					"type" => "checkbox");	

$options[] = array(	"name" => "Exclude Pages from Top Navigation",
					"desc" => "Enter a comma-separated list of the <a href='http://support.wordpress.com/pages/8/'>Page ID's</a> that you'd like to exclude from the top navigation. (e.g. 1,2,3,4)",
					"id" => $shortname."_page_ex",
					"std" => "",
					"type" => "text");	

$options[] = array(	"name" => "Display Home Link + Categories in Top Navigation",
					"desc" => "Display Home Link + Categories in Top Navigation. Exclude any categories you don't want to display below.",
					"id" => $shortname."_nav_home_cats",
					"std" => "true",
					"type" => "checkbox");	

$options[] = array(	"name" => "Exclude Categories from Top Navigation",
					"desc" => "Enter a comma-separated list of the <a href='http://support.wordpress.com/pages/8/'>Category ID's</a> that you'd like to exclude from the top navigation. (e.g. 1,2,3,4)",
					"id" => $shortname."_cat_ex",
					"std" => "",
					"type" => "text");						
					
$options[] = array(	"name" => "Display page navigation in footer.",
					"desc" => "Display page navigation in footer above the credit line.",
					"id" => $shortname."_nav_footer",
					"std" => "true",
					"type" => "checkbox");	

$options[] = array(	"name" => "Homepage / Blog Settings",
					"type" => "heading");

$options[] = array(	"name" => "Header Text",
					"desc" => "Enter the text that is displayed as the title before the first post. Defaults to 'Latest from my blog...' if you don't specify anything.",
					"id" => $shortname."_home_title",
					"std" => "Latest from my blog...",
					"type" => "text");							

$options[] = array(	"name" => "Posts per page",
					"desc" => "Select the number of posts you'd like to display per page.",
					"id" => $shortname."_home_posts",
					"std" => "Select a number:",
					"type" => "select",
					"options" => $other_entries);						

$options[] = array(	"name" => "Portfolio Settings",
					"type" => "heading");

$options[] = array(	"name" => "Portfolio Category",
					"desc" => "Select the category to use with your Portfolio Widget.",
					"id" => $shortname."_portfolio_category",
					"std" => "Select a category:",
					"type" => "select",
					"options" => $woo_categories);					

$options[] = array(	"name" => "Portfolio Layout",
					"desc" => "Choose between a 1, 2 & 3 column layout.",
			    	"id" => $shortname."_layout",
			    	"std" => "",
			    	"type" => "select",
			    	"options" => $layouts);	    					

$options[] = array(	"name" => "Portfolio Items",
					"desc" => "Select the number of portfolio items you'd like to display in the portfolio widget",
					"id" => $shortname."_portfolio_posts",
					"std" => "Select a number:",
					"type" => "select",
					"options" => $other_entries);

$options[] = array(	"name" => "Use Image Resizer?",
					"desc" => "If checked, the thumbnails for all portfolio items will be generated by the dynamic image resizer.",
					"id" => $shortname."_portfolio_resizer",
					"std" => "false",
					"type" => "checkbox");										

$options[] = array(	"name" => "About / Social Widget",
					"type" => "heading");									

$options[] = array(	"name" => "About You Text",
				"desc" => "Enter a little blurb about yourself. HTML allowed.",
				"id" => $shortname."_about",
				"std" => "",
				"type" => "textarea");						

$options[] = array(	"name" => "Gravatar",
				"desc" => "Enter the URL to your gravatar here..",
				"id" => $shortname."_gravatar",
				"std" => "",
				"type" => "text");										

$options[] = array(	"name" => "Twitter username",
				"desc" => "Enter your Twitter username to enable the Twitter Updates widget.",
				"id" => $shortname."_twitter_user",
				"std" => "",
				"type" => "text");				

$options[] = array(	"name" => "Flickr Username",
					"desc" => "Enter your Flickr Username here.",
			    	"id" => $shortname."_flickr",
			    	"std" => "",
			    	"type" => "text");					

$options[] = array(	"name" => "Delicious Username",
					"desc" => "Enter your Delicious Username here.",
			    	"id" => $shortname."_delicious",
			    	"std" => "",
			    	"type" => "text");					    			

$options[] = array(	"name" => "Digg Profile URL",
					"desc" => "Enter your Digg Profile URL here.",
			    	"id" => $shortname."_digg",
			    	"std" => "",
			    	"type" => "text");					 

$options[] = array(	"name" => "Facebook Profile URL",
					"desc" => "Enter your Facebook Profile URL here.",
		   		"id" => $shortname."_facebook",
			  		"std" => "",
			   	"type" => "text");					 		

$options[] = array(	"name" => "LinkedIn Profile URL",
					"desc" => "Enter your LinkedIn URL here.",
			  		"id" => $shortname."_linkedin",
			    	"std" => "",
			    	"type" => "text");		

$options[] = array(	"name" => "Last.fm Profile URL",
					"desc" => "Enter your Last.fm URL here.",
		    		"id" => $shortname."_lastfm",
		    		"std" => "",
		   		"type" => "text");			

$options[] = array(	"name" => "Youtube Profile URL",
					"desc" => "Enter your Youtube URL here.",
		    		"id" => $shortname."_youtube",
		    		"std" => "",
		   		"type" => "text");		

$options[] = array(	"name" => "StumbleUpon Profile URL",
					"desc" => "Enter your StumbleUpon URL here.",
		    		"id" => $shortname."_stumble",
		    		"std" => "",
		    		"type" => "text");					    														

$options[] = array(	"name" => "Layout Options",
					"type" => "heading");	

$options[] = array(	"name" => "Homepage Posts",
					"desc" => "If checked, this section will display the full post content. If unchecked it will display the excerpt only.",
					"id" => $shortname."_content_home",
					"std" => "false",
					"type" => "checkbox");											

$options[] = array(	"name" => "Archive Posts",
					"desc" => "If checked, this section will display the full post content. If unchecked it will display the excerpt only.",
					"id" => $shortname."_content_archive",
					"std" => "false",
					"type" => "checkbox");											

$options[] = array(	"name" => "Banner Ads Inner Content - Widget (125x125)",
					"type" => "heading");

$options[] = array(	"name" => "Rotate banners?",
					"desc" => "Check this to randomly rotate the banner ads.",
					"id" => $shortname."_ads_rotate",
					"std" => "true",
					"type" => "checkbox");	

$options[] = array(	"name" => "Add this widget into content after the 2nd post on all pages?",
					"desc" => "Check this to randomly rotate the banner ads.",
					"id" => $shortname."_ads_inner_content",
					"std" => "true",
					"type" => "checkbox");						

$options[] = array(	"name" => "Banner Ad #1 - Image Location",
					"desc" => "Enter the URL for this banner ad.",
					"id" => $shortname."_ad_image_1",
					"std" => "http://www.woothemes.com/ads/woothemes-125x125-1.gif",
					"type" => "text");
						
$options[] = array(	"name" => "Banner Ad #1 - Destination",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_url_1",
					"std" => "http://www.woothemes.com",
					"type" => "text");						

$options[] = array(	"name" => "Banner Ad #2 - Image Location",
					"desc" => "Enter the URL for this banner ad.",
					"id" => $shortname."_ad_image_2",
					"std" => "http://www.woothemes.com/ads/woothemes-125x125-2.gif",
					"type" => "text");
						
$options[] = array(	"name" => "Banner Ad #2 - Destination",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_url_2",
					"std" => "http://www.woothemes.com",
					"type" => "text");

$options[] = array(	"name" => "Banner Ad #3 - Image Location",
					"desc" => "Enter the URL for this banner ad.",
					"id" => $shortname."_ad_image_3",
					"std" => "http://www.woothemes.com/ads/woothemes-125x125-3.gif",
					"type" => "text");
						
$options[] = array(	"name" => "Banner Ad #3 - Destination",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_url_3",
					"std" => "http://www.woothemes.com",
					"type" => "text");

$options[] = array(	"name" => "Banner Ad #4 - Image Location",
					"desc" => "Enter the URL for this banner ad.",
					"id" => $shortname."_ad_image_4",
					"std" => "http://www.woothemes.com/ads/woothemes-125x125-4.gif",
					"type" => "text");
						
$options[] = array(	"name" => "Banner Ad #4 - Destination",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_url_4",
					"std" => "http://www.woothemes.com",
					"type" => "text");

$options[] = array(	"name" => "Banner Ad #5 - Image Location",
					"desc" => "Enter the URL for this banner ad.",
					"id" => $shortname."_ad_image_5",
					"std" => "http://www.woothemes.com/ads/woothemes-125x125-4.gif",
					"type" => "text");
						
$options[] = array(	"name" => "Banner Ad #5 - Destination",
					"desc" => "Enter the URL where this banner ad points to.",
					"id" => $shortname."_ad_url_5",
					"std" => "http://www.woothemes.com",
					"type" => "text");

?>