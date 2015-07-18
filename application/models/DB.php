<?php
class DB extends Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	function user_insert($table,$arr)
	{
		$this->db->insert($table,$arr);
	}
	
	function user_update($table,$id,$arr)
	{
		switch($table)
		{
			case 'user':
				$this->db->where('uid',$id);
				break;
			case 'order':
				$this->db->where('orderid',$id);
				break;
			default :
				echo "Please select a table!";
				break;	
		}
		
		$this->db->update($table,$arr);	
	}
	
	function user_delete($table,$id)
	{
		switch($table)
		{
			case 'user':
				$this->db->where('uid',$id);
				break;
			case 'order':
				$this->db->where('orderid',$id);
				break;
			default :
				echo "Please select a table!";
				break;	
		}
		$this->db->delete('user');	
	}
	
	function user_select($table,$uname)
	{
		$this->db->where('uname',$uname);
		$this->db->select('*');	
		$query=$this->db->get($table);
		return $query->result();
	}
}
?>