<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
		
		<script src="<?php echo get_template_directory_uri(); ?>/js/shadowbox.js"></script>
		
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.anythingslider.min.js"></script>
		
	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper" style="background-image:url('<?php echo get_template_directory_uri(); ?>/img/scan_lines.png')">
			<div class="video_wrapper">
				<video id="video1" loop autoplay    preload="auto" poster="<?php echo get_template_directory_uri(); ?>/img/loop.jpg">
				<source src="<?php echo get_template_directory_uri(); ?>/img/loop.mp4" type="video/mp4" />
				<source src="<?php echo get_template_directory_uri(); ?>/img/loop.webm" type="video/webm" />
				<source src="<?php echo get_template_directory_uri(); ?>/img/loop.ogv" type="video/ogg" />
			</video>
			</div>
			<!-- header -->
			
			<!-- /header -->
		<div class="main">
			<div class="main_content">
				