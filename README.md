# WordPress Transifex Workflow

The WordPress Transifex Workflow serves as a foundation and aims to provide a clear and consistent guide for integrating a GitHub project into Transifex. And so create a perfect workflow for WordPress project internationalization.

## Credits

The Tx Workflow Plugin is fully-based on the work of Tom McFarlin and is WordPress Plugin Boilerplate (https://github.com/tommcfarlin/WordPress-Plugin-Boilerplate)

and the work of Remi Corson and is Sweet Custom Dashboard plugin (http://www.remicorson.com/sweet-custom-dashboard/)

Hundreds of thanks to both of you.

## Features

* The Tx Workflow is fully-based on the WordPress [Plugin API](http://codex.wordpress.org/Plugin_API).
* Uses [PHPDoc](http://en.wikipedia.org/wiki/PHPDoc) conventions to document the code.
* Example values are given, so you can see what needs to be changed.
* Uses a strict file organization scheme to make sure the assets are easily maintainable.

## Contents

The WordPress Transifex Workflow includes the following files:

* This README, a ChangeLog, and a `gitignore` file.

## Installation

1. Copy the `tx-workflow` directory into your `wp-content/plugins` directory
2. Navigate to the *Plugins* dashboard page
3. Locate the menu item that reads *TX Workflow*
4. Click on *Activate*

This will activate the WordPress Tx Workflow. Because the plugin has no real functionality, nothing will be added to WordPress; however, this demonstrates exactly how your plugin should behave while you're working with it.

Only a new menu item will be added to the *Plugins* menu.

## License

The WordPress Tx Workflow is licensed under the GPL v2 or later.

> This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

> This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

> You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

## Important Notes

### Licensing

The WordPress Tx Workflow is licensed under the GPL v2 or later; however, if you opt to use third-party code that is not compatible with v2, then you may need to switch to using code that is GPL v3 compatible.

For reference, [here's a discussion](http://make.wordpress.org/themes/2013/03/04/licensing-note-apache-and-gpl/) that covers the Apache 2.0 License used by [Bootstrap](http://twitter.github.io/bootstrap/).

## Assets

The assets directory provides two files that are used to represent plugin header images.

You'll need to add an `assets` directory into the root of the repository. So the final directory structure should include *four* directories:

1. `assets`
2. `branches`
3. `tags`
4. `trunk`

Next, copy the contents of the `assets` directory that are bundled with the Boilerplate into the root of the repository. This is how the WordPress Plugin Repository will retrievie the plugin header image.

Of course, you'll want to customize the header images from the place holders that are provided with the Boilerplate.

For more, in-depth information about this, read [this post](http://make.wordpress.org/plugins/2012/09/13/last-december-we-added-header-images-to-the/) by [Otto](https://twitter.com/Otto42).

Plugin screenshots can be saved to one of two locations:

* The traditional location is to keep them in the root of the plugin directory. This will increase the size of the download of the plugin, but make the images accessible for those who install it.
* Alternatively, you can save the screenshots in the `assets` directory, as well. The repository will look here for the screenshot files as well; however, they will not be included in the plugin download thus reducing the size of the plugin.