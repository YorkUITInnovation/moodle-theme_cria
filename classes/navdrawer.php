<?php

/**
 * This file is part of Cria.
 * Cria is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * Cria is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with Cria. If not, see <https://www.gnu.org/licenses/>.
 *
 * @package    local_cria
 * @author     Patrick Thibaudeau
 * @copyright  2024 onwards York University (https://yorku.ca)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace theme_cria;

use theme_cria\navdrawer;

class navdrawer
{


    /**
     * Add a navdrawer menu item
     * @param $title string
     * @param $submenu array
     * @param $url string
     * @param $icon string based on free fontawesome 5 https://fontawesome.com/v5/search?q=inventory&o=r&m=free
     * @return \stdClass
     */
    public static function add($title , $submenu = null, $url = '#', $icon = 'far fa-circle' , $divider = false) {

        $item = new \stdClass();
        $item->title = $title;
        $item->url = $url;
        $item->icon = $icon;
        $item->divider = $divider;

        if ($submenu) {
            $item->has_submenu = count($submenu);
            $item->submenu = $submenu;
        }

        return $item;
    }

    /**
     * Render navdrawer menu items by iterating through all folders (plugins)
     * within the local folder and merge all arrays
     * @return array|void
     */
    public static function render() {
        global $CFG;

        $path = $CFG->dirroot . '/local/';

        if (!is_dir($path)) {
            exit('Invalid directory path');
        }

        $folders = [];
        $i = 0;
        foreach (scandir($path) as $file) {
            if (is_dir($path . $file)) {
                if ($file !== '.' && $file !== '..') {
		    if ($file !== 'adminer') {
                    $folders[$i]['path'] = $path . $file;
                    $folders[$i]['plugin'] = 'local_' . $file;
                    $i++;
                    }
                }
            }
        }

        $items = [];
        for ($x = 0; $x < count($folders); $x++){
            require_once($folders[$x]['path'] . '/lib.php');
            $function = $folders[$x]['plugin'] . '_navdrawer_items';
            $data = $function();
            $items = array_merge_recursive($items, $data);
        }
        array_values($items);

        return $items;
    }

}
