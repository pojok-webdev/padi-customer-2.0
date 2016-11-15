<?php
class Clients extends CI_Controller{
    function index(){
        $clients = $this->client->get();
        $data['clients'] = $clients;
        $this->load->view('clients/index',$data);
    }
}
?>