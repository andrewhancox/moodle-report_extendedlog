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
 * Report for extended log searching.
 *
 * @package    report_extendedlog
 * @copyright  2016 Vadim Dvorovenko <Vadimon@mail.ru>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace report_extendedlog\filter;

defined('MOODLE_INTERNAL') || die();

/**
 * Class for filtering by edulevel field.
 *
 * @package    report_extendedlog
 * @copyright  2016 Vadim Dvorovenko <Vadimon@mail.ru>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class edulevel extends base {

    /**
     * Return crud values.
     *
     * @return array list of users.
     */
    private function get_edulevel_list() {
        $edulevellist = array(
            \core\event\base::LEVEL_TEACHING => get_string('edulevelteacher'),
            \core\event\base::LEVEL_PARTICIPATING => get_string('edulevelparticipating'),
            \core\event\base::LEVEL_OTHER => get_string('edulevelother'),
        );
        return $edulevellist;
    }

    /**
     * Adds controls specific to this condition in the filter form.
     *
     * @param \MoodleQuickForm $mform Filter form
     */
    public function add_filter_form_fields(&$mform) {
        $edulevels = $this->get_edulevel_list();
        $checkboxes = array();
        foreach ($edulevels as $key => $label) {
            $checkboxes[] = $mform->createElement('checkbox', $key, '', $label);
        }
        $mform->addGroup($checkboxes, 'edulevel', get_string('filter_edulevel', 'report_extendedlog'), ' ', true);
        $mform->setAdvanced('edulevel', $this->advanced);
    }

}