<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Posts extends Admin_Controller {
	
	function __construct()
	{
		parent::__construct();

		///$this->load->model('user_model');

	}

	public function index()
	{
		$this->render('posts/list');
	}	
}