<?php
/*
Plugin Name: EDD Third Party and Blog Link
Plugin URI: http://butlerconsulting.com/work/plugins/edd-thirdparty-bloglink/
Description: Add adds a checkbox to indicate if the product is from a third party and an optional "Blog Link" (for product details/more information) to your Easy Digital Downloads products. Also adds a checkbox to indicate if the download is available in the WordPress plugin repository. Please Note: This plugin doesn't really do anything on it's own.  What does it do? It optionally adds three post meta fields that can be accessed in your custom code.
Version: 1.0.0
Author: Thomas S. Butler
Author URI: http://butlerconsulting.com
Text Domain: edd-thirdparty-bloglink
Domain Path: /lang/
*/

/*
	
    * @author Thomas S. Butler (email: tom@opportunex.com)
    * @copyright 2014 All Rights Reserved.  Easy Digital Downloads - Third Party and Blog Link.

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    To get a copy of the GNU General Public License, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
    Or, visit <http://www.gnu.org/licenses/>.
    
*/

/**
 * Blog Link URL Field and Third Party Checkbox
 *
 * Adds checkbox and URL fields to the EDD Downloads meta box area
 *
 * @param integer $post_id
 * @since 1.0.0
 *
 */
function edd_thirdparty_bloglink_field( $post_id ) {
    
	$edd_bloglink_url = get_post_meta( $post_id, 'edd_bloglink_url', true );
    $is_third_party = (boolean) get_post_meta( $post_id, 'edd_third_party', true );
    $is_wp_plugin = (boolean) get_post_meta( $post_id, 'edd_wp_plugin', true );
    
?>
	
    <p>
        <strong><?php _e( 'Blog Link URL:', 'edd-thirdparty-bloglink' ); ?></strong>
    </p>
    
	<label for="edd_bloglink_url">
		<input type="text" name="edd_bloglink_url" id="edd_bloglink_url" value="<?php echo esc_attr( $edd_bloglink_url ); ?>" size="80" placeholder="http://"/>
		<br/><?php _e( 'Blog Link URL (including http://) to provide more information.', 'edd-thirdparty-bloglink' ); ?>
	</label>
    
    <label for="edd_third_party">
		<input type="checkbox" name="edd_third_party" id="edd_third_party" value="1" <?php checked( true, $is_third_party ); ?> />
		<?php _e( 'Indicate Third Party Product', 'edd-thirdparty-bloglink' ); ?>
	</label>
    
    <label for="edd_wp_plugin">
		<input type="checkbox" name="edd_wp_plugin" id="edd_wp_plugin" value="1" <?php checked( true, $is_wp_plugin ); ?> />
		<?php _e( 'Downloaded from WordPress', 'edd-thirdparty-bloglink' ); ?>
	</label>
    
<?php

}
add_action( 'edd_meta_box_fields', 'edd_thirdparty_bloglink_field', 90 );

/**
 * Add the _edd_external_url field to the list of saved product fields
 *
 * @since  1.0.0
 *
 * @param  array $fields The default product fields list
 * @return array         The updated product fields list
 */
function edd_thirdparty_bloglink_save( $fields ) {

	// Add our fields
	$fields[] = 'edd_bloglink_url';
    $fields[] = 'edd_third_party';
    $fields[] = 'edd_wp_plugin';

	// Return the fields array
	return $fields;
}
add_filter( 'edd_metabox_fields_save', 'edd_thirdparty_bloglink_save' );

/**
 * Sanitize metabox field to only accept URLs
 *
 * @since 1.0.0
*/
function edd_thirdparty_bloglink_metabox_save( $new ) {

	// Convert to raw URL to save into wp_postmeta table
	$new = esc_url_raw( $_POST[ 'edd_bloglink_url' ] );

	// Return URL
	return $new;

}
add_filter( 'edd_metabox_save', 'edd_thirdparty_bloglink_metabox_save' );
