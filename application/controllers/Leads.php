<?php
class Leads extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        check_login();
        
        $clients = $this->lead->get();
        $data['leads'] = $clients;
                
        $this->load->view("leads/index",$data);
    }
}