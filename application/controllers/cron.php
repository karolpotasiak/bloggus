<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Cron extends Public_Controller {
	
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('post_model');
	}
	
	public function daily()
	{
		$to_update = $this->post_model->get_where(array('pos_date' => date('Y-m-d'), 'pos_status' => 'scheduled'));
		
		foreach($to_update as $post)
		{
			$this->post_model->update(array('pos_id' => $post->pos_id), array('pos_status' => 'published'));
		}
	}
	
	
}
