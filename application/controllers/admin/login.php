<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends MY_Controller {
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('user_model');

	}

	public function index()
	{
		if($this->input->post('email') && $this->input->post('password'))
		{

			$user = $this->user_model->getFirst('users', array('use_email'=>$this->input->post('email'), 'use_pass'=>md5($this->input->post('password')), 'use_is_admin' => 1));
			if($user)
			{
				if(count($user)==1)
				{
					$this->session->set_userdata($user);
					$this->session->set_userdata('logged_in', true);
					redirect('admin/posts');		
				}else{
					//error to log and unknown to user
					$this->session->set_flashdata('error', 'Unknow error.');
				}
			}else{
				//display error
				$this->session->set_flashdata('error', 'Incorrect email or password.');
			}
			redirect('admin/login');
		}
		$this->load->view('admin/login');
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}