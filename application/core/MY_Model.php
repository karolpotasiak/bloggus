<? 
class MY_Model extends CI_Model {
		
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }		
	
	/*
	 * Get from table
	 * $where: array();
	 * $return: bool if true - returns array otherwise object
	 */
	function get($return=false)
	{
		$query = $this->db->get($this->table);
		if($return)
		{
			return $query->result_array();
		}else{
			return $query->result();
		}
	}
	
	/*
	 * Get from table
	 * $where: array();
	 * $limit: bool;
	 * $offset: bool;
	 * $return: bool if true - returns array otherwise object
	 */
	function get_where($where=false, $limit=false, $offset=false, $return=false)
	{
		//$this->db->where($table, $where);
		//$query = $this->db->get($table);
		$query = $this->db->get_where($this->table, $where, $limit, $offset);
		
		if ($query->num_rows() > 0)
		{
			if($return)
			{
				return $query->result_array();
			}else{
				return $query->result();
			}
		}else{
			return false;
		}
	}
	
	/**
	 * Get from table 
	 * returns first matching element
	 */
	function getFirst($where=false)
	{
		$query = $this->db->get_where($this->table, $where);
		return $query->row(0);
	}
	
	
	function insert($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}
	
	function update($where, $data)
	{
		$this->db->where($where);
		$this->db->update($this->table, $data); 
		return $this->db->insert_id();
	}
		
}
	