<!DOCTYPE html>
<html>
	<head>
		<title><?php bloginfo('name'); ?></title>
		<meta charset="UTF-8">
		<meta name="author" content="Марсель" />
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="keywords" content="Марсель" />
		<!--<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/favicon.ico" type="image/x-icon">-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?php echo get_template_directory_uri();?>/css/jquery.qtip.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri();?>/css/magnific-popup.css" rel="stylesheet" type="text/css">	
		<link href="<?php echo get_template_directory_uri();?>/css/swiper.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri();?>/style.css" rel="stylesheet" type="text/css">		
		<?php wp_head(); ?>
	</head>
	<body>
<?php global $settings; ?>