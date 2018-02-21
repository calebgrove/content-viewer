<?php

$page = panel()->site()->index()->findBy('intendedTemplate', 'content-viewer');
$field = 'text';
$user = panel()->user();

if($page->$field()->isNotEmpty()){
	$title = $page->title();
	$link = $page->url();


	$options = array(
		array(
			'text' => 'Open full page',
			'icon' => 'external-link-square',
			'link' => $link,
			'target' => '_blank',
		)
	);

	if($user = $user->isAdmin()){
		array_unshift(
			$options,
			array(
				'text' => 'Edit',
				'icon' => 'pencil',
				'link' => $page->url('edit'),
			)
		);
	}


	return array(
		'title' => array(
			'text'	 => $title,
			'link'	 => $link,
			'target' => '_blank',
			'compressed' => true
		),
		'options' => $options,
		'html' => function() {
			return tpl::load(__DIR__ . DS . 'template.php');
		}
	);
}
else {
	$options = array(
		array(
			'text' => 'Open README',
			'icon' => 'external-link-square',
			'link' => 'https://github.com/CalebGrove/content-viewer',
			'target' => '_blank',
		)
	);

	if($user = $user->isAdmin()){
		array_unshift(
			$options,
			array(
				'text' => 'Edit',
				'icon' => 'pencil',
				'link' => $page->url('edit'),
			)
		);
	}
	return array(
		'title' => array(
			'text'	 => 'Content viewer',
			'compressed' => true
		),
		'options' => $options,
		'html' => function() {
			return tpl::load(__DIR__ . DS . 'template.php');
		}
	);
}
