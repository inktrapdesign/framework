# Inktrap framework
The mobile-first framework and grid system we use to build websites at [Inktrap](http://inktrap.co.uk).

Created by [Sam Lester](http://twitter.com/samlester) and inspired by the work of [Andy Green](http://twitter.com/andygrn) on the [Ten4 Framework](https://github.com/ten4design/ten4-framework).

## Overview
- Mobile first approach
- Three grids: small (below 600px, 4 columns), medium (600px to 990px, 6 columns) and large (990px and up, 12 columns)
- Classes rather than IDs ([see this article](http://csswizardry.com/2011/09/when-using-ids-can-be-a-pain-in-the-class/))
- Support for IE8 and up with Selectivizr and Respond.js

## Grid system
- Full width container (`.container`)
- Rows to separate sets of items (`.row`)
- Grid items named according to size followed by width (e.g. `m4`)
- Multiple sizes per item (e.g. `s4 m2 l3`)