<?php
class Users extends CI_Controller{
    function index(){
        $this->load->model('user');
        $users = $this->user->get();
        $data['users'] = $users;
        $this->load->view('users/tables',$data);
    }
    function setting(){
        check_login();
        $this->load->view("users/setting");
    }
}
?>