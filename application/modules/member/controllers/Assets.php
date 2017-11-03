<?php
class Assets extends MY_Controller {

        function __construct(){
            parent::__construct();
            if (!$this->aauth->is_loggedin())
                redirect('auth/sign-in');
        }

        public function index(){
            $this->template->title = 'Register Assets Member';

            $data = array();
            $this->template->content->view('groups/index', $data);

            $this->template->publish();
        }

        function form(){
            $this->template->title = 'Asstes Register';

            $data = array();
            $this->template->content->view('assets/form', $data);

            $this->template->publish();
        }
    
}
