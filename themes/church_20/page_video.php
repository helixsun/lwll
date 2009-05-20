<?php
/*
Template Name: Video Page
*/
?>


<?php get_header(); ?>


<div id="content">

	<div id="contentleft" style="width: 916px;">
	
		<div class="postarea" style="width: 916px;background:#FFFFFF;">
				
			<?php 
			  $the_query = new WP_Query('category_name=video&showposts=&orderby=post_date&order=desc');
			  if ($the_query->have_posts()) :
			  while ($the_query->have_posts()) : $the_query->the_post();?>
			<div class="cat_video">
			<h1><?php the_title(); ?></h1>
				  <?php the_excerpt(); ?>
			</div>
			<?php endwhile; endif;?>		
		</div>
		
	</div>
			
</div>







<?php get_footer(); ?>