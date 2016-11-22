<?php
/*
    Created by Puji W Prayitno
    puji@padi.net.id - 2016
*/
class App extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function logout(){
        session_destroy();
        redirect("app/login");
    }
    function login(){
        if($this->uri->segment(3)==='false'){
            $data["title"] = "Login salah";
        }else{
            $data["title"] = "Login - PadiApp";
        }
        $this->load->view("app/login",$data);
    }
    function login_handler(){
        $params = $this->input->post();
        if(authentic($params["email"],$params["password"])){
            redirect("/leads");
        }else{
            redirect("/app/login/false");
        }
    }
}