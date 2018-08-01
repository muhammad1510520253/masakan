<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {
	public function __construct()
	{

		parent::__construct();
		$this->load->model('artikel_model');
		$this->load->model('user_model');
		$this->load->model('konfigurasi_model');
			$this->load->model('kategori_model');
		
	}

	public function index()
	{

		$id_user=$this->session->userdata('IdUser');

		$this->check_login->check();
		$artikel =$this->artikel_model->listing();
		$hitung =$this->artikel_model->hitung($id_user);
	
		$user=$this->user_model->listing();
		$kategori=$this->kategori_model->listing();
		$data=array ( 'title'		=>'Halaman Dasbor Administrator',
			'artikel'=>$artikel,
			'user'=>$user,
			'kategori'=>$kategori,
			'hitung'=>$hitung,
			
		

					'isi'		=>'admin/dasbor/list'
				);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

}

/* End of file Dasbor.php */
/* Location: ./application/controllers/admin/Dasbor.php */