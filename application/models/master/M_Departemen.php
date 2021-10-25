<?php
/**
 * 
 */
class M_Departemen extends CI_Model
{
	private $departemen = "ak_data_master_departemen";
	
	function __construct()
	{
		parent::__construct();
	}

	public function get_list_data(){
		return $this->db->get($this->departemen)->result();
	}

}