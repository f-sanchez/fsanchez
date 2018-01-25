<?php

class Hello extends CI_Controller{

	// public function __construct(){
	// 	parent:: __construct();
	// 	//
	// 	echo "This is the initialization.<br>";
	// }

	public function index(){
		//
		echo "This is my index function.";
	}

	public function one($name){
		$this->load->model("hello_model", "model");

		$profile = $this->model->getProfile("");

		// print_r($profile);
		$this->load->view("header");

		$data = array("name" => $name);
		$data['profile'] = $profile;
		$this->load->view("one", $data);
	}

	public function two(){
		echo "This is two.";

	}
}