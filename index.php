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
 *
 * @package    tool_noblesuraj -- test plugin for moodle development course
 * @copyright  2018 Suraj Kumar
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../../config.php');
require_once($CFG->libdir.'/adminlib.php');

admin_externalpage_setup('noblesuraj');

// Set up the page.
$title = get_string('pluginname', 'tool_noblesuraj');
$pagetitle = get_string('pluginheading', 'tool_noblesuraj');
$url = new moodle_url("/admin/tool/noblesuraj/index.php");
$PAGE->set_url($url);
$PAGE->set_title($title);
$PAGE->set_heading($title);

$output = $PAGE->get_renderer('tool_noblesuraj');

echo $output->header();
echo $output->heading($pagetitle);

$data = new stdClass();
$data->heading = $title;
$data->sometext = get_string('helloworld', 'tool_noblesuraj');

$renderable = new \tool_noblesuraj\output\index_page($data);
echo $output->render($renderable);

echo $output->footer();