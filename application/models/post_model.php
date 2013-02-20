<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Post_model extends MY_Model {
	
	var $table = 'posts';
	
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }	
}
	