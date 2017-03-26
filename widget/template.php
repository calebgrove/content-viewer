
<?php if($page): ?>
	<?php echo $page->$field()->kirbytext() ?>
<?php else: ?>
	<p>Uh-oh, we can't find the page with the content. Have you created one yet using the <code>Content Viewer Widget</code> template?</p>
<?php endif ?>
</article>
echo css('assets/plugins/content-viewer/styles.css')
