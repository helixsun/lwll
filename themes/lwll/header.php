<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="distribution" content="global" />
<meta name="robots" content="follow, all" />
<meta name="language" content="zh_CN" />

<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<link rel="Shortcut Icon" href="<?php echo get_settings('home'); ?>/wp-content/themes/lifestyle_20/images/favicon.ico" type="image/x-icon" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/layout.css" type="text/css" media="screen" />

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/prototype.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/lwll.js"></script>

<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>
<?php if(is_page('content')){$id = 'index_5';
}elseif(is_home()){$id = 'index';
}elseif(is_page('shipin')){$id = 'index_1';
}elseif(is_page('jieshao')){$id = 'index_2';
}elseif(is_page('kehu')){$id = 'index_3';
}elseif(is_page('chanpin')){$id = 'index_4';
	
}
?>
			
<body id="<?php echo $id; ?>" onload="new ElementMaxHeight();">
	<div id="header_tall">
		<div id="main">
			<!--header -->
			<div id="header">
				<div class="h_logo">
						<div class="left">
						<img alt="" src="<?php bloginfo('template_directory'); ?>/images/logo_copy.png" /><br />
					</div>
					<div class="right">
						<a href="#">RSS</a>				</div>
					<div class="clear"></div>
				</div>
				<div id="menu">
					<div class="rightbg">
						<div class="leftbg">
							<div class="padding">
								<ul>
									<li><a href="/">首页</a></li>
									<li><a href="/shipin">在线视频</a></li>
									<li><a href="jieshao">世界通介绍</a></li>
									<li><a href="kehu">客户交流</a></li>
									<li><a href="chanpin">产品中心</a></li>
									<li class="last"><a href="/content">联系我们</a></li>
								</ul>
								<br class="clear" />
							</div>
						</div>
					</div>
				</div>
				<div class="content">
					<img alt="" src="<?php bloginfo('template_directory'); ?>/images/header_t1.jpg" /><br />
					<img alt="" src="<?php bloginfo('template_directory'); ?>/images/header_t2.jpg" /><br />
             <?php showhomeheader(); ?>
					<div class="clear"></div>
				</div>
			</div>
			<!--header end-->