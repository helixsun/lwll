<!-- begin sidebar -->

<div id="sidebar">

	<div class="newsletter">
	
		<!--To enable the eNews &amp; Upates feature, go to your WP dashboard and go to Appearance -> Revolution Lifestyle Options and enter your Feedburner ID.-->

		<h2>订阅到邮箱</h2>
		<p>网站有最动态时<br /> 他将自动发送到你的邮箱!</p><form id="subscribe" action="http://www.feedburner.com/fb/a/emailverify" method="post" target="popupwindow" onsubmit="window.open('http://www.feedburner.com', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><input type="text" value="请输入你的E-mail地址..." id="subbox" onfocus="if (this.value == '请输入你的E-mail地址...') {this.value = '';}" onblur="if (this.value == '') {this.value = '请输入你的E-mail地址...';}" name="email"/><input type="hidden" value="http://feeds.feedburner.com/~e?ffid=<?php $feedburner_id = get_option('revlifestyle_feedburner_id'); echo $feedburner_id; ?>" name="url"/><input type="hidden" value="eNews Subscribe" name="title"/><input type="submit" value="GO" id="subbutton" /></form>	
	
	</div>
	
	<!--To determine what video is shown on the homepage, go to your WP dashboard and go to Appearance -> Revolution Lifestyle Options and enter your video code here.-->
	
	<div class="video">
		
		<h3>在线视频</h3>
		<?php $video = get_option('revlifestyle_video'); echo stripslashes($video); ?>
		
	</div>
	
	<div class="adsense">
	
		<!--To activate your Google AdSense ad, go to your WP dashboard and go to Appearance -> Revolution Lifestyle Options and enter your Google Adsense Code.-->
			
		<?php $adsense_300 = get_option('revlifestyle_adsense_300'); echo stripslashes($adsense_300); ?>
			
	</div>
	
	<div class="widgetarea">
	
	<ul id="sidebarwidgeted">
	
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Top') ) : ?>
	
		<li id="recent-posts">
		<h2>最新日志</h2>
			<ul>
				<?php wp_get_archives('type=postbypost&limit=5'); ?> 
			</ul>
		</li>
		
	<?php endif; ?>
	
	</ul>
	
	</div>

	<?php include(TEMPLATEPATH."/sidebar_left.php");?>
	
	<?php include(TEMPLATEPATH."/sidebar_right.php");?>
	
</div>

<!-- end sidebar -->