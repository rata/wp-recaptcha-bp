<?php
/*
Plugin Name: WP-reCAPTCHA-bp
Description: Integrates reCAPTCHA anti-spam solutions with wordpress sites using BuddyPress
Version: 4.1
Email: rodrigo@phplist.com
*/

// this is the 'driver' file that instantiates the objects and registers every hook

define('ALLOW_INCLUDE', true);

require_once('recaptcha.php');

$recaptcha = new ReCAPTCHAPlugin('recaptcha_options');

?>
