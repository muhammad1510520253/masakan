<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
// Load model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('kategori_model');
	}
	// Main page kategori
	public function index()
	{
		
		$this->check_login->check();
		$kategori=$this->kategori_model->listing();

// validasi
		$this->form_validation->set_rules('nama_kategori','Nama kategori','required|is_unique[kategori.Nama_Kategori]',
			array('required' => '%s harus diisi',
				'is_unique' => '%s <strong>'.$this->input->post('Nama_Kategori').'</strong> sudah ada.Buat kategori baru'));
		if($this->form_validation->run()===FALSE){
			// end validasi
	
		
		$data=array('title' => 'Data kategori berita('.count($kategori).')',
			'kategori' => $kategori,
			'isi' => 'admin/kategori/list');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
			}else{
		$i=$this->input;
		$slug_kategori=url_title($this->input->post('nama_kategori'),'dash',TRUE);
		$data = array('Slug_Kategori' => $slug_kategori,
			'Nama_Kategori' =>$i->post('nama_kategori'),
					  'Urutan' =>$i->post('urutan')
					
					  );
		$this->kategori_model->tambah($data);
		$this->session->set_flashdata('sukses', 'Data telah ditambah');
		redirect(base_url('admin/kategori'),'refresh');
			}
			// End masuk validasi
	}
	//Edit kategori
	public function edit($id_kategori)
	{
		$this->check_login->check();
		$kategori=$this->kategori_model->detail($id_kategori);

// validasi
		$this->form_validation->set_rules('Nama_Kategori','Nama kategori','required',
			array('required' => '%s harus diisi'
				));
		if($this->form_validation->run()===FALSE){
			// end validasi
	
		
		$data=array(	'title'	 => 'Edit kategori berita('.count($kategori).')',
			'kategori' => $kategori,
			'isi' => 'admin/kategori/edit');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
			}else{
		$i=$this->input;
		$slug_kategori=url_title($this->input->post('Nama_Kategori'),'dash',TRUE);
		$data = array('Id_Kategori'=>$id_kategori,
			'Slug_Kategori' => $slug_kategori,
			'Nama_Kategori' =>$i->post('Nama_Kategori'),
					  'Urutan' =>$i->post('urutan')
					
					  );
		$this->kategori_model->edit($data);
		$this->session->set_flashdata('sukses', 'Data telah diedit');
		redirect(base_url('admin/kategori'),'refresh');
			}
			// End masuk validasi
	}
	// Delete user
	public function delete($id_kategori)
	{
		// proteksi delete
		$this->check_login->check();
		$user=$this->kategori_model->detail($id_kategori);
		$data= array('Id_Kategori' => $user->Id_Kategori);
		$this->kategori_model->delete($data);
		$this->session->flashdata('sukses','Data telah dihapus');
		redirect(base_url('admin/kategori'),'refresh');

	}

}

/* End of file Kategori.php */
/* Location: ./application/controllers/admin/Kategori.php */