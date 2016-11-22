<?php
class App extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function logout(){
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
    function hasher(){
        echo "SHA ; " . sha1(sha1("puji")) . "\n";
        echo "pdb : " . authentic1('puji@padi.net.id','puji') . "\n";
        echo "pwd : " . authentic2('puji@padi.net.id','puji') . "\n";
    }
}