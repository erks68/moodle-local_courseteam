<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Add page to admin menu
 *
 * @package     local_courseteam
 * @category    admin
 * @copyright   2021 Eve Ormisson <eve.ormisson@artun.ee>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $ADMIN->add('localplugins', new admin_category('local_courseteam_settings', new lang_string('pluginname', 'local_courseteam')));
    $settingspage = new admin_settingpage('managelocalcourseteam', new lang_string('manage', 'local_courseteam'));

    if ($ADMIN->fulltree) {
        $settingspage->add(new admin_setting_configcheckbox(
            'local_courseteam/showinnavigation',
            new lang_string('showinnavigation', 'local_courseteam'),
            new lang_string('showinnavigation_desc', 'local_courseteam'),
            0
        ));
    }

    $ADMIN->add('localplugins', $settingspage);
}