# Blanq Bootstrap Menu

Plug-in for the Blanq WordPress theme. Extends the built-in Walker class to better integrate with the Twitter Bootstrap Framework navbar. The [original Extended Walker class](https://gist.github.com/1597994) included in the plugin is credited to [johnmegahan](https://gist.github.com/johnmegahan).

Installation
===========

1. Download and unzip the archive.
2. Upload the zip to wp-content/plugins/.
3. Activate in the WordPress administration area.

Usage
===========

A menu needs to be available within WordPress and its ID should be passed as an option. By default the plugin automatically creates a menu called `Top Bar` with the id `top-bar` which you can use. To render a menu simply drop the following code into a Blanq Theme PHP template file, adjust the options as required.

`````php
if (function_exists('blanq_bootstrap_nav')) {
  blanq_bootstrap_nav(array(
    'theme_location' => 'top-bar', // the id of the menu
    'depth' => 2, // how many levels deep should the menu go, 0 for unlimited
    'container' => false, // should a container be created
    'menu_class' => 'nav', // the menu classes, requires minimum 'nav' class is included
    'sub' => false // to be documented
  ));
}
`````

Example with branding and search menu:

`````php
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"></a>
      <div class="nav-collapse">
      <?php 
      if (function_exists('blanq_bootstrap_nav')) {
        blanq_bootstrap_nav(array(
          'theme_location' => 'top-bar',
          'depth' => 1,
          'container' => false,
          'menu_class' => 'nav',
          'sub' => false
        ));
      }
      ?>
        <div class="pull-right">
          <?php get_search_form(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
`````

Planned Features
===========

* More advanced menu construction options
* Better styling options

Acknowledgments
===========

* [Extended Walker class](https://gist.github.com/1597994)
* [scbFramework](https://github.com/scribu/wp-scb-framework/wiki)
* [WordPress Github Plugin Updater](https://github.com/jkudish/WordPress-GitHub-Plugin-Updater)

Changelog
===========

~Current Version:0.2~

### 0.2
* Extended Walker
* Cleaning up code

### 1.0
* Initial alpha

Credits
===========

This plugin is built and maintained by [Daniel Davidson](https://github.com/da-n/)

License
===========

This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program; if not, write to:

Free Software Foundation, Inc. 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.