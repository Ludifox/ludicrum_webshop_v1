<?php
	global $woo_options;
	global $woocommerce;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		
		<!-- FAVICON AND MOBILE ICONS -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" />
		<link rel="apple-touch-icon" href="/apple-touch-icon.png" />
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-57x57.png" />
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-72x72.png" />
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-76x76.png" />
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-114x114.png" />
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-120x120.png" />
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-144x144.png" />
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-152x152.png" />
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/icons/apple-touch-icon-180x180.png" />

		<?php
			wp_head();
		?>
	</head>
	<body <?php body_class(); ?>>
		<div id="everything-ludicrum" class="container-fluid">
			<div class="row">
				<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 col-lg-push-10 col-md-push-9 col-md-push-8" id="sidetrack">
					<ul class="nav nav-tabs" role="tablist">
					    <li role="presentation" class="active"><a href="#cart" aria-controls="cart" role="tab" data-toggle="tab">Cart</a></li>
					    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
					  </ul>

					  <!-- Tab panes -->
					  <div class="tab-content">
					    <div role="tabpanel" class="tab-pane active" id="cart">
					    	<p>Products and such...
					    </div>
					    <div role="tabpanel" class="tab-pane" id="profile">
							<p>Your profile</p>
					    </div>
					  </div>

					</div>
				</div>
				<div class="col-lg-10 col-md-9 col-sm-8-col-xs-12 col-lg-pull-2 col-md-pull-3 col-sm-pull-4" id="main">
					<header id="brandarea" class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 hidden-xs" id="logo">
							<img src="<?php echo get_template_directory_uri(); ?>/img/ludicrum_logo_optimised.svg" alt="<?php echo get_bloginfo( 'name' ); ?>" />
						</div><!-- /#logo -->
						<div class="col-lg-4 col-md-4 col-sm-4 hidden-xs" id="contact">
							<div class="row" id="freight-advert">
								<h2><?php echo __("Shipping: Always $5","ludicrum"); ?></h2>
							</div>
							<div class="row" id="contact-information">
								<p>hq@ludicrum.no / (+47) 412 95 783</p>
							</div>
						</div><!-- /#contact -->
						<nav class="col-lg-4 col-md-4 col-sm-4 hidden-xs" id="menu">
							<?php get_search_form(); ?>
							<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
						</nav><!-- /#menu -->
					</header>
					


					
