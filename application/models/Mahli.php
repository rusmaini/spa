<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mahli extends CI_Model
{
	protected $_table = 'ahli';
	
	public function get_all($limit,$start)
	{
		$this->db->limit($limit, $start)->order_by('no_ahli');
		return $this->db->get($this->_table)->result_array();	
	}
	
	function count_all()
	{
		return $this->db->get($this->_table)->num_rows();
	}
	
	function get($id)
	{
		return $this->db->get_where($this->_table,array('id'=>$id))->row_array();
	}
	
	function insert($data)
	{
		$this->db->insert($this->_table, $data); 
	}
	
	function update($data,$id)
	{
		$this->db->where('id', $id);
		$this->db->update($this->_table, $data); 
	}
	
	function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->_table); 
	}
}
	