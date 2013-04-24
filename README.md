# GNU gettext FIX for CodeIgniter 2.x

GNU gettext fix for systems that don't have it at all (like Mac OS X).

Before using you have to switch it on: 

FILE: application/config/autoload.php

    -$autoload['helper'] = array();
    +$autoload['helper'] = array('gnugettext');

and call a helper function to check if gettext is present:

FILE: application/controllers/main.php

    +class Main extends CI_Controller {
    +
    +    public function __construct() {
    +        parent::__construct();
    +
    +        /*
    +         * If GNU Gettext isn't present, call a helper function that overrides
    +         * GETEXT methods and returns the very first provided argument.
    +         * 
    +         */
    +        gnugettext();
    +    }

Then the same controller may run gettext functions without regret:

    +    public function index() {
    +        $data = array(
    +            'title' => _('Lorem ipsum'),
    +            'content' => _('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nam cursus. Morbi ut mi. Nullam enim leo, egestas id, condimentum at, laoreet mattis, massa. S
    +        );
    +        $this->load->view('main', $data);
    +    }
    +
    +}
