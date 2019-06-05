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
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Plugin administration pages are defined here.
 *
 * @package     tool_mdl63795
 * @category    admin
 * @copyright   2019 Matt Porritt <mattp@catalyst-au.net>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

if ($ADMIN->fulltree) {
    $settings = new admin_settingpage('tool_mdl63795', new lang_string('pluginname', 'tool_mdl63795'));


    // Initial default setting.
    $settings->add(new admin_setting_configtext(
            'tool_mdl63795/initial',
            get_string('initial', 'tool_mdl63795'),
            get_string('initial', 'tool_mdl63795'),
            'A nice default',
            PARAM_RAW
            ));

    // Setting that is available after the above is set.
    $initaldefault = get_config('tool_mdl63795', 'initial');
    if ($initaldefault) {
        $settings->add(new admin_setting_configtext(
                'tool_mdl63795/secondary',
                get_string('secondary', 'tool_mdl63795'),
                get_string('secondary_desc', 'tool_mdl63795'),
                'A secondary value',
                PARAM_RAW
                ));
    }

    $ADMIN->add('tools', $settings);
}
