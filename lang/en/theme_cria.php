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

// A description shown in the admin theme selector.
$string['choosereadme'] = 'Theme Cria is a child theme of Boost.';
$string['dashboard'] = 'Dashboard';
// The name of our plugin.
$string['pluginname'] = 'Cria';
// We need to include a lang string for each block region.
$string['region-side-pre'] = 'Right';
$string['configtitle'] = 'Configuration';
$string['generalsettings'] = 'General';
$string['redirect_url'] = 'Redirect URL';
$string['redirect_url_desc'] = 'Enter the path where users should be redirected when they log in or click on the home link. Path must always start with forward slash. ex /path/to/your/plugin';
$string['show_edit_mode'] = 'Show edit mode toggle switch';
$string['show_edit_mode_desc'] = 'Show the edit mode toggle switch at the top right portion of the navbar.';