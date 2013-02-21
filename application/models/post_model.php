<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Post_model extends MY_Model {
	
	var $table = 'posts';
	
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
	public function get_posts_by_tag($id)
	{
		$this->db->select('*');
		$this->db->from('tag_to_post');
		$this->db->join('posts', 'posts.pos_id = tag_to_post.ttp_pos_id');
		$this->db->where(array('ttp_tag_id' => $id, 'pos_status' => 'published'));
		$this->db->order_by('pos_date desc, pos_id desc'); 
		$query = $this->db->get();
		return $query->result();
	}
}
	