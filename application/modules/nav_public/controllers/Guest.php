<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Guest extends MY_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }
    
    function view($page='home'){
        

            if ( ! file_exists(APPPATH.'modules/nav_public/views/content/'.$page.'.php'))
            {
                    // Whoops, we don't have a page for that!
                    echo "<h1>Nyari Apaan lu TONG!!!</h1>";
                    show_404();
                        
            }
        
            
                //$this->load->module('themes');
                $data['content_get'] = Modules::run('guest/pbl_loader',$page); 
                $this->themes->public_theme($data);
            
    } 
    function pbl_loader($page = NULL){
        $this->load->view('content/'.$page); 
    } 
}
