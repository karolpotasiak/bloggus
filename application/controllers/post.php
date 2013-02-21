<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Post extends Public_Controller {
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('post_model');
		$this->load->model('tag_model');
		$this->load->model('comment_model');
		$this->load->library('form_validation');
	}
	
	public function blogroll()
	{
		if($this->session->userdata('use_is_admin') == 1)
		{
			$data['pos_status !='] = 'scheduled';
		}else{
			$data['pos_status'] = 'published';
		}
		$this->data->posts = $this->post_model->get_where($data, 'pos_date desc, pos_id desc');
		$this->render('post/blogroll');
	}
	
	public function tag()
	{
		if($this->uri->segment(2))
		{
			$data = array();
			$data['tag_slug'] = $this->uri->segment(2);
			$tag = $this->tag_model->getFirst($data);
			if(count($tag)>0)
			{
				$this->data->tag = $tag;
				$this->data->posts = $this->post_model->get_posts_by_tag($tag->tag_id);
				$this->render('post/tag');
			}else{
				show_404();
			}
		}else{
			show_404();
		}
	}
	
	public function view()
	{
		if($this->uri->segment(2))
		{
			$data = array();
			if($this->session->userdata('use_is_admin') == 1)
			{
				$data['pos_status !='] = 'scheduled';
			}else{
				$data['pos_status'] = 'published';
			}
			$data['pos_id'] = $this->uri->segment(2);
			$post = $this->post_model->getFirst($data);
			
			if($this->input->post('add_comment'))
			{
				
				$this->form_validation->set_rules('com_name', 'Name', 'required');
				$this->form_validation->set_rules('com_comment', 'Comment', 'required');

				if ($this->form_validation->run() == FALSE)
				{
					//nothing :)
				}
				else
				{
					$insert_data = array();
					$insert_data['com_pos_id'] = $data['pos_id'];
					$insert_data['com_name'] = $this->input->post('com_name');
					$insert_data['com_comment'] = $this->input->post('com_comment');
					$insert_data['com_date'] = date('Y-m-d');
					$this->comment_model->insert($insert_data);
					redirect('view/'.$data['pos_id']);
				}

			}
			
			if(count($post)>0)
			{
				$this->data->post = $post;
				$this->data->comments = $this->comment_model->get_where(array('com_pos_id' =>$data['pos_id']));
				$this->render('post/post');
			}else{
				show_404();
			}
		}else{
			show_404();
		}
	}
}