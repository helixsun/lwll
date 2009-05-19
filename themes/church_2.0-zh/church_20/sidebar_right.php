<!-- begin r_sidebar -->

<div id="r_sidebar">

	<ul id="r_sidebarwidgeted">
	
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Bottom Right') ) : ?>
		
		<!--To define the 120x600 ad, go to your WP dashboard and go to Appearance -> Revolution Lifestyle Options and enter the ad code.-->
	
		<li id="ads">
		<h2>赞助商广告</h2>
			<?php $ad_120 = get_option('revlifestyle_ad_120'); echo stripslashes($ad_120); ?>
		</li>

	<?php endif; ?>

	</ul>
	
</div>

<!-- end r_sidebar -->