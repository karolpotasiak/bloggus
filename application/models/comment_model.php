<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Comment_model extends MY_Model {
	
	var $table = 'comments';
	
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
	
}