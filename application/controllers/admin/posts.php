<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Posts extends Admin_Controller {
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('post_model');
		$this->load->model('tag_model');
		
	}

	public function index()
	{
		$this->data->posts = $this->post_model->get();
		$this->render('posts/list');
	}
	
	public function add()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('pos_title', 'Title', 'required');
		$this->form_validation->set_rules('pos_date', 'Post Date', 'required');
		$this->form_validation->set_rules('pos_summary', 'Post Summary', 'required');
		$this->form_validation->set_rules('pos_text', 'Post Text', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->render('posts/add');
		}
		else
		{
			
			$inser_data = array();
			$inser_data['pos_title'] = $this->input->post('pos_title');
			$inser_data['pos_date'] = ddmmyyyy_to_mysql($this->input->post('pos_date'));
			$inser_data['pos_summary'] = $this->input->post('pos_summary');
			$inser_data['pos_text'] = $this->input->post('pos_text');
			if($this->input->post('pos_status') == 'publish' && $this->input->post('pos_date') !== date("d/m/Y"))
			{
				$inser_data['pos_status'] = 'scheduled';
			}else{
				$inser_data['pos_status'] = $this->input->post('pos_status');
			}

			if($_FILES)
			{
				$file = $this->_upload($_FILES);
				if(isset($file['upload_data'])){
					$inser_data['pos_image'] = $file['upload_data']['file_name'];
				}
				if(isset($file['error'])){
					$this->session->set_flashdata('error', $file['error']);
				}
				
			}
			
			$post_id = $this->post_model->insert($inser_data);
			
			if($this->input->post('pos_tags'))
			{
				$tags_arr = explode(",", $this->input->post('pos_tags'));
				$this->tag_model->add($tags_arr, $post_id);
			}
			
			redirect('admin/posts');
		}
		
	}

	private function _upload($_FILES)
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1024';
		$config['encrypt_name'] = true;
		$config['max_width']  = '500';
		//$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			return array('error' => $this->upload->display_errors());
		}else{
			return array('upload_data' => $this->upload->data());
		}

	}
}