<?php

$page = c::get('plugin.content-viewer.widget.page', panel()->site()->index()->findBy('intendedTemplate', 'content-viewer'));

if($page){
	$title = c::get('plugin.content-viewer.widget.title', $page->title());
	$link = c::get('plugin.content-viewer.widget.link', $page->url());
	return array(
		'title' => array(
			'text'	 => $title,
			'link'	 => $link,
			'target' => '_blank',
			'compressed' => true
		),
		'options' => array(
			array(
				'text' => 'Open full page',
				'icon' => 'external-link-square',
				'link' => $link,
				'target' => '_blank',
			)
		),
		'html' => function() {
			return tpl::load(__DIR__ . DS . 'template.php', array(
				'page' => c::get('plugin.content-viewer.widget.page', panel()->site()->index()->findBy('intendedTemplate', 'content-viewer')),
				'field' => c::get('plugin.content-viewer.widget.field', 'text'),
			));
		}
	);
}
else {
	return array(
		'title' => array(
			'text'	 => 'Content Viewer Widget',
			'compressed' => true
		),
		'options' => array(
			array(
				'text' => 'Open README',
				'icon' => 'external-link-square',
				'link' => 'https://github.com/CalebGrove/content-viewer',
				'target' => '_blank',
			)
		),
		'html' => function() {
			return tpl::load(__DIR__ . DS . 'template.php');
		}
	);
}
