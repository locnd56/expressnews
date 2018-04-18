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
	
	<?php $bgr_file = get_option('premiumnews_bgr'); 
	if (isset($bgr_file)) { ?>
		<link rel="stylesheet" type="text/css"  href="<?php bloginfo('stylesheet_directory'); ?>/styles/bgr/<?php echo $bgr_file; ?>" media="screen" />
	<?php } ?>

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/jquery-1.2.1.pack.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/jcycle.js"></script>
	<script type="text/javascript">
		$.fn.cycle.defaults.timeout = 6000;
		$(function() {
			$("#featuredpost").cycle({
			fx: "slideX",
			speed: "fast",
			timeout: 3000,
			pause: 2,
			next: "#next2",
			prev: "#prev2"
		});
		});
	</script>
	
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/fontsize.js"></script>	
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/includes/js/tabs.js"></script>	

	<!--[if lte IE 6]>
	<script defer type="text/javascript" src="<?php bloginfo('template_directory'); ?>/images/pngfix.js"></script>
	<![endif]-->
    
    <!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/ie7.css" />
	<![endif]-->

	<script type="text/javascript">

		sfHover = function() {
			var sfEls = document.getElementById("nav").getElementsByTagName("LI");
			for (var i=0; i<sfEls.length; i++) {
				sfEls[i].onmouseover=function() {
					this.className+=" sfhover";
				}
				sfEls[i].onmouseout=function() {
					this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
				}
			}
		}
		if (window.attachEvent) window.attachEvent("onload", sfHover);
	
	</script>
	
	<?php wp_head(); ?>

</head>

<body>

<?php
	$template_path = get_bloginfo('template_directory');
	$GLOBALS['defaultgravatar'] = $template_path . '/images/gravatar.jpg';
?>

<div id="top">

	<ul class="nav1">
   		<li <?php if ( is_home() ) { ?> class="current_page_item" <?php } ?>><a href="<?php echo get_option('home'); ?>/"><span>Home</span></a></li>
		<?php
        $pages = wp_list_pages('sort_column=menu_order&title_li=&echo=0');
        $pages = preg_replace('%<a ([^>]+)>%U','<a $1><span>', $pages);
        $pages = str_replace('</a>','</span></a>', $pages);
        echo $pages;
        ?>
	</ul>
    <!--/nav1-->
    
	<div id="fonts"> 
    	<small><a href="javascript:changeFontSize(-1)">A</a></big></small> <big><a href="javascript:changeFontSize(1)">A</a></big> 
    </div>
	<!--/fonts-->

</div>
<!--/top-->

<div id="page">

	<div id="header">
		
		<h1><a href="<?php echo get_option('home'); ?>/" title="<? bloginfo('name'); ?>"><? bloginfo('name'); ?></a></h1>

		<div class="spacer">       
        
			<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
            
				<div id="search">
					<input type="text" value="Enter search keyword" onclick="this.value='';" name="s" id="s" />
					<input name="" type="image" src="<?php bloginfo('template_directory'); ?>/images/btn-search.gif" value="Go" class="btn"  />
				</div>
				<!--/search -->  
                              
				<p>Subscribe: <a href="<?php bloginfo('rss2_url'); ?>">Posts</a> / <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments</a> / <a href="http://www.feedburner.com/fb/a/emailverifySubmit?feedId=<?php $feedburner_id = get_option('premiumnews_feedburner_id'); echo $feedburner_id; ?>" target="_blank">Email</a></p>
                
			</form>
            
		</div>
		<!--/spacer-->		
		
	</div>
    <!--/header -->
	
	<div id="topmenu">
		<ul id="nav">
			<?php include(TEMPLATEPATH . '/includes/version.php'); ?>
			<?php wp_list_categories('title_li=&exclude=' . $ex_aside) ?>
		</ul>
		<div id="rss"><a href="<?php bloginfo('rss2_url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/ico-rss.gif" alt="RSS" /></a></div><!--/rss -->
	</div>
    <!--/topmenu -->

	<div id="columns">