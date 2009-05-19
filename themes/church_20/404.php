<?php get_header(); ?>

<div id="content">

	<div id="contentleft">
	
		<div class="postarea">
	
		<?php include(TEMPLATEPATH."/breadcrumb.php");?>
			
			<h1>Not Found, Error 404</h1>
			<p>抱歉，你要找的内容不在这里. 你可以按分页、按月份、按类别重新搜索:</p>
			
				<b>按分页:</b>
					<ul>
						<?php wp_list_pages('title_li='); ?>
					</ul>
				
				<b>按月份:</b>
					<ul>
						<?php wp_get_archives('type=monthly'); ?>
					</ul>
							
				<b>按类别:</b>
					<ul>
						<?php wp_list_cats('sort_column=name'); ?>
					</ul>
		</div>
		
	</div>
	
<?php include(TEMPLATEPATH."/sidebar.php");?>
		
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>