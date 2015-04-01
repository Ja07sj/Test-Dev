
<?php get_header(); ?>


<div class="category_slider">

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <div class="category_slide" id="<?php echo $post->post_name?>">
		<div class="interior_slider">
			<?php get_template_part( 'index_pane' ); ?>
			
			
			
			
			<?php
			// check if the repeater field has rows of data
				if( have_rows('slide_repeater') ):
					// loop through the rows of data
					while ( have_rows('slide_repeater') ) : the_row();?>
					<?php get_template_part( 'interior_slide' ); ?>
						 <!-- Interior Slide -->	
						 <?php 
				endwhile;
				else :
				// no rows found
				endif;
				?>
						
		</div>		 <!-- Interior Slider -->		
    </div> <!-- Category Slide -->
  
				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>
						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
					</article>
					<!-- /article -->

				<?php endif; ?>
    
</div> <!-- Category Slider -->



<?php get_footer(); ?>