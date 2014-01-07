# Drupal 7 Starter Theme

Version: 3.2.0

## Contributors:

Matt Banks ( [@mattbanks](http://twitter.com/mattbanks) / [kernelcreativemedia.com](http://www.kernelcreativemedia.com) / [mattbanks.me](http://www.mattbanks.me) )

## Summary

Drupal 7 Starter Theme for use as a starting template for building custom themes. Uses Compass/SCSS, HTML5 Boilerplate 4 with Modernizr and Normalize.css, and Grunt for all tasks.

## Usage

The theme is setup to use [Grunt](http://gruntjs.com/) to compile Compass/SCSS, lint, concatenate and minify JavaScript (with source maps), optimize images, and [LiveReload](http://livereload.com/) the browser (with extension), with flexibility to add any additional tasks via the Gruntfile. Alternatively, you can use [CodeKit](http://incident57.com/codekit/) or whatever else you prefer to compile the SCSS and manage the JavaScript.

Rename folder to your theme name, rename .info file to your theme name, change the `assets/scss/style.scss` intro block to your theme information. Open the theme directory in terminal and run `npm install` to pull in all Grunt dependencies. Run `grunt` to execute tasks. Code as you will. If you have the LiveReload browser extension, it will reload after any SCSS or JS changes. To optimize images, run `grunt imagemin`.

- Compile `assets/scss/style.scss` to `style.css` (all paths defined in config.rb for Compass)
- Compile `assets/scss/editor-style.scss` to `editor-style.css`
- Concatenate and minify all plugins in `assets/js/vender` and `assets/js/source/plugins.js` to `assets/js/plugins.min.js`
- Minify `assets/js/source/main.js` to `assets/js/main.min.js`
- ??
- Profit

### Deployment

The theme includes deployments via [grunt-rsync](https://github.com/jedrichards/grunt-rsync). The Gruntfile includes setups for staging and production - edit your paths and host, then run `grunt rsync:staging` or `grunt rsync:production` to deploy your files via rsync.

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

#### Version 3.2.0

* update grunt dependencies
* update spacing in functions

#### Version 3.1

* tweak Gruntfile.js to fix LiveReload issues and generate source maps for both main.js and plugins.js
* update to normalize v2.1.2
* optimizations and tweaks here and there

#### Version 3.0

* reorganize code in `assets` folder for fonts, images, js and scss
* setup Gruntfile to use Grunt for all compiling, concatenation and minification
* add deployments via rsync
* update to normalize v2.1.0
* general code cleanup

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

Without these projects, this Drupal Starter Theme wouldn't be where it is today.

* [HTML5 Boilerplate](http://html5boilerplate.com)
* [Normalize.css](http://necolas.github.com/normalize.css)
* [SASS / SCSS](http://sass-lang.com/)
* [Compass](http://compass-style.org)
* [Grunt](http://gruntjs.com/)
