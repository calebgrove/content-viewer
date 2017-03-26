<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="robots" content="noindex, nofollow">

	<title><?php echo $page->title()->html() ?></title>

	<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro|Source+Sans+Pro:400,400i,700" rel="stylesheet">
	<?php echo css('assets/plugins/content-viewer/styles.css') ?>
</head>
<body class="content-viewer-global content-viewer-page">
	<article>
		<?php if($user = $site->user() and $user->hasPanelAccess()): ?>
		<h1><?php echo $page->title()->html() ?></h1>
		<?php echo $page->text()->kirbytext() ?>
	<?php else: ?>
		<p>You need to be <a href="/panel">logged in</a> to see this content.</p>
	<?php endif ?>
	</article>
</body>
</html>
