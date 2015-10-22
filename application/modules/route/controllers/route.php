<?php 
class Route extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	function index(){
		$params = $this->input->post();
		$users = array(
			"admin"=>"eoid2015",
			"yudi"=>"yudi123",
			"rudi"=>"rudi123",
			"dudi"=>"dudi123",
			"sudi"=>"sudi123",
		);
		if($users[$params['username']]===$params['password']){
			session_start();
			$_SESSION['login'] = "1"; 
			if (isset ($_SESSION['pendingpage'])){
				$pending=$_SESSION['pendingpage'];
				unset ($_SESSION['pendingpage']);
				redirect('page?content='.$pending);
				header('location:'.$pending);
			}else{
				redirect('page?content=home');
//				header('location:index-member.php');
			}
		}else{
			$_SESSION['login'] = "0"; 
			redirect('page?content=log');
			//header('location:page.php?content=log');
		}
	}
}
