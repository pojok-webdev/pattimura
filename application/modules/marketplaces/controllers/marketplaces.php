<?php
class Marketplaces extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	function save(){
		$params = $this->input->post();
		$obj = new Marketplace();
		foreach($params as $key=>$val){
			$obj->$key = $val;
		}
		$obj->save();
		echo $this->db->insert_id();
	}
}
