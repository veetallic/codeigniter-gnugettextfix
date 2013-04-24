<?php
class Main extends CI_Controller {

    public function __construct() {
        parent::__construct();

        /*
         * If GNU Gettext isn't present, call a helper function that overrides
         * GETEXT methods and returns the very first provided argument.
         * 
         */
        gnugettext();
    }

    public function index() {
        $data = array(
            'title' => _('Lorem ipsum'),
            'content' => _('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa.')
        );
        $this->load->view('main', $data);
    }

}
