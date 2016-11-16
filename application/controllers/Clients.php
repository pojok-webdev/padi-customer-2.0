<?php
class Clients extends CI_Controller{
    function index(){
        check_login();
        /*
        $clients = $this->client->get();
        $data['clients'] = $clients;
        */
        $this->load->view('clients/index');
    }
    function get(){
        echo $this->client->getall();
    }
}
?>