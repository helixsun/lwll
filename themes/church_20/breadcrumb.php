<div class="breadcrumb">
	<?php if (class_exists('breadcrumb_navigation_xt')) {
	echo '位置导航 > ';
	// New breadcrumb object
	$mybreadcrumb = new breadcrumb_navigation_xt;
	// Options for breadcrumb_navigation_xt
	$mybreadcrumb->opt['title_blog'] = '首页';
	$mybreadcrumb->opt['separator'] = ' / ';
	$mybreadcrumb->opt['singleblogpost_category_display'] = true;
	// Display the breadcrumb
	$mybreadcrumb->display();
	} ?>	
</div>