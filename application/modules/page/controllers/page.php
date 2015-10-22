<?php
class Page extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	function index(){
		$this->load->view('header');
		$this->load->view('menu-login');
		if (!empty($_GET['content'])) { 
				$content = $_GET['content'];  
				switch($_GET['content']){
					case 'contact':
						$this->load->view('contact');
					break;
					case 'myeo':
						if($_SESSION['login']==='1'){
							$content = basename($content);  
							$this->load->view('content');  
						}else{
							header('Location:page.php?content=login');
						}
					break;
					case 'home':
						$this->load->view('home');
					break;
					case 'login':
						$this->load->view('login/login');
					break;
					case 'marketplace':
						$this->load->view('marketplace/marketplace');
					break;
					case 'membership':
						$this->load->view('membership');
					break;
					case 'membership-form':
						$this->load->view('membership-form');
					break;
					case 'partners':
						$this->load->view('partners');
					break;
					default:
						$content = basename($content);  
						$this->load->view('content');
					break;
				}
		} else {
				$this->load->view('content');
		} 
		$this->load->view('footer');
	}
} 
