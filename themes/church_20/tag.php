<?php get_header(); ?>

<div id="content"> 

	<div id="contentleft">
	
		<div class="postarea">
	
		<?php include(TEMPLATEPATH."/breadcrumb.php");?>
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			
			<div class="date">
			
				<div class="dateleft">
					<p><span class="time"><?php the_time('F j, Y'); ?></span> 作者: <?php the_author_posts_link(); ?> &nbsp;<?php edit_post_link('(编辑)', '', ''); ?> <br /> 类别: <?php the_category(', ') ?></p> 
				</div>
				
				<div class="dateright">
					<p><span class="icomment"><?php comments_popup_link('发表评论', '1 条评论', '% 条评论'); ?></span></p> 
				</div>
				
			</div>
			
			<div style="clear:both;"></div>
		
			<?php the_content(__('阅读全文'));?><div style="clear:both;"></div>
			
			<div class="postmeta2">
				<p><span class="tags">标签: <?php the_tags('') ?></span></p>
			</div>
			
			<?php endwhile; else: ?>
			
			<p><?php _e('抱歉，你要找的内容不在这里.'); ?></p><?php endif; ?>
			<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
			<p><?php posts_nav_link(' &#8212; ', __('&laquo; 上一页'), __('下一页 &raquo;')); ?></p>
			<?php } ?>
			
		</div>
				
	</div>
	
<?php include(TEMPLATEPATH."/sidebar.php");?>
		
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>