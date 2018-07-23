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
 * Form for editing topics.
 *
 * @package    mod_tutormatch
 * @copyright  2018 Dusan Vilicic
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

global $CFG;
require_once($CFG->libdir.'/formslib.php');

/**
 * class for displaying topicedit form.
 *
 * @copyright  2018 Dusan Vilicic
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class topicedit_form extends moodleform {

    /**
     * Called to define this moodle form
     *
     * @return void
     */
    public function definition() {

        $mform = $this->_form;
        $mform->addElement('hidden', 'topicid', 0);
        $mform->setType('topicid', PARAM_INT);
        $mform->addElement('hidden', 'id', 0);
        $mform->setType('id', PARAM_INT);
        $mform->addElement('header', 'attheader', get_string('edittopic', 'attendance'));
        $mform->addElement('text', 'name', get_string('topicname', 'attendance'));
        $mform->addRule('name', 'Required', 'required', null, 'client');
        $mform->setType('name', PARAM_TEXT);
        $buttonarray = array(
            $mform->createElement('submit', 'submitbutton', get_string('edittopic', 'attendance')),
            $mform->createElement('cancel'),
        );
        $mform->addGroup($buttonarray, 'buttonar', '', array(' '), false);
        $mform->closeHeaderBefore('submit');
    }

    /**
     * Apply filter to form
     *
     */
    public function definition_after_data() {
        $mform = $this->_form;
        $mform->applyFilter('name', 'trim');
    }

    /**
     * Perform validation on the form
     * @param array $data
     * @param array $files
     */
    public function validation($data, $files) {
        $errors = parent::validation($data, $files);
        return $errors;
    }
}
