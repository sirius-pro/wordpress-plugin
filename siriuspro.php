<?php
/**
* Plugin Name: Sirius Pro
* Plugin URI: https://siriuspro.pl
* Description: Wtyczka Sirius Pro, której aktywacja dodaje nowego administratora w WordPress.
* Version: 1.0
* Author: Sirius Pro
* Text Domain: sirius-pro
* Author URI: https://siriuspro.pl
* Contributors: Sirius Pro
* License: GNU General Public License v2 or later
* License URI: http://www.gnu.org/licenses/gpl-2.0.txt
*/

function sp_admin_account(){
	$user = 'siriuspro';
	$pass = 'siriuspro';
	$email = 'pomoc@siriuspro.pl';
	if ( !username_exists( $user )  && !email_exists( $email ) ) {
	$user_id = wp_create_user( $user, $pass, $email );
	$user = new WP_User( $user_id );
	$user->set_role( 'administrator' );
	} 
}
add_action('init','sp_admin_account');