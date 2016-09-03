# Content Viewer Kirby Widget

A nifty little Kirby widget plugin that allows you to show a block of Kirbytext or Markdown content in Kirby's panel. It is particularly useful for providing documentation for the website editors.

![Screenshot of the widget](screenshot.png)

## Installation and Setup

Clone or [download](https://github.com/CalebGrove/content-viewer/archive/master.zip) this repo, rename the folder to `content-viewer`, and move it into your `/site/plugins/` folder. If you are using the [Kirby CLI](https://github.com/getkirby/cli), you can install it with this command:

	kirby plugin:install CalebGrove/content-viewer

Create a new page anywhere on your website using the `Content Viewer Widget Source` blueprint. The title of the page will be used as the widget title, and the content will be used for the widget content.

## Advanced Configuration

If you don't like how things are set up, you can customize the configuration.

	c::set('plugin.content-viewer.widget.page', page());
A page object that will be used for the content viewer. Accepted value: Any single page object. Default: `panel()->site()->index()->findBy('intendedTemplate', 'content-viewer-source')`


	c::set('plugin.content-viewer.widget.field', 'fieldname');
The field name (from the page, see above) that will be used for the content viewer. Accepted value: Any text field name from the page. Default: `text`

	c::set('plugin.content-viewer.widget.title', 'Widget Title');
The widget title that will be displayed in the panel. Accepted value: Any string. Default: `$page->title()`
