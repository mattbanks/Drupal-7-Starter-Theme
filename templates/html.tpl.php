<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	
	<?php print $head; ?>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<link rel="shortcut icon" href="<?php print $directory; ?>/favicon.ico">
	<link rel="apple-touch-icon" href="<?php print $directory; ?>/apple-touch-icon.png">
	
	<title><?php print $head_title; ?></title>
	<?php print $styles; ?>
	<?php print $scripts; ?>
	
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
	
	<div id="skip-link">
		<a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
	</div>

	<?php print $page_top; ?>
	<?php print $page; ?>
	<?php print $page_bottom; ?>
	
	<!--[if lt IE 7 ]>
		<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->

</body>
</html>
