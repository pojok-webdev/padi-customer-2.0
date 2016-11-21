<?php
class Installs extends CI_Controller{
    function index(){
        check_login();
        
        $installs = $this->install->get();
        $data['installs'] = $installs;
        
        $this->load->view('installs/index',$data);
    }
    function get(){
        echo $this->survey->getall();
    }
}
?>