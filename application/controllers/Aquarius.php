<?php
class Aquarius extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    function tables(){
        $this->load->view("aquarius/tables");
    }
}