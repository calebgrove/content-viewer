<?php
$kirby->set('widget', 'widget', __DIR__ . '/widget');
$kirby->set('blueprint', 'content-viewer', __DIR__ . '/blueprints/content-viewer.yml');
$kirby->set('template', 'content-viewer', __DIR__ . '/templates/content-viewer.php');



// If the page doesn't exist yet, create it.
if(!site()->findBy('intendedTemplate', 'content-viewer')) {
	site()->create('content-viewer', 'content-viewer', array(
		'title' => '',
		'text' => ''
	));
}
?>
