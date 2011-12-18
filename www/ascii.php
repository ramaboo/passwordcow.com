<?php
/**
 * ASCII page.
 * 
 * Used to generate ASCII string.
 * 
 * @file
 * @license		http://www.gnu.org/licenses/gpl-3.0.txt GNU General Public License
 * @copyright	2008 David Singer
 * @author		David Singer <david@ramaboo.com>
 * @version		1.0.0
 */

$output = '';
for ($i = 33; $i < 127; $i++) {
	$output .= chr($i);
}

echo $output;
