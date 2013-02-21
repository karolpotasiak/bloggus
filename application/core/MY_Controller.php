<?php
class MY_Controller extends CI_Controller {
	
	var $data;
		
	function __construct()
    {
        parent::__construct();
    }
	
}


class Admin_Controller extends MY_Controller {
		
	function __construct()
    {
        parent::__construct();
		$this->_isLoggedIn();
    }
	
	private function _isLoggedIn()
	{
		if($this->session->userdata('logged_in') == false)
		{
			$this->session->sess_destroy();
			redirect('admin/login');
		}
	}
	
	public function render($view)
	{
		$this->load->view('admin/common/header', $this->data);
		$this->load->view('admin/'.$view, $this->data);
		$this->load->view('admin/common/footer', $this->data);
	}
	
}


class Public_Controller extends MY_Controller {
		
	function __construct()
    {
        parent::__construct();
		$this->_get_tags();
    }
	
	private function _get_tags()
	{
		$this->load->model('tag_model');
		$this->data->tags = $this->tag_model->get();
	}
	
	public function render($view)
	{
		$this->load->view('common/header', $this->data);
		$this->load->view($view, $this->data);
		$this->load->view('common/sidebar', $this->data);
		$this->load->view('common/footer', $this->data);
	}
}