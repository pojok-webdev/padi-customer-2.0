<?php
class Prospects extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        check_login();
        
        $prospects = $this->prospect->get();
        $data['prospects'] = $prospects;
                
        $this->load->view("prospects/index",$data);
    }
}