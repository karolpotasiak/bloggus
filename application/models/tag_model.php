<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Tag_model extends MY_Model {
	
	var $table = 'tags';
	
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->model('tag_to_post_model');
    }
	
	public function add($tag_arr, $post_id)
	{
		foreach($tag_arr as $tag)
		{
			$insert_data = array();
			$insert_data['tag_title'] = trim($tag);
			$insert_data['tag_slug'] = url_title($tag, '-', TRUE);
			$tag_row = $this->getFirst(array('tag_slug' => $insert_data['tag_slug']));
			if($tag_row)
			{
				$tag_id = $tag_row->tag_id;
			}else{
				$tag_id = $this->insert($insert_data);
			}
			$this->tag_to_post_model->insert(array('ttp_pos_id' => $post_id, 'ttp_tag_id' => $tag_id));
		}
		
	}
	
}
	