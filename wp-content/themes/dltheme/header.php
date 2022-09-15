<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/scripts/fonts/remixicon.woff2" as="font" crossorigin>
	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/scripts/fonts/Roboto-Bold.ttf" as="font" crossorigin>
	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/scripts/fonts/Roboto-Regular.ttf" as="font" crossorigin>
	<link rel="preload" href="<?php echo get_template_directory_uri(); ?>/scripts/fonts/Roboto-Medium.ttf" as="font" crossorigin>
	<meta name="robots" content="noindex">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
	<!-- <script src="https://kit.fontawesome.com/990ba33bd4.js" crossorigin="anonymous"></script> -->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<?php 
	$phoneVisible = get_field('phone_number', 'option');
	$phone = preg_replace("/[^0-9]/", "", $phoneVisible);
	$email = get_field('email', 'option');
	$workingHours = get_field('workingHours', 'option');
	$address = get_field('address', 'option');
	
?>

<div class="resp_menu trans-no-all">
	<div class="resp_menu_toggle">
		<div></div>
		<div></div>
		<div></div>
		<div></div>
	</div>
	<div class="resp_menu_ul"></div>
</div>

<div class="mobile_fixed_button">
	<a href="tel:<?php echo $phone ?>">Call Us</a>
</div>

<header class="trans-all-4 site_header">
	<div class="container">
		<div class="header_wrap">
            <div class="header_top">
                <div class="header_top_left">
                    <ul>
                        <li>
                            <a href="tel:<?php echo $phone ?>">
                                <i class="ri-phone-fill"></i>
                                <span>Phone: <?php echo $phoneVisible ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:<?php echo $email ?>">
                                <i class="ri-mail-fill"></i>
                                <span>Email: <?php echo $email ?></span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="no_link">
                                <i class="ri-time-fill"></i>
                                <span>Hours: <?php echo $workingHours ?></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="header_top_right">
                    <ul>
                        <li>
                            <a href="#">Reviews</a>
                        </li>
                        <li>
                            <a href="#">Pricing</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="header_bottom">
                <div class="logo">
                    <a href="/">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo">
                    </a>
                </div>
                <div class="header_menu">
                    <nav class="navigation">
                        <ul class="">
                            <li>
                                <a href="">About Us</a>
                            </li>
                            <li>
                                <a href="">Blog</a>
                            </li>
                            <li>
                                <a href="">Locksmith Services</a>
                            </li>
                            <li>
                                <a href="">Contacts</a>
                            </li>

                        </ul>
                    </nav>
                </div>
                <div class="header_button">
                    <div class="theme_button oblique_both">
                        <a href="tel:<?php echo $phone ?>">
                            <i class="ri-phone-fill"></i>
                            <span>Call now <br> <?php echo $phoneVisible ?></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
	</div>
</header>