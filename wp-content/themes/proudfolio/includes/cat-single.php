<?php
	
	foreach((get_the_category()) as $category) { $cat_id = $category->cat_ID; }
	
	$portfoliocats = get_categories('child_of=' . $GLOBALS['portfolio_id'] .'&hierarchical=0&hide_empty=0');
	$blogcats = get_categories('child_of=' . $GLOBALS['blog_id'] .'&hierarchical=0&hide_empty=0');
	
	$display_portfolio = false;
	$display_blog = false;
	
	foreach ( $portfoliocats as $ptest ) {
		if ( $cat_id == $ptest->cat_ID ) { $display_portfolio = true; }
	}
	
	if ( $cat_id == $GLOBALS['portfolio_id'] ) { $display_portfolio = true; }

	foreach ( $blogcats as $btest ) {
		if ( $cat_id == $btest->cat_ID ) { $display_blog = true; }
	}	

	if ( $cat_id == $GLOBALS['blog_id'] ) { $display_blog = true; }	

?>