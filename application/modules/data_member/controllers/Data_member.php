<?php
class Data_member extends MY_Controller {

        function __construct(){
            parent::__construct();
            $this->load->model('data_member_mod');
            $this->load->library('session');
        }
        
        function view($page = 'data_look'){
            $data['fetch_data'] = $this->data_member_mod->fetch_data();
            $this->load->view($page,$data);
        }
        function add_member($page = 'form_look'){
            $data['result'] = NULL;
            $this->load->view($page,$data);
        }
        function form_validation(){
            $this->load->helper(array('form', 'url'));
            $this->load->library('form_validation');
            $this->form_validation->set_rules('marker_name','Nama Pemilik','required|alpha');
            $this->form_validation->set_rules('marker_address','Alamat Lokasi','required|alpha');
            $this->form_validation->set_rules('marker_lat','Latitude','');
            $this->form_validation->set_rules('marker_lng','Longitude','');
            $this->form_validation->set_rules('marker_type','Tipe','required|alpha');
            
            if($this->form_validation->run()){
                $data = array(
                    "marker_name" =>$this->input->post("marker_name"),
                    "marker_address" =>$this->input->post("marker_address"),
                    "marker_lat" =>$this->input->post("marker_lat"),
                    "marker_lng" =>$this->input->post("marker_lng"),
                    "marker_type" =>$this->input->post("marker_type")
                );
                
                $this->data_member_mod->insert_data($data);
                
                $data['result'] = "inserted";
                return $this->load->view('form_look',$data,'refresh');
                
            }else{
                $data['result'] = "failed";
                $this->load->view('form_look',$data);
                
            }
        }
    
}
