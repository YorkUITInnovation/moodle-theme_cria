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

// Every file should have GPL and copyright in the header - we skip it in tutorials but you should not skip it for real.

// This line protects the file from being accessed by a URL directly.
defined('MOODLE_INTERNAL') || die();

// We will add callbacks here as we add features to our theme.
function theme_cria_load_all_redirects()
{
    theme_cria_redirect_to_home();
}

function theme_cria_redirect_to_home()
{
    global $CFG;
    $config = get_config('theme_cria');
    if ($config->redirect_url) {
        $current_url = $_SERVER['REQUEST_URI'];
// If user clicked home page link
        if (strpos($current_url, '/?redirect=0') || strpos($current_url,'/my/')) {
            redirect($CFG->wwwroot . $config->redirect_url);
        }
    }
}

/**
 * Returns the main SCSS content .
 *
 * @param theme_config $theme The theme config object .
 * @return string
 */
function theme_cria_get_main_scss_content($theme)
{
    global $CFG;

    $scss = '';

    $context = context_system::instance();

    $scss .= file_get_contents($CFG->dirroot . '/theme/cria/scss/default.scss');

    return $scss;
}
