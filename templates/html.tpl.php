<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<?php print $head; ?>
	<title><?php print $head_title; ?></title>
	<link rel="shortcut icon" href="<?php print $directory; ?>/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php print $directory; ?>/assets/images/apple-touch-icon.png">
	<?php print $styles; ?>
	<?php print $scripts; ?>
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
	<!--[if lt IE 8]>
	    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->

	<div id="skip-link">
		<a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
	</div>

	<?php print $page_top; ?>
	<?php print $page; ?>
	<?php print $page_bottom; ?>

</body>
</html>
