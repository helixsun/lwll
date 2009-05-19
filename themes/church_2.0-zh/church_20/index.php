<?php get_header(); ?>

<div id="content">

	<div id="contentleft">
	
		<div class="postarea">
		
		<?php include(TEMPLATEPATH."/breadcrumb.php");?>
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			
			<div class="date">
			
				<div class="dateleft">
					<p><span class="time"><?php the_time('F j, Y'); ?></span> by <?php the_author_posts_link(); ?> &nbsp;<?php edit_post_link('(编辑)', '', ''); ?> <br /> 类别: <?php the_category(', ') ?></p> 
				</div>
				
				<div class="dateright">
					<p><span class="icomment"><a href="<?php the_permalink(); ?>#respond"><?php comments_number('发表评论', '1 条评论', '% 条评论'); ?></a></span></p> 
				</div>
				
			</div>
			
			<div style="clear:both;"></div>

			<?php the_content(__('阅读全文'));?><div style="clear:both;"></div>
			
			<div class="postmeta">
				<p><span class="tags">标签: <?php the_tags('') ?></span></p>
			</div>
		 			
			<!--
			<?php trackback_rdf(); ?>
			-->
			
			<?php endwhile; else: ?>
			
			<p><?php _e('抱歉，你要找的内容不在这里.'); ?></p><?php endif; ?>
			
		</div>
		
		<div class="adsense-post">
		
			<!--To activate your Google AdSense ad, go to your WP dashboard and go to Appearance -> Revolution Lifestyle Options and enter your Google Adsense Code.-->
			
			<?php $adsense_468 = get_option('revlifestyle_adsense_468'); echo stripslashes($adsense_468); ?>
						
		</div>
			
		<div class="comments">
	
			<?php comments_template('',true); ?>
			
		</div>
		
	</div>
	
<?php include(TEMPLATEPATH."/sidebar.php");?>
		
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>