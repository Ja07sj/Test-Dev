			<!-- footer -->
			
			<!-- /footer -->
				</div> <!-- Category slider -->
			</div>  <!-- /main_content -->
		</div>  <!-- /main -->
		
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
						<a href="#" data-slide="1">1</a>
						<a href="#" data-slide="2">2</a>
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
				buildStartStop      : false,		 
			})
		});
		
		jQuery(function($) {
			$('.interior_slider').anythingSlider({	
				mode                : "horizontal",	
				buildStartStop      : false,
				
			})	
		});

		jQuery(function($) {
			$('.next-slide').click(function(){
				$('.interior_slider').data('AnythingSlider').goForward(); 
			});
		});
		
		jQuery(function($) {
			$('.prev-slide').click(function(){
				$('.interior_slider').data('AnythingSlider').goBack(); 
			});
		});
		
		</script>
	</body>
</html>
