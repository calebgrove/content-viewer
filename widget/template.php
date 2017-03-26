<?php
$page = panel()->site()->index()->findBy('intendedTemplate', 'content-viewer');
$field = 'text';

echo css('assets/plugins/content-viewer/styles.css')
?>


<div class="content-viewer-global content-viewer-widget">
	<article>
	<?php if($page->$field()->isNotEmpty()): ?>
		<?php echo $page->$field()->kirbytext() ?>


	<?php elseif(c::get('plugin.content-viewer.widget.page') || c::get('plugin.content-viewer.widget.field') || c::get('plugin.content-viewer.widget.title')): ?>
		<p>The configuration options for this widget were removed in v1.2.0. Don't worry, none of your data has been deleted! Here are the configs you were using, and their workarounds:</p>
		<ul>
		<?php if(c::get('plugin.content-viewer.widget.page')): ?>
			<li><code>plugin.content-viewer.widget.page</code>: Copy all of your content from your <strong><?= c::get('plugin.content-viewer.widget.page') ?></strong> page. Click on the new <strong>Edit</strong> button above, and paste it on that page. Then, remove that line from your config file.</li>
		<?php endif ?>
		<?php if(c::get('plugin.content-viewer.widget.field')):?>
			<li><code>plugin.content-viewer.widget.field</code>: This is now hardcoded to <code>text</code>. Using a text editor, navigate to the page you are using to store the data for this widget, and rename your <code><?= c::get('plugin.content-viewer.widget.field') ?></code> field to <code>text</code>. Then, remove that line from your config file!</li>
		<?php endif ?>
		<?php if(c::get('plugin.content-viewer.widget.title')): ?>
			<li><code>plugin.content-viewer.widget.title</code>: This is now hardcoded to the title of the page that this widget is using. Simply copy <code><?= c::get('plugin.content-viewer.widget.title') ?></code> to your clipboard, click on the <strong>Edit</strong> button above, and paste it into the <strong>Title</strong> field. Finally, remove that line from your config file!</li>
		<?php endif ?>
		</ul>
		<p>I'm sorry for the inconvenience, and if you want one of these configs back, <a href="https://github.com/CalebGrove/content-viewer/issues/new">let me know!</a></p>


	<?php else: ?>
		<p>Welcome! Click on the <strong>Edit</strong> button to edit the content of this widget. If you don't see that button, please contact the website administrator.</p>
	<?php endif ?>
	</article>
</div>
