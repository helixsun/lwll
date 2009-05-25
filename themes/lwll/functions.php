<?php 


function showhomeheader() {
$recent = new WP_Query("pagename=home"); 

while($recent->have_posts()) : $recent->the_post();
?>
<div class="text">
   <?php the_excerpt(); ?>
</div>
<a href="<?php the_permalink(); ?>">
	<img alt="" src="<?php bloginfo('template_directory'); ?>/images/header_click_here.png" /></a>
<?php
endwhile;

}





?>