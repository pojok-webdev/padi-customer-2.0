<?php
class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	function index(){
		$this->load->model('app_log');
		$data['lastactivity'] = $this->app_log->getlastactivity();
		$data['amount'] = $this->app_log->getamount();
		$this->load->view('dashboard/index',$data);
	}
}
