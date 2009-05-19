<!-- begin l_sidebar -->

<div id="l_sidebar">

	<ul id="l_sidebarwidgeted">
	
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Bottom Left') ) : ?>
	
		<li id="categories">
		<h2>分类</h2>
			<ul>
				<?php wp_list_categories('sort_column=name&title_li=&depth=2'); ?>
			</ul>
		</li>
	
		<li id="archives">
		<h2>存档</h2>
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
		</li>
		
		<li id="links">
		<h2>链接</h2>
			<ul>
				<?php wp_list_bookmarks('title_li=&categorize=0'); ?>
			</ul>
		</li>
	
		<li id="meta">
		<h2>Admin</h2>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<li><a href="http://www.wordpress.org/">WordPress</a></li>
				<?php wp_meta(); ?>
				<li><a href="http://validator.w3.org/check?uri=referer">XHTML</a></li>
			</ul>
		</li>
		
	<?php endif; ?>
	
	</ul>
	
</div>

<!-- end l_sidebar -->