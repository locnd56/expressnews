<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

    <title>
		<?php if ( is_home() ) { ?><? bloginfo('name'); ?>&nbsp;|&nbsp;<?php bloginfo('description'); ?><?php } ?>
		<?php if ( is_search() ) { ?><? bloginfo('name'); ?>&nbsp;|&nbsp;Search Results<?php } ?>
		<?php if ( is_author() ) { ?><? bloginfo('name'); ?>&nbsp;|&nbsp;Author Archives<?php } ?>
		<?php if ( is_single() ) { ?><?php wp_title(''); ?>&nbsp;|&nbsp;<? bloginfo('name'); ?><?php } ?>
		<?php if ( is_page() ) { ?><? bloginfo('name'); ?>&nbsp;|&nbsp;<?php wp_title(''); ?><?php } ?>
		<?php if ( is_category() ) { ?><? bloginfo('name'); ?>&nbsp;|&nbsp;Archive&nbsp;|&nbsp;<?php single_cat_title(); ?><?php } ?>
		<?php if ( is_month() ) { ?><? bloginfo('name'); ?>&nbsp;|&nbsp;Archive&nbsp;|&nbsp;<?php the_time('F'); ?><?php } ?>
		<?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><? bloginfo('name'); ?>&nbsp;|&nbsp;Tag Archive&nbsp;|&nbsp;<?php  single_tag_title("", true); } } ?>
    </title>

	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<link rel="stylesheet" type="text/css"  href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php include(TEMPLATEPATH . '/includes/stylesheet.php'); ?>	

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/jquery-1.1.3.1.min.js"></script>	
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/tabs.js"></script>		
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/sfhover.js"></script>	
	
	<?php wp_head(); ?>

</head>

<body>

<?php
	if ( is_home() ) { $GLOBALS['home'] = true; }
	$GLOBALS['disable'] = get_option('premiumnews_disable_ads');
	$template_path = get_bloginfo('template_directory');
	$GLOBALS['defaultgravatar'] = $template_path . '/styles/' . $style_path . '/gravatar.gif';
?>


<div id="page">
	
	<div id="header"><!-- START LOGO LEVEL WITH RSS FEED -->
		
		<h1><a href="<?php echo get_option('home'); ?>/" title="<? bloginfo('name'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/styles/<?php echo "$style_path"; ?>/logo.gif" alt="" /></a></h1>
		
		<div id="topbanner">
			
			    <div id="search">
        <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
			<input type="text" value="Search the site for..." onclick="this.value='';" name="s" id="s" />
            <input name="" type="submit" value="Search" class="btn" />
            
        </form>
	</div><!--/search -->
			
		</div><!--/rss-->
		
	</div><!--/header -->
    
    <div id="nav"> <!-- START TOP NAVIGATION BAR -->
	
		<div id="nav-left">
	
			<ul>
            
            	<?php /* If this is the frontpage */ if ( is_home() ) { ?>
				<li class="current_page_item"><a href="<?php echo get_option('home'); ?>/">Home</a></li>
				<?php } else { ?>
				<li class="page_item"><a href="<?php echo get_option('home'); ?>/">Home</a></li>
				<?php } ?>
				<?php wp_list_pages('depth=1&sort_column=menu_order&title_li=' . __('') . '' ); ?>		
			
			</ul>
		
		</div><!--/nav-left -->

		<div id="nav-right">		
		
			<h2>Subscribe via: <a href="<?php bloginfo('rss2_url'); ?>" class="rss" title="Subscribe via RSS">RSS</a> <a href="http://www.feedburner.com/fb/a/emailverifySubmit?feedId=<?php $feedburner_id = get_option('premiumnews_feedburner_id'); echo $feedburner_id; ?>" class="email" title="Subscribe via RSS">EMAIL</a></h2>
		
		</div><!--/nav-right -->
		
	</div><!--/nav-->
	
	<div><!-- START CATEGORY NAVIGATION (SUCKERFISH CSS) -->
		
			<ul id="nav2">
				<?php wp_list_categories('title_li=') ?>	
			</ul>
					
	</div><!--/nav2-->
	
	<div id="columns"><!-- START MAIN CONTENT COLUMNS -->