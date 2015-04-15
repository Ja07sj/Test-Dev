		</div> <!-- Main -->
	</div>  <!-- Main Content -->
		<div class="menu">
				
				
				<div id="social_icons">
				  <div>
					<a href="mailto:japong@gmail.com" target="_blank"><i class="fa fa-envelope-o"></i></a>
					
				  </div>
				  <div>
					<a href="https://twitter.com/JapongNet"><i class="fa fa-twitter" target="_blank"></i></a>
				  </div>
				  <div>
					<a href="" target="_blank"><i class="fa fa-file-text-o"></i></a>
				  </div>
				  <div>
					<a href="https://www.linkedin.com/profile/view?id=116248278" target="_blank"><i class="fa fa-linkedin"></i></a>
				  </div>
				</div>​
				<div class="menu_content">
				
				
				
					<div id="externalNav">
						
						
						
						<?php $x = 1 ?>
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
							<?php $x++ ?>
							
						<a href="#" data-slide="<?php echo $x ?>" class="<?php echo $post->post_name?>"><?php echo $post->post_title?></a>
						<?php endwhile; ?>

						<?php else: ?>
						
						<!-- article -->
						<article>
						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
						</article>
						<!-- /article -->

						<?php endif; ?>
						<!-- logo -->
						<div class="logo">
							<a href="#" data-slide="1">
								<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
								<img src="<?php echo get_template_directory_uri(); ?>/img/title.png" alt="Logo" class="logo-img">
							</a>
						</div>
						<!-- /logo -->
					</div>	
					
				</div>
			</div>
		
		</div>
		<!-- /wrapper -->
		
		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
		
		<script>
		jQuery(function($) {
			$('.category_slider').anythingSlider({	
				mode                : "vertical",
				expand				: true,
				buildStartStop      : false,
				buildArrows			: false,
				buildNavigation			: false,
				hashTags:false
			});
		});
		
		jQuery(function($) {
			$('.interior_slider').anythingSlider({	
				mode                : "horizontal",
				expand				: true,
				buildStartStop      : false,
				buildArrows			: true,
				buildNavigation			: false,
				hashTags:false
			});
		});

		
		
		jQuery(function($) {
		$('#externalNav a').click(function(){
				var slide = $(this).attr('data-slide');
				$('.category_slider').anythingSlider(slide);
				return false;
			});
		});
		
		jQuery(function($) {
		$('.index_title a').click(function(){
				var slide = $(this).attr('data-slide');
				$('.interior_slider').anythingSlider(slide);
				return false;
			});
		});
		
		jQuery(function($) {
		$('.slide_index a').click(function(){
				var slide = $(this).attr('data-slide');
				$('.interior_slider').anythingSlider(slide);
				return false;
			});
		});
		
		jQuery(function($) {
			$('#externalNav a').click(function(e) {
				e.preventDefault();
				$('a').removeClass('active');
				$(this).addClass('active');
			});
		});
		
		jQuery(function($) {
			Shadowbox.init();
		});
		
		</script>
	</body>
</html>
