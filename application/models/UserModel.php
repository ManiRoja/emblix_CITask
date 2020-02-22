<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}


	public function registerUser($data)
	{
		$this->db->insert('users',$data);
		return $this->db->affected_rows();
	}

	public function usersdata()
	{
		$this->db->where('role',2);
		return $this->db->get('users')->result();
	}

	public function updatedata($id)
	{
		$this->db->where('id',$id);
		return $this->db->get('users')->result();
	}

	public function editUser($data,$id)
	{
		$this->db->where('id',$id);
		$this->db->update('users',$data);
		return $this->db->affected_rows();
	}

	public function deletionuser($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('users');
		return $this->db->affected_rows();
	}
}