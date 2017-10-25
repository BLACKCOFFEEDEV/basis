<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends MX_Controller {

        function __construct(){
            parent::__construct();
            $this->load->helper('url');
  	 		$this->load->model('login_mod');
            $this->load->library('session');
        }
        
        function view($page = 'login'){
            $this->load->view('pages/'.$page);
        } 
    
        function login_user(){
          $user_login=array(

          'user_email'=>$this->input->post('email'),
          'user_password'=>md5($this->input->post('password'))

            );

            $data=$this->login_mod->login_user($user_login['user_email'],$user_login['user_password']);
              if($data)
              {
                $this->session->set_userdata('user_id',$data['user_id']);
                $this->session->set_userdata('user_email',$data['user_email']);
                $this->session->set_userdata('user_fullname',$data['user_fullname']);

                redirect('dashboard/panel/view/dashboard',$data, 'refresh');

              }
              else{
                $this->session->set_flashdata('error_msg', '<center>Hadeuh, coba lagi tong!!!</center>');
                $this->load->view("pages/login_look");

              }


        }
        public function user_logout(){

          $this->session->sess_destroy();
          redirect('user/login', 'refresh');
        }
}
