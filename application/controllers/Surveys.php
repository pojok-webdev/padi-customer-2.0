<?php
class Surveys extends CI_Controller{
    function index(){
        check_login();
        
        $surveys = $this->survey->get();
        $data['surveys'] = $surveys;
        
        $this->load->view('surveys/index',$data);
    }
    function get(){
        echo $this->survey->getall();
    }
}
?>