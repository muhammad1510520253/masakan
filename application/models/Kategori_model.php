<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// listing kategori
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->order_by('Urutan','ASC');
		$query=$this->db->get();
		return $query->result();
	}

	// Detail kategori
	public function detail($Id_Kategori)
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->where('Id_Kategori',$Id_Kategori);
		$this->db->order_by('Id_Kategori');
		$query=$this->db->get();
		return $query->row();
	}
	// Read kategori
	public function read($slug_kategori)
	{
		$this->db->select('*');
		$this->db->from('kategori');
		$this->db->where('slug_kategori',$slug_kategori);
		$this->db->order_by('Id_Kategori');
		$query=$this->db->get();
		return $query->row();
	}


	// Tambah/insert data kategori
	public function tambah($data)
	{
		$this->db->insert('kategori',$data);
	}
// Edit/update kategori
	public function edit($data)
	{
		$this->db->where('Id_Kategori',$data['Id_Kategori']);
		$this->db->update('kategori',$data);
	}
	// delete/hapus kategori
	public function delete($data)
	{
		$this->db->where('Id_Kategori',$data['Id_Kategori']);
		$this->db->delete('kategori',$data);
	}
}

/* End of file Kategori_model.php */
/* Location: ./application/models/Kategori_model.php */