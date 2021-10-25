<?php
/**
 * 
 */
class M_Karyawan extends CI_Model
{
	private $karyawan = "ak_data_master_karyawan";
	
	function __construct()
	{
		parent::__construct();
	}

	public function get_list_data(){
		return $this->db->get($this->karyawan)->result();
	}

}