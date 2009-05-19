<?php
/*
Template Name: Archive Page
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="contentleft">

		<div class="postarea">
		
		<?php include(TEMPLATEPATH."/breadcrumb.php");?>
				
				<h1>档案馆</h1><br />
				
				<div class="archive">
		
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
							<?php wp_list_categories('sort_column=name&title_li='); ?>
						</ul>
		
				</div>
				
				<div class="archive">
					
					<b>按日志:</b>
						<ul>
							<?php wp_get_archives('type=postbypost&limit=100'); ?> 
						</ul>
				</div>
			
			</div>
		
	</div>
	
<?php include(TEMPLATEPATH."/sidebar.php");?>
		
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>