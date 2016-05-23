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

$string['logstore'] = 'Log store';
$string['notificationhighload'] = '<div style="text-align: center; margin: 10px;">Attention! This report uses non-optimesed database queries. They may take a long time and produce high database load.</div>';
$string['filterheader'] = 'Filter';
$string['filter_category'] = 'Course category';
$string['filter_category_all'] = 'All categories';
$string['filter_category_sub'] = 'Search in subcategories';
$string['filter_coursefullname'] = 'Course fullname';
$string['filter_coursefullname_all'] = 'All courses';
$string['filter_courseshortname'] = 'Course shortname';
$string['filter_courseshortname_all'] = 'All courses';
$string['filter_component'] = 'Component';
$string['filter_component_all'] = 'All components';
$string['filter_component_core'] = 'Core (core)';
$string['filter_component_grouptemplate'] = '{$a->typedisplaynameplural} ({$a->typename})';
$string['filter_component_template'] = '{$a->displayname} ({$a->name})';
$string['filter_crud'] = 'Action';
$string['filter_ip4'] = 'IPv4 address';
$string['filter_ip4_help'] = 'IPv4 address';
$string['filter_ip6'] = 'IPv6 address';
$string['filter_ip6_help'] = 'Help';
$string['filter_edulevel'] = 'Educational level';
$string['filter_event'] = 'Event';
$string['filter_event_all'] = 'All events';
$string['filter_event_core'] = 'Core events (core)';
$string['filter_event_grouptemplate'] = '{$a->typedisplayname} "{$a->plugindisplayname}" ({$a->pluginname})';
$string['filter_event_template'] = '{$a->displayname} ({$a->name})';
$string['filter_objectid'] = 'Object id';
$string['filter_objecttable'] = 'Object table';
$string['filter_objecttable_all'] = 'All tables';
$string['filter_origin'] = 'Event origin';
$string['filter_origin_all'] = 'All interfaces';
$string['filter_origin_web'] = 'Web interface';
$string['filter_origin_cli'] = 'Command line interface';
$string['filter_origin'] = 'Origin';
$string['filter_relateduser'] = 'Affected user';
$string['filter_timecreatedafter'] = 'Event took place after';
$string['filter_timecreatedbefore'] = 'Event took place before';
$string['filter_user'] = 'User';
$string['filter_useremail'] = 'User\'s email substring';
$string['filter_user_all'] = 'All users';
$string['eventreportviewed'] = 'Extended log search report viewed';
$string['extendedlog:view'] = 'View extended log search report';
$string['navigationnode'] = 'Extended log search';
$string['pluginname'] = 'Extended log search';
$string['showlogs'] = 'Show events';
