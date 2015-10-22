<?php
class Adm extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	function login(){
		$this->load->view('backend/login');
	}
	function route(){
		$params = $this->input->post();
		switch($params['sender']){
			 case 'login':
				if($this->padiauth->log_in($params['email'],$params['password'])){
					redirect(base_url() . 'adm/settings');
				}else{
					redirect(base_url() . 'adm/login/fail');
				}
			 break;
		}
	}
	function settings(){
		$this->load->view('backend/settings');
	}
	function welcome(){
		$this->load->view('backend/welcome');
	}
	function books(){
		$this->load->view('backend/books');
	}
	function marketplaces(){
		$this->load->view('backend/marketplaces');
	}
}
