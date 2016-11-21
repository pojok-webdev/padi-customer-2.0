<?php
class App extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function logout(){
        redirect("app/login");
    }
    function login(){
        $this->load->view("app/login");
    }
}