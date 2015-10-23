<?php
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		//$this->load->library('padiauth');
	}
	function index(){
		$data = array(
			'page'=>'',
		);
		$this->load->view('header');
		$this->load->view('menu-login');
		$this->load->view('home',$data);
		$this->load->view('footer');
	}
	function chgpassword(){
		$this->padiauth->change_password_user_by_email('puji','puji@padi.net.id');
	}
}
