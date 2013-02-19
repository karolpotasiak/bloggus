<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends MY_Model {
	
	var $table = 'users';
	
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }	
}
	