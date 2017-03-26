
<?php if($page): ?>
	<?php echo $page->$field()->kirbytext() ?>
<?php else: ?>
	<p>Uh-oh, we can't find the page with the content. Have you created one yet using the <code>Content Viewer Widget</code> template?</p>
<?php endif ?>
</article>
echo css('assets/plugins/content-viewer/styles.css')
	<?php else: ?>
		<p>Welcome! Click on the <strong>Edit</strong> button to edit the content of this widget. If you don't see that button, please contact the website administrator.</p>
	<?php endif ?>
