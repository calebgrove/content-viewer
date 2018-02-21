<?php
$kirby->set('widget', 'content-viewer', __DIR__ . '/widget');
$kirby->set('blueprint', 'content-viewer', __DIR__ . '/blueprints/content-viewer.yml');
$kirby->set('template', 'content-viewer', __DIR__ . '/templates/content-viewer.php');



// If the page doesn't exist yet, create it.
if(!site()->pages()->findBy('intendedTemplate', 'content-viewer')) {
	site()->pages()->create('content-viewer', 'content-viewer', array(
		'title' => '',
		'text' => ''
	));
}
?>
