<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

<!-- dns prefetch -->
<link href="//www.google-analytics.com" rel="dns-prefetch">

<!-- meta -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>">
	
<?php wp_head(); ?>
<script>
!function(){
	// configure legacy, retina, touch requirements @ conditionizr.com
	conditionizr()
}()
</script>
</head>
<body <?php body_class(); ?>>

<header>
	<div class="clearfix">
		<div class="logo left">
			<span data-picture data-alt="Meineke">
			<span data-src="<?php echo get_template_directory_uri(); ?>/img/logo/small.jpg"></span>
			<span data-src="<?php echo get_template_directory_uri(); ?>/img/logo/med.jpg" data-media="(max-width: 1101px)"></span>
			<span data-src="<?php echo get_template_directory_uri(); ?>/img/logo/med.jpg" data-media="(min-width: 1101px)"></span>
			<span data-src="<?php echo get_template_directory_uri(); ?>/img/logo/large.jpg" data-media="(min-width: 1280px)"></span>
			<span data-src="<?php echo get_template_directory_uri(); ?>/img/logo/xlarge.jpg" data-media="(min-width: 1380px)"></span>
			<span data-src="<?php echo get_template_directory_uri(); ?>/img/logo/extralarge.jpg" data-media="(min-width: 1920px)"></span>
		</span>
		</div>
		<div class="mobile-header">
            <a href="#" class="mobile-nav-button"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-mobile-menu.png" alt="" width="40" height="28" /></a>
            <a href="#" class="mobile-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo/mobile.jpg" alt="" /></a>
        </div>
		<div class="wrap">
		<div class="header-info right">
			<p class="red">My Store: Arrowhead, AZ</p>
			<p>8880 W Bell Rd.  Peoria, AZ 85382</p>
			<p><strong>(623) 974-4172</strong></p>
		</div>
		<div class="clearfix"></div><!-- Clearfix -->
		<nav class="left main-nav">
			<ul>
				<li><a href="index.php" class="active">Home</a></li>
				<li><a href="services.php">Auto Services</a></li>
				<li><a href="coupons.php">Coupons</a></li>
				<li><a href="locations.php">Change Location</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
		</nav>
		<nav class="mobile-nav">
			<ul>
				<li><a href="index.php" class="active">Home</a></li>
				<li><a href="services.php">Auto Services</a></li>
				<li><a href="coupons.php">Coupons</a></li>
				<li><a href="locations.php">Change Location</a></li>
				<li><a href="contact.php">Contact Us</a></li>
			</ul>
		</nav>
		<div class="header-btns right">
			<a href="#">Schedule an Appointment</a> <a href="#">Find a Store</a>			
		</div>
		</div>
	</div>
</header><!-- End of Header -->