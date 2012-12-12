# Drupal 7 Starter Theme

Version: 2.5.1

## Contributors:

Matt Banks ( [@mattbanks](http://twitter.com/mattbanks) / [kernelcreativemedia.com](http://www.kernelcreativemedia.com) / [mattbanks.me](http://www.mattbanks.me) )

## Summary

Drupal 7 Starter Theme for use as a starting template for building custom themes. Uses Compass/SCSS, HTML5 Boilerplate 4 with Modernizr and Normalize.css.

## Usage

Rename folder to your theme name, rename .info file, edit settings, and begin development.

I use [CodeKit](http://incident57.com/codekit/) for Compass/SCSS compiling, but feel free to use whatever app or command line tool you prefer. [LiveReload](http://livereload.com/) and [Grunt](http://gruntjs.com/) are also great tools for compiling SCSS.

- Compile `scss/style.scss` to `style.css` (defined in config.rb for Compass)
- Compile `js/plugins.js` to `js/plugins.min.js`
- Compile `js/main.js` to `js/main.min.js`
- ??
- Profit

### Features

1. Normalized stylesheet for cross-browser compatibility using Normalize.css version 2 (IE8+ only)
2. Easy to customize
3. Flexible grid from [Chris Coyier](https://twitter.com/chriscoyier)
4. Media Queries for mobile and tablets ready to populate
5. Compass & SCSS with plenty of mixins ready to go
6. Much much more

### Suggested Modules

* [Chaos Tools](http://drupal.org/project/ctools)
* [CKEditor](http://drupal.org/project/ckeditor)
* [Google Analytics](http://drupal.org/project/google_analytics)
* [IMCE](http://drupal.org/project/imce)
* [jQuery Update](http://drupal.org/project/jquery_update)
* [Meta Tags](http://drupal.org/project/metatag)
* [Pathauto](http://drupal.org/project/pathauto)
* [Token](http://drupal.org/project/token)
* [Transliteration](http://drupal.org/project/transliteration)
* [Views](http://drupal.org/project/views)
* [Webform](http://drupal.org/project/webform)
* [XML Sitemap](http://drupal.org/project/xmlsitemap)

### Changelog

#### Version 2.5.1

* Add grid column sizes I typically use, general code cleanup

#### Version 2.5

* Renamed jquery.functions.js to main.js
* Renamed _widgets.scss to _blocks.scss
* Add flexible grid SCSS
* Updated to HTML5 Boilerplate 4
* Updated to Normalize.css 2
* Updated to Modernizr 2.6.2
* Include @media bubbling mixins, [via Chris Coyier](http://css-tricks.com/snippets/css/media-queries-for-standard-devices/)
* Add GPL license info to style.scss
* Add border-box support for everything, including pseudo elements, because it makes the world a better place
* Other bug fixes and changes

#### Version 2.0

* added Compass and SCSS as preprocessor files
* upgraded modernizr to 2.5.2
* renamed script.js to jquery.functions.js
* theme .info file points to minified versions of plugins.js and jquery.functions.js
* tweak html.tpl.php using latest HTML5 Boilerplate
* use aside instead of div for sidebars in page.tpl.php

#### Version 1.0

* initial version

### Credits

Without these projects, this WordPress Starter Theme wouldn't be where it is today.

* [HTML5 Boilerplate](http://html5boilerplate.com)
* [Normalize.css](http://necolas.github.com/normalize.css)
* [SASS / SCSS](http://sass-lang.com/)
* [Compass](http://compass-style.org)
