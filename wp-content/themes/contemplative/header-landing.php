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

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper background">
			<img class="background__image" src="<?php echo get_stylesheet_directory_uri(); ?>/img/tree2.png" />

			<!-- header -->
			<header class="header clear header--transparent" role="banner">
					<!-- logo -->
					<div class="logo">
						<!-- <a href="<?php echo home_url(); ?>"> -->
						<a href="<?php echo get_permalink( get_page_by_path( 'home' ) )?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<h1 class="blogtitle"><?php echo get_bloginfo('name'); ?></h1>
						</a>
					</div>
					<!-- /logo -->

			</header>
			<!-- /header -->
		
</body>
