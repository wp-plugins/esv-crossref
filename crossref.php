<?php
/*
Plugin Name: CrossRef
Plugin URI: http://esv.org/tools/esv-crossref/
Description: Scans the site for Bible references. Once it finds a Bible reference it will be converted into a hoverable link.
Author: Crossway
Version: 1.0
Author URI: http://crossway.org/
*/

define('CROSSREF_VERSION', '1.0');

class CrossRef
{
  function loadScript () {
    # loads the crossref script to the footer.
    wp_enqueue_script('CrossRef', 'http://static.esvmedia.org/crossref/crossref.min.js', false, false, true);
  }
}

//Enable the plugin for the init hook, but only if WP is loaded.
if (defined('ABSPATH') && defined('WPINC')) {
  add_action("init", array("CrossRef","loadScript"), 1, 0);
}

?>