<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta name="google-site-verification" content="eC8IprBiKGVVYLsb9tTBtfcIrY7xKmJNWDJZWBSRQmE" />
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/images/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/images/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<!--<script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD" data-sdk-integration-source="button-factory"></script>-->
		<script src="https://www.paypal.com/sdk/js?client-id=AY8hS778F2utYNwR5yVu1ozkxMWD9ooxBPFt7L_1zXiiYE7Ooof250bRNa4h6-Mun5whjrn3M4sdfSWw&currency=USD" data-sdk-integration-source="button-factory"></script>

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
		<div class="wrapper">
			<div class="container">

			<!-- header -->
			<header class="header clear row py-4 py-md-5" role="banner">
				<div class="col-12">
					<!-- logo -->
					<div class="logo d-flex align-content-center justify-content-center float-none float-md-left">
						<a class="d-inline-block my-auto d-flex mr-1" href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<h2 class="text-uppercase m-0 p-0">Buddy</h2>
							<!--<img src="<?php /*echo get_template_directory_uri(); */?>/images/logo.jpg" alt="Logo" class="logo-img w-auto m-auto">-->
						</a>
						<a class="d-inline-block my-auto d-flex black" href="<?php echo home_url(); ?>">
							<h3 class="m-0 p-0">system challenge</h3>
						</a>
					</div>
					<!-- /logo -->
				</div>

			</header>
			<!-- /header -->

			</div>
