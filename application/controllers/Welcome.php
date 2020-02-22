<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function adminlogin()
	{
		if($this->session->userdata('user_id'))
		{
			return redirect('admin/dashboard');
		}
		$this->load->view('admin/login');
	}
 
	public function adminSignin()
	{
		$this->form_validation->set_rules('username', 'User Name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run())
		{
			$data=array(
				'username'=>$this->input->post('username'),
				'password'=>sha1($this->input->post('password')),
				'role'=>1
			);
			$this->load->model('adminmodel');
			$userExist=$this->adminmodel->existadmin($data);
			if($userExist)
			{
				$sessionData=array(
					'user_id'=>$userExist->id,
					'username'=>$userExist->username,
					'role'=>$userExist->role,
				);
				$this->session->set_userdata($sessionData);
				/*echo $this->session->userdata('username');
				exit;*/
				return redirect("Admin/dashboard");
			}
			else
			{
				$this->session->set_flashdata("message","UserName or Password is Incorrect!");
			}
			redirect("welcome/adminlogin");
		}
		else{
				//echo validation_errors();
			
				$this->login();
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('user_id');
		return redirect('welcome/adminlogin');
	}
}
