<?php require('includes/header.php'); ?>

<div class="container page-header">
	<div class="row">
		<div class="s4 m6 l12 pad">
			<h1 class="page-title">Inktrap framework</h1>
		</div>
	</div>
</div>

<div class="container main" role="main">
	<div class="row">
		<section class="s4 m4 l8 pad wysiwyg">
			<h1>Inktrap framework</h1>

			<p>The mobile-first CSS framework and grid system we use to build responsive websites at <a href="http://inktrap.co.uk">Inktrap</a>. Built and maintained by <a href="http://twitter.com/samlester">Sam Lester</a>, inspired by the work of <a href="http://twitter.com/andygrn">Andy Green</a> on the <a href="https://github.com/ten4design/ten4-framework">Ten4 Framework</a>.</p>

			<p>The aim of the Inktrap framework is to be a lightweight and flexible basis for building mobile first websites. It's specifically designed for small to mid-size websites, any larger than that and you'll need to start breaking the styles up into smaller files and you might be better off with something like <a href="https://github.com/csswizardry/inuit.css">inuit.css</a>.</p>

			<p>Unlike previous versions 2.0 uses SASS extensively to power a more flexible grid system, a more intuitive way of working with media queries and variables for consistent colours and sizing.</p>

			<h2>Overview</h2>

			<ul>
			<li>SASS-based
			<ul><li>SCSS syntax</li>
			<li><a href="http://bourbon.io">Bourbon</a> for helpful browser prefix mixins</li>
			<li>Custom mixins for media queries using <a href="http://thesassway.com/intermediate/responsive-web-design-in-sass-using-media-queries-in-sass-32">this technique</a></li>
			<li>One declaration per line structure (makes it easier to scan)</li></ul></li>
			<li>Mobile first approach</li>
			<li>Minimal default styling</li>
			<li>Customisable grids for different breakpoints</li>
			<li>Classes rather than IDs (<a href="http://csswizardry.com/2011/09/when-using-ids-can-be-a-pain-in-the-class/">see this article</a>)</li>
			<li>Polyfills for IE8 (Selectivizr and Respond.js)</li>
			<li>HTML browser classes (as in <a href="http://html5boilerplate.com/">HTML5 boilerplate</a>)</li>
			<li><a href="http://www.w3.org/TR/wai-aria/roles">ARIA roles</a></li>
			</ul>

			<h2>Grid system</h2>

			<ul>
			<li>Fully customisable grids via SASS variables. Defaults are:
			<ul><li>Small (below 700px, 4 columns)</li>
			<li>Medium (700px to 990px, 6 columns)</li>
			<li>Large (990px and up, 12 columns)</li></ul></li>
			<li>Full width container (<code>.container</code>)</li>
			<li>Rows to separate sets of items (<code>.row</code>)</li>
			<li>Grid items named according to size followed by width (e.g. <code>m4</code>)</li>
			<li>Multiple sizes per item for different breakpoints (e.g. <code>s4</code>, <code>m4</code> and <code>l8</code>)</li>
			</ul>
		</section>

		<div class="s4 m2 l4 pad sidebar">
			<aside class="item">
				<p>Text.</p>
			</aside>
		</div>
	</div>
</div>

<?php require('includes/footer.php'); ?>