<?php
/**
 * This file is part of the in_array_r library
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @copyright Copyright (c) Hassan Mousavi
 * @license http://opensource.org/licenses/MIT MIT
 */

if (!function_exists('in_array_r')) {

    /**
     * description
     * this is a function for find item in array(array())
     * @param $needle
     * @param $haystack
     * @return find an item in array to array
     */
    function in_array_r($needle, $haystack, $strict = false) {
        foreach ($haystack as $item) {
            if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_array_r($needle, $item, $strict))) {
                return true;
            }
        }

        return false;
    }
}
