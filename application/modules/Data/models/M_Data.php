<?php

class M_Data extends CI_Model
{
	function __construct(){
		parent::__construct();
	}

	function post_data($data){
		$this->db->insert('kk',$data);
		return $this->db->insert_id();
	}

	function add_pdd(){
		$this->db->insert('penduduk',$this->input->post());
		return $this->db->insert_id();
	}

	function add_aset(){
		$this->db->insert('aset',$this->input->post());
		return $this->db->insert_id();
	}

	function add_konsumsi(){
		$this->db->insert('konsumsi',$this->input->post());
		return $this->db->insert_id();
	}

	function get_all(){
		$query=$this->db->get('kk');
		return $query->result();
	}

	function get_desa()
	{
		$query=$this->db->get('desa');
		return $query->result();
	}

	function get_id($id_data)
	{
		return $this->db->query("Select * from kk k, desa d where k.id_desa=d.id_desa and id_kk='$id_data'");
	}

	function update_data($id_data, $data)
	{
		$this->db->where('id_kk', $id_data);
		$this->db->update('kk', $data);
	}

	function delete($id_data)
	{
		$this->db->where('id_kk', $id_data);
		$this->db->delete('kk');
	}
}