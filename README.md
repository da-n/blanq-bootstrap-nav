# Blanq Bootstrap Menu

Plug-in component for the [Blanq](https://github.com/da-n/blanq) WordPress theme. Extends the built-in Walker class to better integrate with the Twitter Bootstrap Framework navbar. [Original Extended Walker class](https://gist.github.com/1597994) used in this plugin credit to [johnmegahan](https://gist.github.com/johnmegahan).

Installation
===========

Method 1

1. Download zip archive.
2. Upload using plugin Upload tool `yourdomain.com/wp-admin/plugin-install.php?tab=upload`.
3. Activate.

Method 2

1. Download and unzip the archive.
2. Upload the zip to `wp-content/plugins/`.
3. Activate.

Usage
===========

A menu needs to be available within WordPress and its ID should be passed as an option. By default the plugin automatically creates a menu called `Top Bar` with the id `top-bar` which you can use. To render a menu simply drop the following code into a Blanq Theme PHP template file, adjust the options as required.

`````php
if (function_exists('blanq_bootstrap_nav')) {
  blanq_bootstrap_nav(array(
    'theme_location' => 'top-bar', // the id of the menu
    'depth' => 0, // how many levels deep should the menu go, 0 for unlimited
    'container' => false, // should a container be created
    'container_class' => 'navbar', // the container classes, requires 'navbar' class at minimum
    'menu_class' => 'nav' // the menu classes, requires 'nav' class at minimum
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
            'theme_location' => 'main_navigation',
            'depth' => 1,
            'container' => false,
            'container_class' => 'navbar',
            'menu_class' => 'nav'
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

Acknowledgments
===========

* [Extended Walker class](https://gist.github.com/1597994)

Credits
===========

This plugin is built and maintained by [Daniel Davidson](https://github.com/da-n/)

Changelog
===========

### 1.0
* Initial release