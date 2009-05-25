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
															<strong>The Company Name Inc.</strong><br />
															<p class="p1">
																8901 Marmora Road,<br />
																Glasgow, D04 89GR.<br /><br />
																
																Freephone: &nbsp; &nbsp; &nbsp;+1 800 559 6580<br />
																Telephone: &nbsp; &nbsp; &nbsp; +1 959 603 6035<br />
																FAX: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;+1 504 889 9898<br />
																E-mail: <a href="#">mail@companyname.com</a>																	</p>
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
															<?php the_title(); ?>
															<img alt="" src="<?php bloginfo('template_directory'); ?>/images/6-t2.jpg" /><br />
														</div>
														<div class="padding">
															<?php the_content(__('阅读全文'));?>
															
															<strong>Argentina</strong><br />
															Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta.<br />
															<strong>Denmark</strong><br />
															Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci.<br />
															<strong>Finland</strong><br />
															Quisque nulla. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi.	</div>
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
						<strong class="b_text">Lorem ipsum dolor sit aectetuer adipiscing elit. Praesent vestibulum molestie lacus.</strong><br />
						Montes, nascetur ridiculus muulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra mnec accumsan malesuada orci. Donec sit amet eros.<br class="clear" />
					</p>
					<form id="form" action="" enctype="multipart/form-data">
						<div class="column1">
							<div class="row">
								<input type="text" class="input" value="Name:" />
							</div>
							<div class="row">
								<input type="text" class="input" value="E-mail:" />
							</div>
							<div class="row">
								<input type="text" class="input" value="Fax:" />
							</div>
						</div>
						<div class="column2">
							<div class="">
								<textarea cols="1" rows="1">Message:</textarea><br />
								<div class="div">
									<input type="image" src="<?php bloginfo('template_directory'); ?>/images/clear.gif" />&nbsp; <input type="image" src="<?php bloginfo('template_directory'); ?>/images/send.gif" />
								</div>
							</div>
						</div>
						<div class="clear"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
		<?php endwhile; endif; ?>
	<?php get_footer(); ?>