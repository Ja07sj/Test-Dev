<div class="interior_slide" id="<?php echo $post->post_name?>_index">
				
				
					
					<div class="interior interior_top interior_left">
						<?php 
						if(get_field('index_image_01'))
						{
						?>	
								
								
								<span class="index_title <?php echo $post->post_name?>_background"><a href="#" data-slide="2"><?php
								// display a sub field value
								the_field('index_text_01'); ?></a>
								</span>
								<img src="<?php
								// display a sub field value
								the_field('index_image_01'); ?>" class="desaturate" alt="<?php echo $post->post_name?>">
								
								
						<?php }
		 
						?>

						
						<?php 
						if(get_field('index_header_image'))
						{
						?>
							<img src="<?php
								// display a sub field value
								the_field('index_header_image'); ?>" class="img_normal" alt="<?php echo $post->post_name?>">
						<?php }
		 
						?>
						
					</div>
					<div class="interior interior_top interior_right">
						<?php 
						if(get_field('index_image_01'))
						{
						?>	
								<span class="index_title <?php echo $post->post_name?>_background"><a href="#" data-slide="3"><?php
								// display a sub field value
								the_field('index_text_02'); ?></a>
								</span>
								<img src="<?php
								// display a sub field value
								the_field('index_image_02'); ?>" class="desaturate" alt="<?php echo $post->post_name?>">
								
						<?php }
		 
						?>
						
						<?php 
						if(get_field('index_header_image'))
						{
						?>
							<span class=" <?php echo $post->post_name?> slide_title"><a><?php
								// display a sub field value
								the_field('index_header_title'); ?></a></span>
						<?php }
		 
						?>
					</div>
							
					<div class="interior interior_bottom interior_left">
						<?php 
						if(get_field('index_image_03'))
						{
						?>			
								
								<span class="index_title <?php echo $post->post_name?>_background"><a href="#" data-slide="4"><?php
								// display a sub field value
								the_field('index_text_03'); ?></a>
								</span>
								<img src="<?php
								// display a sub field value
								the_field('index_image_03'); ?>" class="desaturate" alt="<?php echo $post->post_name?>">
								
								
						<?php }
		 
						?>	
						
						
						<?php 
						if(get_field('index_header_thumbnail_01'))
						{
						?>	
						<div class="thumbnails">
						<a href="<?php the_field('index_header_thumbnail_01'); ?>" data-rel="shadowbox[<?php
								the_field('index_header_title'); ?>]"><img src="<?php the_field('index_header_thumbnail_01'); ?>" class="desaturate" alt="<?php echo $post->post_name?>"></a>
						</div>							
						<div class="thumbnails">
							<a href="<?php the_field('index_header_thumbnail_02'); ?>" data-rel="shadowbox[<?php
								the_field('index_header_title'); ?>]"><img src="<?php the_field('index_header_thumbnail_02'); ?>" class="desaturate" alt="<?php echo $post->post_name?>"></a>
						</div>
						
						<div class="thumbnails">		
							<a href="<?php the_field('index_header_thumbnail_03'); ?>" data-rel="shadowbox[<?php
								the_field('index_header_title'); ?>]"><img src="<?php the_field('index_header_thumbnail_03'); ?>" class="desaturate" alt="<?php echo $post->post_name?>"></a>
						</div>
						
						<div class="thumbnails">
							<a href="<?php the_field('index_header_thumbnail_04'); ?>" data-rel="shadowbox[<?php
								the_field('index_header_title'); ?>]"><img src="<?php the_field('index_header_thumbnail_04'); ?>" class="desaturate" alt="<?php echo $post->post_name?>"></a>
						</div>	
						<?php }
		 
						?>														
					</div>
					<div class="interior interior_bottom interior_right">
						<?php 
						if(get_field('index_image_04'))
						{
						?>		
								
								<span class="index_title <?php echo $post->post_name?>_background"><a href="#" data-slide="5"><?php
								// display a sub field value
								the_field('index_text_04'); ?></a>
									</span>
								<img src="<?php
								// display a sub field value
								the_field('index_image_04'); ?>" class="desaturate" alt="<?php echo $post->post_name?>">
								
						
						<?php }
		 
						?>	
						
						<?php 
						if(get_field('index_header_description'))
						{
						?>	
						
						<?php the_field('index_header_description'); ?>
						
						
						<?php }
		 
						?>	
						
						</div>		
					 
				
				
			</div> 