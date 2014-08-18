=== EDD Third Party and Blog Link ===

Contributors: opportunex
Donate Link: http://butlerconsulting.com/work/plugins/edd-thirdparty-bloglink/
Tags: easy digital downloads, digital downloads, e-downloads, edd, third party, blog link, product details, edd link, opportunex, wp repository, plugin repository
Requires at least: 3.1
Tested up to: 3.9
Stable tag: 1.0
License: GPLv3 (or higher)
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Add extra data to your Easy Digital Downloads products! Indicate if the product is available in the WordPress plugin repository and more.

== Description ==

This plugin requires [Easy Digital Downloads](http://wordpress.org/extend/plugins/easy-digital-downloads/ "Easy Digital Downloads"). It allows you to add post meta data in Easy Digital Downloads to indicate a third party product and also a link for more information. Also adds a checkbox to indicate if the download is available in the WordPress plugin repository. This plugin is for advanced users and does nothing on the fron-end without custom code.  Here is what it does do:  

1. Adds a checkbox to the download configuration for you to indicate that a product is from a third party.
2. Adds another checkbox to indicate that a product is available on the WordPress plugin repository.
3. Adds a URL field for you to add an external link to a blog or website for product details or more information.
4. Stores this data in the download product's post_meta data for you to access and use in your custom code.

** Example Use **

Example of how to call the data in your code:

    if(get_post_meta( $post_id, 'edd_third_party', true )) {

        echo 'This item is from a third party.' ;

    }
    
    if(get_post_meta( $post_id, 'edd_wp_plugin', true )) {

        echo 'This item can be downloaded from WordPress.' ;

    }
    
    if(get_post_meta( $post_id, 'edd_bloglink_url', true )) {

        $bloglink = get_post_meta( $post_id, 'edd_bloglink_url', true );
        echo '<a href="' .$bloglink. '" target="_blank">Click for Details </a>';

    }
    

== Installation ==

1. Unpack the entire contents of this plugin zip file into your 'wp-content/plugins/' folder locally
2. Upload to your site
3. Navigate to 'wp-admin/plugins.php' on your site (your WP Admin plugin page)
4. Activate this plugin "EDD Third Party and Blog Link"

OR you can just install it with WordPress by going to Plugins -> Add New -> and type this plugin's name (EDD Third Party and Blog Link)


== Frequently Asked Questions ==

= How do I add this to my code =

See examples above for starters. If you really have to ask that, this plugin is probably not for you. This plugin was only designed to expand the dataset of Easy Digital Downloads via custom post meta fields and the accessed through custom coding in PHP. 


== Upgrade Notice ==

The current version is 1.0 and represents the initial release.


== Screenshots ==

1. A screenshot of the fields that this plugin adds.


== Credits and include files ==

Of course a big "shout out" must be given to Matt Mullenweg and the WordPress team for making the entire world possible! Also, of course, kudos to Pippin Williamson (pippinsplugins.com) for the incredibly awesome Easy Digital Downloads plugin - without which this simple plugin would be useless.  Finally, to Andrew Munro, Sumobi (http://sumobi.com/) who's plugin EDD Coming Soon (http://sumobi.com/shop/edd-coming-soon/) provided an easy to follow roadmap for creating mine :) Thanks all! 


== Changelog ==

= 1.0 =
* Initial release August 18th 2014, Nothing to see here. These are not the droids we're looking for... move along.
