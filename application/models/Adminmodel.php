<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmodel extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}

	public function existadmin($data)
	{
		$this->db->where($data);
		$query=$this->db->get('users');
		if($query->num_rows()>0)
		{
			return $query->row();
		}

	}

	public function userstatus($id,$status)
	{
		$this->db->where('id',$id);
		$this->db->update('users',array('active_status' => $status));
	
	}
}