<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel_model extends CI_Model {

	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// listing artikel
	public function listing()
	{
		$this->db->select('artikel.*,
							kategori.Nama_Kategori,kategori.Slug_Kategori,user.Nama');
		$this->db->from('artikel');
		// join
		$this->db->join('kategori','kategori.Id_Kategori=artikel.Id_Kategori','LEFT');
		$this->db->join('user','user.IdUser=artikel.IdUser','LEFT');
		// end join
	// $this->db->where(array('Status_Artikel' => 'Publish'));

		$this->db->order_by('Tanggal_Post','DESC');
		$query=$this->db->get();
		return $query->result();
	}

	public function artikel_kategori($slug_artikel)
	{
		$this->db->select('artikel.*,
							kategori.Nama_Kategori,kategori.Slug_Kategori,user.Nama');
		$this->db->from('artikel');
		// join
		$this->db->join('kategori','kategori.Id_Kategori=artikel.Id_Kategori','LEFT');
		$this->db->join('user','user.IdUser=artikel.IdUser','LEFT');
		// end join
	$this->db->where(array('Status_Artikel' => 'Publish','Konfirmasi' => 1,'kategori.Slug_Kategori' => $slug_artikel));

		$this->db->order_by('Tanggal_Post');
		$query=$this->db->get();
		return $query->result();
	}

	public function hitung($IdUser)
	{
		$this->db->select('artikel.*,
							kategori.Nama_Kategori,kategori.Slug_Kategori,user.Nama');
		$this->db->from('artikel');
		// join
		$this->db->join('kategori','kategori.Id_Kategori=artikel.Id_Kategori','LEFT');
		$this->db->join('user','user.IdUser=artikel.IdUser','LEFT');
		// end join
	// $this->db->where(array('Status_Artikel' => 'Publish' OR 'artikel.IdUser'=='1'));
		$this->db->where('Status_Artikel =','Publish');
		$this->db->or_where('artikel.IdUser =',$IdUser);

		$this->db->order_by('Id_Artikel');
		$query=$this->db->get();
		return $query->result();
	}
	// listing artikel home
	public function home()
	{
		$this->db->select('artikel.*,
							kategori.Nama_Kategori,kategori.slug_kategori,user.Nama');
		$this->db->from('artikel');
		// join
		$this->db->join('kategori','kategori.Id_Kategori=artikel.Id_Kategori','LEFT');
		$this->db->join('user','user.IdUser=artikel.IdUser','LEFT');
		// end join
		$this->db->where('Status_Artikel ' , 'Publish');
		$this->db->where('artikel.Konfirmasi ',1);


		$this->db->order_by('Tanggal_Post','DESC');
		$this->db->limit(6);
		$query=$this->db->get();
		return $query->result();
	}
public function pencarian($pencarian)
	{
		$this->db->select('artikel.*,
							kategori.Nama_Kategori,kategori.slug_kategori,user.Nama');
		$this->db->from('artikel');
		// join
		$this->db->join('kategori','kategori.Id_Kategori=artikel.Id_Kategori','LEFT');
		$this->db->join('user','user.IdUser=artikel.IdUser','LEFT');
		// end join
		$this->db->like('Judul_Artikel ' , $pencarian);


		$this->db->order_by('Tanggal_Post','DESC');
		
		$query=$this->db->get();
		return $query->result();
	}
	public function slider()
	{
		$this->db->select('artikel.*,
							kategori.Nama_Kategori,kategori.slug_kategori,user.Nama');
		$this->db->from('artikel');
		// join
		$this->db->join('kategori','kategori.Id_Kategori=artikel.Id_Kategori','LEFT');
		$this->db->join('user','user.IdUser=artikel.IdUser','LEFT');
		// end join
		$this->db->where('Status_Artikel ' , 'Publish');
		$this->db->where('artikel.Konfirmasi ',1);


		$this->db->order_by('Id_Artikel','DESC');
		$this->db->limit(3);
		$query=$this->db->get();
		return $query->result();
	}

	// listing artikel Mainpage
	
		public function artikelbaru()
	{
		$this->db->select('artikel.*,
							kategori.Nama_Kategori,kategori.Slug_Kategori,user.Nama');
		$this->db->from('artikel');
		// join
		$this->db->join('kategori','kategori.Id_Kategori=artikel.Id_Kategori','LEFT');
		$this->db->join('user','user.IdUser=artikel.IdUser','LEFT');
		// end join
	$this->db->where(array('Konfirmasi' => '1'));

		$this->db->order_by('Tanggal_Post','DESC');
		$this->db->limit(15);
		$query=$this->db->get();
		return $query->result();
	}

	// 		public function artikel_kelompok($slug_kategori)
	// {
	// 	$this->db->select('artikel.*,
	// 						kategori.Nama_Kategori,kategori.Slug_Kategori,user.Nama');
	// 	$this->db->from('artikel');
	// 	// join
	// 	$this->db->join('kategori','kategori.Id_Kategori=artikel.Id_Kategori','LEFT');
	// 	$this->db->join('user','user.IdUser=artikel.IdUser','LEFT');
	// 	// end join
	// $this->db->where(array('Konfirmasi' => '1','kategori.Slug_Kategori' => $slug_kategori));

	// 	$this->db->order_by('Tanggal_Post','DESC');
	// 	$this->db->limit(10);
	// 	$query=$this->db->get();
	// 	return $query->result();
	// }
	



	// Total artikel Mainpage
	// public function total_kategori($Id_Kategori)
	// {
	// 	$this->db->select('artikel.*,
	// 						kategori.Nama_Kategori,kategori.slug_kategori,user.Nama');
	// 	$this->db->from('artikel');
	// 	// join
	// 	$this->db->join('kategori','kategori.Id_Kategori=artikel.Id_Kategori','LEFT');
	// 	$this->db->join('user','user.IdUser=artikel.IdUser','LEFT');
	// 	// end join
	// 	$this->db->where(array('Status_Artikel' => 'Publish',
	// 		'artikel.Id_Kategori'=>$Id_Kategori));
	// 	$this->db->order_by('Id_Artikel','DESC');
	
	// 	$query=$this->db->get();
	// 	return $query->result();
	// }

	//Read artikel
	public function read($slug_artikel)
	{
		$this->db->select('artikel.*,
							kategori.Nama_Kategori,kategori.Slug_Kategori,user.Nama');
		$this->db->from('artikel');
		// join
		$this->db->join('kategori','kategori.Id_Kategori=artikel.Id_Kategori','LEFT');
		$this->db->join('user','user.IdUser=artikel.IdUser','LEFT');
		// end join

	
		
		$this->db->where(array('Status_Artikel' => 'Publish',
			'artikel.Slug_Artikel'=>$slug_artikel));
		$this->db->order_by('Id_Artikel','DESC');
	
		$query=$this->db->get();
		return $query->row();
	}

	// Detail artikel
	public function detail($Id_Artikel)
	{
		$this->db->select('*');
		$this->db->from('artikel');
		$this->db->where('Id_Artikel',$Id_Artikel);
		$this->db->order_by('Id_Artikel');
		$query=$this->db->get();
		return $query->row();
	}

	// Detail artikel
	public function login($artikelname,$password)
	{
		$this->db->select('*');
		$this->db->from('artikel');
		$this->db->where(array('artikelname'=>$artikelname,
						 'password'=>sha1($password)));
		$this->db->order_by('Id_Artikel');
		$query=$this->db->get();
		return $query->row();
	}

	// Tambah/insert data artikel
	public function tambah($data)
	{
		$this->db->insert('artikel',$data);
	}
// Edit/update artikel
	public function edit($data)
	{
		$this->db->where('Id_Artikel',$data['Id_Artikel']);
		$this->db->update('artikel',$data);
	}
	// delete/hapus artikel
	public function delete($data)
	{
		$this->db->where('Id_Artikel',$data['Id_Artikel']);
		$this->db->delete('artikel',$data);
	}
}

/* End of file Artikel_model.php */
/* Location: ./application/models/Artikel_model.php */