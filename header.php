<? if(is_page('20')) {
    wp_redirect('https://dow-smith.com');
    exit();
} ?>
<!DOCTYPE html>
<!--[if IE 8]><html class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><? bloginfo('title'); ?><? if(!post_password_required()){ ?><? wp_title('&mdash;'); ?><? } ?></title>
	<meta name="description" content="<? bloginfo('description'); ?>">
	<meta name="viewport" content="width=device-width">

	<meta property="og:title" content="">
	<meta name="twitter:title" content="">
	<meta property="og:type" content="website">
	<meta name="twitter:card" content="summary_large_image">
	<meta property="og:url" content="">
	<meta name="twitter:description" content="">
	<meta property="og:description" content="">
	<meta name="twitter:image" content="">
	<meta property="og:image" content="">
	
	<link rel="icon" type="image/png" href="<? bloginfo('template_directory'); ?>/assets/img/favicon.png">
	<link rel="stylesheet" href="<? bloginfo('template_directory'); ?>/assets/css/style.css">
	<script src="<? bloginfo('template_directory'); ?>/assets/js/vendor/vendor.js"></script>
	<script src="<? bloginfo('template_directory'); ?>/assets/js/scripts.js"></script>
	
</head>
<body class="at-top <? if(is_front_page()){echo 'home';} if(is_archive()){echo 'archive';} if(is_single()){echo 'single';} ?>">

<?php get_template_part('partials/site', 'navigation'); ?>