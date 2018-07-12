<?php

class Admin extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->module(['Books','Data']);
	}

	function index(){
		$this->template->call_admin_template();
	}

	function data(){
		$this->data->list_data();
	}

	function addData(){
		$this->data->addData();
	}

	function addDetail($id_data){
		$this->data->addDetail($id_data);
	}
}