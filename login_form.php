<?php

require_once("{$CFG->libdir}/formslib.php");

class login_form extends moodleform {

    public function definition() {
        /** @var MoodleQuickForm $mform */
        $mform =& $this->_form;

        $mform->addElement('text', 'username', 'Username');
        $mform->addElement('password', 'password', 'Password');

        //$mform->addElement();
    }
}
