<?php
class App_settings extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	
	function index(){
		$this->load->view('app_settings');
	}
	function update(){
		$params = $this->input->post();
		$obj = new Settings();
		$obj->update($params);
		
	}
}
