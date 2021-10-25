<?php
/**
 * 
 */
class Karyawan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("master/M_Karyawan","m");
		ini_set("allow_url_fopen", 1);
	}

	public function index(){

	}

	public function options(){
		header('Content-Type: application/json');
		$data = $this->m->get_list_data();
		echo json_encode($data);
	}
}