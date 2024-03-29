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
 * Version information. See https://docs.moodle.org/dev/version.php for more info.
 *
 * @package    block_obf_displayer
 * @copyright  2015-2020, Open Badge Factory Oy Oy
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version = 2023091301;
$plugin->release = '1.0.1';
$plugin->requires = 2022112800; // Moodle 4.1 version check.
$plugin->component = 'block_obf_displayer';
$plugin->maturity = MATURITY_STABLE;

$plugin->dependencies = array(
    'local_obf' => 2023091501 // The main OBF plugin must be present
);
