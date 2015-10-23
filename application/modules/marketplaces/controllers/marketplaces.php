<?php
class Marketplaces extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	function gets(){
		$id = $this->uri->segment(3);
		$obj = new Marketplace();
		$obj->where('id',$id)->get();
		$arr = array();
		foreach($this->db->list_fields('marketplaces') as $field){
			array_push($arr,'"'.$field.'":"'.$obj->$field.'"');
		}
		echo '{'.implode(',',$arr).'}';
	}
	function get(){
		$fld = $this->uri->segment(3);
		$id = $this->uri->segment(4);
		$obj = new Marketplace();
		$obj->where('id',$id)->get();
		echo $obj->$fld;
	}
	function remove(){
		$id = $this->uri->segment(3);
		$obj = new Marketplace();
		$obj->where('id',$id)->get();
		$obj->delete();
		echo $obj->check_last_query();
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
	function update(){
		$params = $this->input->post();
		$obj = new Marketplace();
		$obj->where('id',$params['id'])->update($params);
		echo $obj->check_last_query();
	}
}
