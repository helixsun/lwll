<?php
/*
Template Name: Content Page
*/
?>
	<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


	<div id="middle">
		<div class="indent">
			<div class="columns1">
				<div class="column1">
					<div class="border">
						<div class="btall">
							<div class="ltall">
								<div class="rtall">
									<div class="tleft">
										<div class="tright">
											<div class="bleft">
												<div class="bright">
													<div class="ind">
														<div class="h_text">
															<img alt="" src="<?php bloginfo('template_directory'); ?>/images/6-t1.jpg" /><br />
														</div>
														<div class="padding">
<?php the_content(); ?>
<?php edit_post_link("管理员编辑"); ?>

														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="indent_column">&nbsp;</div>
				<div class="column2">
					<div class="border">
						<div class="btall">
							<div class="ltall">
								<div class="rtall">
									<div class="tleft">
										<div class="tright">
											<div class="bleft">
												<div class="bright">
													<div class="ind">
														<div class="h_text">
															<img alt="" src="<?php bloginfo('template_directory'); ?>/images/6-t2.jpg" /><br />
														</div>
														<div class="padding">
														</div>
														<iframe width="490" height="560" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://ditu.google.cn/maps?f=d&amp;source=s_d&amp;saddr=%E9%BB%91%E9%BE%99%E6%B1%9F%E7%9C%81%E5%93%88%E5%B0%94%E6%BB%A8%E5%B8%82%E7%BA%A2%E5%86%9B%E8%A1%97%E5%93%88%E5%B0%94%E6%BB%A8%E7%AB%99&amp;daddr=%E9%BB%91%E9%BE%99%E6%B1%9F%E7%9C%81%E5%93%88%E5%B0%94%E6%BB%A8%E5%B8%82%E5%B8%82%E5%8C%BA%E5%B5%A9%E5%B1%B1%E8%B7%AF%E9%99%84%EF%BC%97%EF%BC%97+(%E9%98%B3%E5%85%89%E8%B4%A2%E4%BA%A7%E4%BF%9D%E9%99%A9%E5%AE%A2%E6%88%B7%E6%9C%8D%E5%8A%A1%E4%B8%AD%E5%BF%83)&amp;geocode=FclFugIdqkaMBw%3BFRIZugIdfSONByE7vI8IgKJ0TQ&amp;hl=zh-CN&amp;mra=pe&amp;mrcr=0&amp;sll=45.756269,126.661907&amp;sspn=0.042998,0.127373&amp;ie=UTF8&amp;brcurrent=3,0x5e447e2e8a8b5a19:0xdc988ed659443701%3B5,0&amp;ll=45.750576,126.688671&amp;spn=0.026951,0.032616&amp;z=14&amp;output=embed"></iframe><br /><small><a href="http://ditu.google.cn/maps?f=d&amp;source=embed&amp;saddr=%E9%BB%91%E9%BE%99%E6%B1%9F%E7%9C%81%E5%93%88%E5%B0%94%E6%BB%A8%E5%B8%82%E7%BA%A2%E5%86%9B%E8%A1%97%E5%93%88%E5%B0%94%E6%BB%A8%E7%AB%99&amp;daddr=%E9%BB%91%E9%BE%99%E6%B1%9F%E7%9C%81%E5%93%88%E5%B0%94%E6%BB%A8%E5%B8%82%E5%B8%82%E5%8C%BA%E5%B5%A9%E5%B1%B1%E8%B7%AF%E9%99%84%EF%BC%97%EF%BC%97+(%E9%98%B3%E5%85%89%E8%B4%A2%E4%BA%A7%E4%BF%9D%E9%99%A9%E5%AE%A2%E6%88%B7%E6%9C%8D%E5%8A%A1%E4%B8%AD%E5%BF%83)&amp;geocode=FclFugIdqkaMBw%3BFRIZugIdfSONByE7vI8IgKJ0TQ&amp;hl=zh-CN&amp;mra=pe&amp;mrcr=0&amp;sll=45.756269,126.661907&amp;sspn=0.042998,0.127373&amp;ie=UTF8&amp;brcurrent=3,0x5e447e2e8a8b5a19:0xdc988ed659443701%3B5,0&amp;ll=45.750576,126.688671&amp;spn=0.026951,0.032616&amp;z=14" style="color:#0000FF;text-align:left">查看大图</a></small>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="columns2">
				<div class="padding">
					<img alt="" src="<?php bloginfo('template_directory'); ?>/images/6-t3.gif" /><br />
					<p class="p1">
						<strong class="b_text">黑龙江省</strong><br />
						我们很欢迎 你给我们留言.<br class="clear" />
					</p>

					
					<?php if ( comments_open() ) : ?>
					<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
					<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
					<?php else : ?>

					<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="form">
						<div class="column1">
					<?php if ( is_user_logged_in() ) : ?>

					<p>登陆用户是: <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">登出 &raquo;</a></p>

					<?php else : ?>
						<div class="row">
							<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
							<label for="author"><small>Name: <?php if ($req) echo "(required)"; ?></small></label></p>
							
						</div>
						
     			<div class="row">
						<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
						<label for="email"><small>Mail: (will not be published) <?php if ($req) echo "(required)"; ?></small></label></p>
          </div>

					<div class="row">
						<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
						<label for="url"><small>Fex:</small></label></p>

          </div>
					<?php endif; ?>
						</div>

							<div class="column2">				
					<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
					<div class="">
						<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p><br />
						
						<div class="div">
							<p><input name="submit" tabindex="5" id="submit" value="发送" type="submit" src="<?php bloginfo('template_directory'); ?>/images/clear.gif" />&nbsp; <input type="reset" value="从写" src="<?php bloginfo('template_directory'); ?>/images/send.gif" /><?php comment_id_fields(); ?></p>
							<?php do_action('comment_form', $post->ID); ?>
						</div>
				     	</div>
				</div>
				<div class="clear"></div>
					</form>
					<?php endif; // If registration required and not logged in ?>


					<?php endif; // if you delete this the sky will fall on your head ?>

				</div>
			</div>
		</div>
	</div>
		<?php endwhile; endif; ?>
	<?php get_footer(); ?>