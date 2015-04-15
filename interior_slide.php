<div class="interior_slide">
							<div class="interior interior_top interior_left">
								
								
								<span class="index_title <?php echo $post->post_name?>_background">
									
									
									
									<?php $x = get_sub_field('slide_title'); ?>
									
									<?php if(get_sub_field('slide_gallery')) { ?>
										<a href="<?php the_sub_field('slide_header_image'); ?>" data-rel="shadowbox[<?php the_sub_field('slide_title') ?>]">
											Launch Gallery&nbsp;<i class="fa fa-external-link"></i>
										</a> 
									<?php } ?>
									
									<?php if(get_sub_field('slide_header_image_url')) { ?>
									<a href="<?php the_sub_field('slide_header_image_url'); ?>" target="_blank">
											Launch Site&nbsp;<i class="fa fa-external-link"></i>
									</a> 
									<?php } ?>
								</span>
								
								<img class="desaturate" src="<?php
								// display a sub field value
								the_sub_field('slide_header_image'); ?>" alt="<?php
								// display a sub field value
								the_field('index_text_01'); ?>">
								
							</div>
							<div class="interior interior_top interior_right">
								<span class="slide_index"><a href="#" data-slide="1"><?php echo $post->post_title?></a></span>
								<span class="slide_title"><a><?php the_sub_field('slide_title'); ?></a></span>
								
								
							</div>
							<div class="interior interior_left interior_bottom">
							<?php if(get_sub_field('slide_gallery')) { ?>
								<?php

									// check if the repeater field has rows of data
									if( have_rows('slide_thumbnails') ):

										// loop through the rows of data
										while ( have_rows('slide_thumbnails') ) : the_row();?>
											
											<div class="thumbnails">
												<a href="<?php the_sub_field('thumbnail_image_01'); ?>" data-rel="shadowbox[<?php echo $x ?>]"><img class="desaturate" src="<?php
											// display a sub field value
											the_sub_field('thumbnail_image_01'); ?>" alt="<?php
									the_field('index_text_01'); ?> thumbnail"></a>
											</div>
											<div class="thumbnails">
											<a href="<?php the_sub_field('thumbnail_image_02'); ?>" data-rel="shadowbox[<?php echo $x ?>]"><img class="desaturate" src="<?php
											// display a sub field value
											the_sub_field('thumbnail_image_02'); ?>"  alt="<?php
									the_field('index_text_02'); ?> thumbnail"></a>
											</div>
											<div class="thumbnails">
											<a href="<?php the_sub_field('thumbnail_image_03'); ?>" data-rel="shadowbox[<?php echo $x ?>]"><img class="desaturate" src="<?php
											// display a sub field value
											the_sub_field('thumbnail_image_03'); ?>"  alt="<?php
									the_field('index_text_03'); ?> thumbnail"></a>
											</div>
											<div class="thumbnails">
											<a href="<?php the_sub_field('thumbnail_image_04'); ?>" data-rel="shadowbox[<?php echo $x ?>]"><img class="desaturate" src="<?php
											// display a sub field value
											the_sub_field('thumbnail_image_04'); ?>"  alt="<?php
									the_field('index_text_04'); ?> thumbnail"></a>
											</div>
								<?php 
									endwhile;
								else :
								endif;

								?>
							<?php } ?>
							<?php if(get_sub_field('slide_header_image_url')) { ?>
								<?php

									// check if the repeater field has rows of data
									if( have_rows('slide_thumbnails') ):

										// loop through the rows of data
										while ( have_rows('slide_thumbnails') ) : the_row();?>
											<div class="thumbnails">
												<img class="desaturate" src="<?php
											// display a sub field value
											the_sub_field('thumbnail_image_01'); ?>" alt="<?php
									the_field('index_text_01'); ?> thumbnail">
											</div>
											<div class="thumbnails">
											<img class="desaturate" src="<?php
											// display a sub field value
											the_sub_field('thumbnail_image_02'); ?>"  alt="<?php
									the_field('index_text_01'); ?> thumbnail">
											</div>
											<div class="thumbnails">
											<img class="desaturate" src="<?php
											// display a sub field value
											the_sub_field('thumbnail_image_03'); ?>"  alt="<?php
									the_field('index_text_01'); ?> thumbnail">
											</div>
											<div class="thumbnails">
											<img class="desaturate" src="<?php
											// display a sub field value
											the_sub_field('thumbnail_image_04'); ?>"  alt="<?php
									the_field('index_text_01'); ?> thumbnail">
											</div>
								<?php 
									endwhile;
								else :
								endif;

								?>
							<?php } ?> 
							</div> 
							<div class="interior interior_bottom interior_right">
								<span class="slide_description"><?php
								// display a sub field value
								the_sub_field('slide_description'); ?></span>
							</div>
						</div>