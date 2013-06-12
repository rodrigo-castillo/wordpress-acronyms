=== Acronyms ===
Contributors: ketsugi
Donate link: http://ketsugi.com/paypal_donate.php?plugin=WordPress%20-%20Acronyms%20Plugin
Tags: acronym, post, formatting
Requires at least: 2.7
Tested up to: 2.7
Stable tag: 1.6.1

A plugin to wrap acronyms in posts and comments with appropriate `<acronym>` acronyms. Allows users to manage lists of acronyms through admin interface. Based on Joel Bennett's Acronym Replacer plugin (http://www.huddledmasses.org/) and Joel Pan's NP_Acronym plugin for Nucleus CMS.

== Description ==

This WordPress plugin will allow users to maintain a list of acronyms and abbreviations (though it makes no distinction between the two) from within the WordPress Management interface, and replace instances of defined acronyms in blog posts and comments with the full HTML acronym tag, e.g. `<acronym title="Hypertext Markup Language">HTML</acronym>`.

This plugin was based on Joel Bennett's Acronym Replacer plugin (http://www.huddledmasses.org/), ported to Nucleus CMS by Joel Pan as the NP_Acronym plugin and now ported back to WordPress. As Joel Bennett's original plugin as now evolved beyond the scope of this one (now called [Ubernyms](http://huddledmasses.org/ubernyms-20/)), it might be seen as a far superior alternative given the functionality it provides, but this Acronyms plugin is meant to be a simple yet functional solution for those who only want to ensure their posts are semantically marked up with full text for acronyms without worrying about anything more.

== Installation ==

1. Download the zip file
2. Extract acronyms.php
3. Upload acronyms.php to your wp-content/plugins directory
4. Log in to your WordPress blog
5. Click on "Plugins"
6. Locate the "Acronyms" plugin and click "Activate"
7. Go to "Tools" > "Acronyms" to modify your list of acronyms

== Frequently Asked Questions ==

= I upgraded from version 1.0 to 1.5 and I'm getting error messages. What gives? =

Acronyms 1.5 added a new hidden option which it relies on. To ensure proper behavior of this plugin, go to your Plugins list. Deactivate the Acronyms plugin, and then activate it again. This should resolve any issues.

== Change Log ==

* 1.6.1 - 9 Feb 2009
   * [FIX] Fixed the same bug... again...
* 1.6 - 9 Feb 2009
   * [FIX] Fixed a bug that was causing display errors
   * [UPD] Updated the UI to match WordPress 2.7
* 1.5.3 - 2 Feb 2009
   * [FIX] Editing acronyms was broken for WordPress 2.7 users and is now fixed.
* 1.5.2 - 14 Apr 2008
   * [FIX] The acronym list when sorted by acronyms will now properly sort upper and lower cases
   * [FIX] A conflict with WordPress that caused an error when trying to delete a draft has been corrected
   * [FIX] The full text for TIFF in the default list of acronyms has been corrected
   * [UPD] Deprecated action hooks replaced with the current versions
* 1.5.1 - 7 Apr 2008
   * Fixed an unexpected side-effect of WordPress' new plugin auto-update that broke some paths
* 1.5 - 7 Apr 2008
   * Overhaul of the plugin to match the new WordPress 2.5 admin interface look and feel
   * Acronyms after slash characters are now properly replaced
   * The Acronyms management page now feature pagination, ordering by acronym or full text, and constraining the number of acronyms shown per page
* 1.0 - 24 Jul 2006
   * Initial release
