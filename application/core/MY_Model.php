<? 
class MY_Model extends CI_Model {
		
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }		
	
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
	
	function get_where($where=false, $order=false,$limit=false, $offset=false, $return=false)
	{
		$this->db->where($where);
		if($order !==false){
			$this->db->order_by($order); 
		}
		$query = $this->db->get($this->table);
		
		//$query = $this->db->get_where($this->table, $where, $limit, $offset);
		
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
	