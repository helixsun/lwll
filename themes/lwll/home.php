<?php get_header(); ?>


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
																	<img alt="" src="<?php bloginfo('template_directory'); ?>/images/1-t1.jpg" /><br />
																</div>
																<div class="padding">
																	<?php $the_query = new WP_Query('category_name=home_1&showposts=1&orderby=post_date&order=desc');
														            while ($the_query->have_posts()) : $the_query->the_post();?>
                                  
																				<?php the_excerpt(); ?>
                                  
																	<a href="<?php the_permalink(); ?>"><img alt="" src="<?php bloginfo('template_directory'); ?>/images/click_here.gif" /></a><br />
																	<?php endwhile; ?>
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
																	<img alt="" src="<?php bloginfo('template_directory'); ?>/images/1-t2.jpg" /><br />
																</div>
																<div class="padding">
																	<?php $the_query = new WP_Query('category_name=home_3&showposts=1&orderby=post_date&order=desc');
														            while ($the_query->have_posts()) : $the_query->the_post();?>
                                  
																				<?php the_excerpt(); ?>
                                  
																	<a href="<?php the_permalink(); ?>"><img alt="" src="<?php bloginfo('template_directory'); ?>/images/click_here.gif" /></a><br />
																	<?php endwhile; ?>
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
						<div class="column3">
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
																	<img alt="" src="<?php bloginfo('template_directory'); ?>/images/1-t3.jpg" /><br />
																</div>
																<div class="padding">
																	<?php $the_query = new WP_Query('category_name=home_3&showposts=1&orderby=post_date&order=desc');
														            while ($the_query->have_posts()) : $the_query->the_post();?>
                                  
																				<?php the_excerpt(); ?>
																	<a href="<?php the_permalink(); ?>"><img alt="" src="<?php bloginfo('template_directory'); ?>/images/click_here.gif" /></a><br />
																	<?php endwhile; ?>
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
						<div class="clear"></div>
					</div>
					<div class="columns2">
						<div class="ver_line">
							<div class="column1">
								<div class="padding">
									<img alt="" src="<?php bloginfo('template_directory'); ?>/images/1-t4.gif" /><br />
									<?php $the_query = new WP_Query('category_name=home_1&showposts=1&orderby=post_date&order=desc');
						            while ($the_query->have_posts()) : $the_query->the_post();?>
                  
												<?php the_excerpt(); ?>
									<div class="more"><a href="<?php the_permalink(); ?>">learn more</a></div>
									        <?php edit_post_link("管理员编辑"); ?>
									<?php endwhile; ?>
								</div>
							</div>
							<div class="column2">
								<div class="padding">
									<img alt="" src="<?php bloginfo('template_directory'); ?>/images/1-t5.gif" /><br />
									<?php $the_query = new WP_Query('category_name=home_1&showposts=2&orderby=post_date&order=desc');
						            while ($the_query->have_posts()) : $the_query->the_post();?>
									
									<div class="content">
										<span class="date"><?php the_date(); ?></span><br />
										<p class="p1">
											<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
									    <?php the_excerpt(); ?>
									    <?php edit_post_link("管理员编辑"); ?>
							    
									</div>
									
										<?php endwhile; ?>
										
									<div class="more"><a href="/kehu">显示所有的新闻</a></div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>
	
	
	<?php get_footer(); ?>