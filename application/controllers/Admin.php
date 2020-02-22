<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

		public function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('user_id'))
			{ 
				return redirect('welcome/login');
			}
			$this->load->model('UserModel');
			$this->load->model('Adminmodel');
		}


		public function create_user()
	{
			$this->form_validation->set_rules('firstname', 'First Name', 'required');
			$this->form_validation->set_rules('lastname', 'Last Name', 'required');
			$this->form_validation->set_rules('username', 'User Name', 'required');
			$this->form_validation->set_rules('phone', 'Phone', 'required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
			$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('admin/creationUser');
		}
		else
		{		
			$data=array(
				'firstname'=>$this->input->post('firstname'),
				'lastname'=>$this->input->post('lastname'),
				'username'=>$this->input->post('username'),
				'phone'=>$this->input->post('phone'),
				'password'=>sha1($this->input->post('password')),
				'role'=>2,
				'active_status'=>0
			);
			$result=$this->UserModel->registerUser($data);
			if($result>0)
			{
				$this->session->set_flashdata('message','User successfully Registered.');
			}
			else
			{
				$this->session->set_flashdata('message','User Registration failed.');
			}
			$this->load->view('admin/creationUser');
		}
	}


		public function dashboard()
		{
			$users=$this->UserModel->usersdata();
			$this->load->view('admin/gettingusers',['users'=>$users]);
		   
		}

		public function updateuserstatus($id,$status)
		{
			
			$result=$this->Adminmodel->userstatus($id,$status);
			redirect('Admin/dashboard');
		}

		public function updateuser($id)
	{
		$users=$this->UserModel->updatedata($id);
		$this->load->view('admin/edituser',['users'=>$users]);
	}

	public function editUser($id)
	{
		$this->form_validation->set_rules('firstname', 'First Name', 'required');
			$this->form_validation->set_rules('lastname', 'Last Name', 'required');
			$this->form_validation->set_rules('username', 'User Name', 'required');
			$this->form_validation->set_rules('phone', 'Phone', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->updateuser($id);
		}
		else
		{		
			$data=$this->input->post();
			$result=$this->UserModel->editUser($data,$id);
			if($result>0)
			{
				$this->session->set_flashdata('message','User Updation  successfully.');
			}
			else
			{
				$this->session->set_flashdata('message','User Updation  failed.');
			}
			redirect('Admin/dashboard');
		}
	}


	public function deleteuser($id)
	{
		$result=$this->UserModel->deletionuser($id);
		if($result>0)
			{
				$this->session->set_flashdata('message1','User Deleted  successfully.');
			}
			else
			{
				$this->session->set_flashdata('message1','User Deleted  failed.');
			}
			redirect('Admin/dashboard');
	}
	}