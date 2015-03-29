
<?php get_header(); ?>


<div class="category_slider">
    
    <div class="category_slide">
		<div class="interior_slider">
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			
			<?php
			// check if the repeater field has rows of data
				if( have_rows('slide_repeater') ):
					// loop through the rows of data
					while ( have_rows('slide_repeater') ) : the_row();?>
						<div class="interior_slide">
							<div class="interior interior_top interior_left" id="<?php the_sub_field('slide_header_image') ?>">
								<img src="<?php
								// display a sub field value
								the_sub_field('slide_header_image'); ?>">
							</div>
							<div class="interior interior_top interior_right" id="<?php the_sub_field('slide_title') ?>">
								<?php
								// display a sub field value
								the_sub_field('slide_title'); ?>
								<div class="interior_external_nav">
									<a href="#" class="prev-slide"> < </a>
									<a href="#" class="next-slide"> > </a>
									
								</div>
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
						
						<?php 
				endwhile;
				else :
				// no rows found
				endif;
				?>
				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>
						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
					</article>
					<!-- /article -->

				<?php endif; ?>
		</div>		 <!-- Interior Slider -->		
    </div> <!-- Category Slide -->
    
    <li><img src="http://placekitten.com/300/200" alt="" /></li>
    
    <li><img src="http://placehold.it/300x200" alt="" /></li>
    
    <li><img src="http://ipsumimage.appspot.com/300x200.png" alt="" /></li>
    
</div>



<?php get_footer(); ?>