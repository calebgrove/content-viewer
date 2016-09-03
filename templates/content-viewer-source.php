<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<title><?php echo $page->title()->html() ?></title>

	<style>
		article.content-viewer-widget {
			overflow: scroll;
			max-height: 30em;
			background-color: #efefef;
			border: 2px solid #ddd;
			padding: 1em;
		}
		.content-viewer-widget h1 {
			font-size: 1.5em;
		}
		.content-viewer-widget h2 {
			font-size: 1.3em;
		}
		.content-viewer-widget h3 {
			font-size: 1.2em;
		}
		.content-viewer-widget h4 {
			font-size: 1em;
		}
		.content-viewer-widget h5 {
			font-size: 0.9em;
			text-transform: uppercase;
		}
		.content-viewer-widget h6 {
			font-size: 0.7em;
			text-transform: uppercase;
		}
		.content-viewer-widget p {
			margin: 1em 0;
		}
		.content-viewer-widget hr {
			margin: 1em 0;
		}
		.content-viewer-widget ol, .content-viewer-widget ul {
			margin-top: 1em;
			margin-bottom: 1em;
			margin-left: 2em;
			list-style-position: inside;
		}
		.content-viewer-widget a {
			text-decoration: underline;
		}
		.content-viewer-widget a:hover {
			text-decoration: none;
		}
		.content-viewer-widget blockquote {
			margin: 1em 0;
			border-left: 3nukpx solid #dddddd;
			padding-left: 0.5em;
			font-style: italic;
		}
		.content-viewer-widget code {
			background-color: #fff;
			padding: .15em .25em;
			border: 1px solid #E4E4E4;
			border-radius: 0.2em;
			font-family: monospace;
		}
		.content-viewer-widget pre {
			background-color: #fff;
			padding: .25em .5em;
			border: 1px solid #E4E4E4;
			border-radius: 0.2em;
			font-family: monospace;
		}
		.content-viewer-widget pre code {
			background-color: none;
			padding: 0;
			border: none;
			border-radius: 0;
		}
		.content-viewer-widget > :first-child {
			margin-top: 0;
		}
		.content-viewer-widget > :last-child {
			margin-bottom: 0;
		}
	</style>
</head>
<body>
	<article class=".content-viewer-widget">
		<h1><?php echo $page->title()->html() ?></h1>
	</article>
</body>
</html>
