<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="robots" content="index, follow" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="google-site-verification" content="3ebPkgj9vrzCZbR3OA-VrCvJmoUmn_SHAbpo3nHn_0U" />
		<?php echo $page->metaTags() ?>
		<link rel="shortcut icon" href="/favicon.ico" />
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="/assets/images/apple-touch-icon-57x57-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/images/apple-touch-icon-72x72-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="/assets/images/apple-touch-icon-76x76-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/images/apple-touch-icon-114x114-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="/assets/images/apple-touch-icon-120x120-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/images/apple-touch-icon-144x144-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="/assets/images/apple-touch-icon-152x152-precomposed.png" />
		<link rel="apple-touch-icon-precomposed" sizes="180x180" href="/assets/images/apple-touch-icon-180x180-precomposed.png" />
		<link rel="icon" type="image/png" sizes="192x192" href="/assets/images/android-touch-icon-192x192.png">
		<meta name="msapplication-TileImage" content="/assets/images/msapplication-tileimage-144x144.png" />
		<meta name="msapplication-TileColor" content="#009900" />
		<?php echo css('assets/styles/styles.css') ?>
	</head>

	<body>
		<header>
			<h1><a href="/" title="Back to the home page."><?php echo html($site->title()) ?></a></h1>
			<p><?php echo html($site->description()) ?></p>
		</header>
