<div class="interior_slide" id="<?php echo $post->post_name?>">
							<div class="interior interior_top interior_left">
								<img src="<?php
								// display a sub field value
								the_sub_field('slide_header_image'); ?>">
							</div>
							<div class="interior interior_top interior_right" id="<?php the_sub_field('slide_title') ?>">
								<?php
								// display a sub field value
								the_sub_field('slide_title'); ?>
								
								
							</div>
							<div class="interior interior_left interior_bottom">
							<?php

								// check if the repeater field has rows of data
								if( have_rows('slide_thumbnails') ):

									// loop through the rows of data
									while ( have_rows('slide_thumbnails') ) : the_row();?>
										<div class="thumbnails">
											<img src="<?php
										// display a sub field value
										the_sub_field('thumbnail_image_01'); ?>">
										</div>
										<div class="thumbnails">
										<img src="<?php
										// display a sub field value
										the_sub_field('thumbnail_image_02'); ?>">
										</div>
										<div class="thumbnails">
										<img src="<?php
										// display a sub field value
										the_sub_field('thumbnail_image_03'); ?>">
										</div>
										<div class="thumbnails">
										<img src="<?php
										// display a sub field value
										the_sub_field('thumbnail_image_04'); ?>">
										</div>
							<?php 
								endwhile;

							else :

								// no rows found

							endif;

							?>
							 
							</div> 
							<div class="interior interior_bottom interior_right" id="<?php the_sub_field('slide_description') ?>">
								<?php
								// display a sub field value
								the_sub_field('slide_description'); ?>
							</div>
						</div>