		</div> <!-- Main -->
	</div>  <!-- Main Content -->
		<div class="menu">
				<div class="menu_content">
				<header class="header clear" role="banner">
					
						<!-- logo -->
						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
							</a>
						</div>
						<!-- /logo -->

						<!-- nav -->
						<nav class="nav" role="navigation">
							<?php html5blank_nav(); ?>
						</nav>
						<!-- /nav -->
						
				</header>
				
					<div id="externalNav">
						
						<?php $x = 0 ?>
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
							<?php $x++ ?>
							
						<a href="#" data-slide="<?php echo $x ?>"><?php echo $post->post_name?></a>
						<?php endwhile; ?>

						<?php else: ?>
						
						<!-- article -->
						<article>
						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
						</article>
						<!-- /article -->

						<?php endif; ?>
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
				buildNavigation			: false
			});
		});
		
		jQuery(function($) {
			$('.interior_slider').anythingSlider({	
				mode                : "horizontal",
				expand				: true,
				buildStartStop      : false,
				buildArrows			: true,
				buildNavigation			: false
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
		</script>
	</body>
</html>
