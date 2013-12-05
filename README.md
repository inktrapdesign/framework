# Inktrap framework
The mobile-first CSS framework and grid system we use to build responsive websites at [Inktrap](http://inktrap.co.uk). Built and maintained by [Sam Lester](http://twitter.com/samlester), inspired by the work of [Andy Green](http://twitter.com/andygrn) on the [Ten4 Framework](https://github.com/ten4design/ten4-framework).

The aim of the Inktrap framework is to be a lightweight and flexible basis for building mobile first websites. It's specifically designed for small to mid-size websites, any larger than that and you'll need to start breaking the styles up into smaller files and you might be better off with something like [inuit.css](https://github.com/csswizardry/inuit.css).

Unlike previous versions 2.0 uses SASS extensively to power a more flexible grid system, a more intuitive way of working with media queries and variables for consistent colours and sizing.

## Overview
- SASS-based
	- SCSS syntax
	- [Bourbon](http://bourbon.io) for helpful browser prefix mixins
	- Custom mixins for media queries using [this technique](http://thesassway.com/intermediate/responsive-web-design-in-sass-using-media-queries-in-sass-32)
	- One declaration per line structure (makes it easier to scan)
- Mobile first approach
- Minimal default styling
- Customisable grids for different breakpoints
- Classes rather than IDs ([see this article](http://csswizardry.com/2011/09/when-using-ids-can-be-a-pain-in-the-class/))
- Polyfills for IE8 (Selectivizr and Respond.js)
- HTML browser classes (as in [HTML5 boilerplate](http://html5boilerplate.com/))
- [ARIA roles](http://www.w3.org/TR/wai-aria/roles)

## Grid system
- Fully customisable grids via SASS variables. Defaults are:
	- Small (below 700px, 4 columns)
	- Medium (700px to 990px, 6 columns)
	- Large (990px and up, 12 columns)
- Full width container (`.container`)
- Rows to separate sets of items (`.row`)
- Grid items named according to size followed by width (e.g. `m4`)
- Multiple sizes per item for different breakpoints (e.g. `s4`, `m4` and `l8`)