=== EDD Third Party and Blog Link ===

Contributors: opportunex 
Donate Link: http://butlerconsulting.com/work/plugins/edd-thirdparty-bloglink/
Tags: easy digital downloads, digital downloads, e-downloads, edd, third party, blog link, product details, edd link, opportunex, wp repository, plugin repository
Requires at least: 3.1
Tested up to: 4.2
Stable tag: 1.0.2
License: GPLv3 (or higher)
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Add extra data to your Easy Digital Downloads products! Indicate if the product is available in the WordPress plugin repository and more.


== Description ==

**This plugin requires [Easy Digital Downloads](http://wordpress.org/extend/plugins/easy-digital-downloads/). It allows you to add post meta data in Easy Digital Downloads to indicate a third party product as well as a link for more information. Also, it adds a checkbox to indicate if the download is available in the WordPress plugin repository.** 

***Please Note:** The plugin doesn't really do anything on it's own. It is for advanced users and does nothing on the front-end without writing your own custom code.*   

= Here is what it does do: =  

1. Adds a checkbox to the download configuration for you to indicate that a product is from a third party.
2. Adds another checkbox to indicate that a product is available on the WordPress plugin repository.
3. Adds a URL field for you to add an external link to a blog or website for product details or more information.
4. Stores this data in the download product's post_meta data for you to access and use in your custom code.

= Example of how to call the data in your code: =

    if(get_post_meta( $post_id, 'edd_third_party', true )) {

        echo 'This item is from a third party.' ;

    }
    
    if(get_post_meta( $post_id, 'edd_wp_plugin', true )) {

        echo 'This item can be downloaded from WordPress.' ;

    }
    
    if(get_post_meta( $post_id, 'edd_bloglink_url', true )) {

        $bloglink = get_post_meta( $post_id, 'edd_bloglink_url', true );
        echo `<a href="' .$bloglink. '" target="_blank">Click for Details </a>`;

    }

For more examples and information visit the plugin's blog page: http://butlerconsulting.com/work/plugins/edd-thirdparty-bloglink/.


= Translated Languages Available =

I was having some fun after upgrading to the pro version of [Poedit](http://poedit.net/) so I attempted to add Spanish, German, French and Russian translations. I used Google translate and I'm curious to see how it turned out.  Please let me know! If you'd like to contribute a translation or report on a poor translation attempt, please let me know on the [support forums](http://wordpress.org/support/plugin/edd-thirdparty-bloglink/).

* Otherwise, the plugin supports American English by Default... Also supports Canadian, British, Scottish, Irish, Australian and a few others (that's a joke)
   

== Installation ==

**How to istall the plugin:**

1. Upload this plugin to the `/wp-content/plugins/` directory and unzip it, or simply upload the zip file within your WordPress installation.
2. Activate the plugin through the 'Plugins' menu in WordPress. 
3. Follow the instructions provided to use the code in your theme or `functions.php` file.

Or, you can just install it with WordPress by going to Plugins, then click Add New and type in the plugin's name "EDD Third Party and Blog Link".


== Frequently Asked Questions ==

**How do I add this to my code?**

First, see PHP code examples provided under the description, or visit the plugin's blog page: http://butlerconsulting.com/work/plugins/edd-thirdparty-bloglink/ for further details and examples. 

Second, if you really have to ask that question, the plugin is probably not for you. This plugin was designed to expand the dataset of Easy Digital Downloads via custom post meta fields and then accessed through custom code within your theme or `functions.php` file. 


== Upgrade Notice ==

The current version is 1.0 and represents the initial release.


== Screenshots ==

1. A screenshot of the fields that this plugin adds to the "Download Prices" post metabox.

2. Example usage for code.  In this case, if "edd_third_party" returns true, I display the third-party badge. If "edd_wp_plugin" returns true, I add the "FREE Download" text and the WordPress FontAwesome icon to the button.

3. Second example usage for code.  In this case, I am also using the free [External Products](https://easydigitaldownloads.com/extensions/external-products/) plugin in conjunction with my own.  This enables me to have two links, one for the file download and one for the "View Details" link.


== Credits and Special Thanks ==


Of course a big "shout out" must be given to Matt Mullenweg and the WordPress team for making the entire world possible! Also, of course, kudos to [Pippin Williamson](http://pippinsplugins.com) for the incredibly awesome [Easy Digital Downloads](http://wordpress.org/extend/plugins/easy-digital-downloads/) plugin - without which this simple plugin would be useless.  Finally, to Andrew Munro, [Sumobi](http://sumobi.com/) who's plugin [EDD Coming Soon](http://sumobi.com/shop/edd-coming-soon/) provided an easy to follow roadmap for creating mine :) Thanks all! 


== Changelog ==

= 1.0.0 =
* Initial release August 18th 2014, Nothing to see here. These are not the droids we're looking for... move along.

= 1.0.1 =
* Tested and updated stable tag for compliance with WordPress 4.0.
* Added icons for WordPress plugin repository... cool!

= 1.0.2 =
* Tested and updated stable tag for WordPress 4.1.1
