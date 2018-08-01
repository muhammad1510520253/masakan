<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// listing user
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->order_by('IdUser');
		$query=$this->db->get();
		return $query->result();
	}

	// Detail user
	public function detail($IdUser)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('IdUser',$IdUser);
		$this->db->order_by('IdUser');
		$query=$this->db->get();
		return $query->row();
	}
	public function detailuser($IdUser)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('IdUser',$IdUser);
		$this->db->order_by('Username');
		$query=$this->db->get();
		return $query->row();
	}

	// Detail user
	public function login($username,$password)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where(array('Username'=>$username,
						 'Password'=>sha1($password)));
		$this->db->order_by('IdUser');
		$query=$this->db->get();
		return $query->row();
	}

	// Tambah/insert data user
	public function tambah($data)
	{
		$this->db->insert('user',$data);
	}
// Edit/update user
	public function edit($data)
	{
		$this->db->where('IdUser',$data['IdUser']);
		$this->db->update('user',$data);
	}
	// delete/hapus user
	public function delete($data)
	{
		$this->db->where('IdUser',$data['IdUser']);
		$this->db->delete('user',$data);
	}
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */