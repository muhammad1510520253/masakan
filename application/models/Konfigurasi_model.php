<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konfigurasi_model extends CI_Model {
public function __construct()
{
	parent::__construct();
	$this->load->database();
}

// Listing
public function listing()
{
	$query=$this->db->get('konfigurasi');
	return $query->row();
}
	// edit
public function edit($data){
$this->db->where('Id_Konfigurasi',$data['Id_Konfigurasi']);
$this->db->update('konfigurasi',$data);	
}

// Menu artikel
public function menu_artikel(){
	 $this->db->select('artikel.*,
							kategori.Nama_Kategori,kategori.Slug_Kategori,user.Nama');
		$this->db->from('artikel');
		// join
		$this->db->join('kategori','kategori.Id_Kategori=artikel.Id_Kategori','LEFT');
		$this->db->join('user','user.IdUser=artikel.IdUser','LEFT');
		// end join
		$this->db->where(array('artikel.Status_Artikel' =>'Publish',
			'Konfirmasi'=> '1'));
$this->db->group_by('artikel.Id_Kategori');
		$this->db->order_by('Id_Artikel');
		$query=$this->db->get();
		return $query->result();

}




}

/* End of file Konfigurasi_model.php */
/* Location: ./application/models/Konfigurasi_model.php */