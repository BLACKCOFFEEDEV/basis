<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Groups Controller
 * Created by Syahril Hermana
 */

class Profile extends MY_Controller
{
    var $employee = false;
    var $member = false;

    function __construct(){
        parent::__construct();

        if (!$this->aauth->is_loggedin())
            redirect('auth/sign-in');
    }

    public function index()
    {
        $this->load->model('Account', 'account');

        $user = $this->aauth->get_user();
        $account = $this->account->get_account($user->id);

        print_r(  );
        exit;
        $this->template->title = 'Profile';

        $data = array();
        $this->template->content->view('profile/index', $data);

        $this->template->publish();
    }

    public function save()
    {
        $this->form_validation->set_rules('name', 'Group Name is required', 'required');
        $this->form_validation->set_rules('definition', 'Group Definition is required', 'required');

        if($this->form_validation->run() == true) {
            $this->load->model('Group', 'model');
            $key = $this->input->post('id');
            $result = false;
            $object = array(
                'name' => $this->input->post('name'),
                'definition' => $this->input->post('definition')
            );

            if($key != null || $key != '') {
                $result = $this->model->save($object, $key);
            }
            else {
                $result = $this->model->save($object);
            }

            if($result) {
                $this->session->set_flashdata('success', 'Data has been saved.');
                $this->session->keep_flashdata('success');
            }
            else {
                $this->session->set_flashdata('error', 'Data not saved, please try again.');
                $this->session->keep_flashdata('error');
            }

            redirect('privileges/groups');
        }
        else {
            $this->session->set_flashdata('error', 'Data not saved, please try again.');
            $this->session->keep_flashdata('error');
            redirect('privileges/groups');
        }
    }
}