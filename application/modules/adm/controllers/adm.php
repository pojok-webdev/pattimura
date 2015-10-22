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
					echo "sukses";
					//redirect(base_url() . 'admin/categories');
				}else{
					echo "tidak sukses";
					//redirect(base_url() . 'admin/login/fail');
				}
			 break;
		}
	}
}
