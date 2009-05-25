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
<?php if(is_page('content')){$id = 'index_5';}elseif(is_home()){$id = 'index';}elseif(is_page('shipin')){$id = 'index_1';}?>
			
<body id="<?php echo $id; ?>" onload="new ElementMaxHeight();">
	<div id="header_tall">
		<div id="main">
			<!--header -->
			<div id="header">
				<div class="h_logo">
						<div class="left">
						<img alt="" src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" /><br />
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
									<li><a href="index-2.html">Products</a></li>
									<li><a href="index-3.html">Clients</a></li>
									<li><a href="index-4.html">Services</a></li>
									<li class="last"><a href="/content">公司介绍</a></li>
								</ul>
								<br class="clear" />
							</div>
						</div>
					</div>
				</div>
				<div class="content">
					<img alt="" src="<?php bloginfo('template_directory'); ?>/images/header_t1.jpg" /><br />
					<img alt="" src="<?php bloginfo('template_directory'); ?>/images/header_t2.jpg" /><br />
					<div class="text">
						 世界通LINK WORLD软件采用了尖端软件压缩技术，可对语音、视频、图像等各种电子文件进行高倍压缩，最高可压缩数百倍
						.<br />
					</div>
					<a href="#"><img alt="" src="<?php bloginfo('template_directory'); ?>/images/header_click_here.jpg" /></a><div class="clear"></div>
				</div>
			</div>
			<!--header end-->