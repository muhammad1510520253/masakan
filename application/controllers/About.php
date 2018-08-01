<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('konfigurasi_model');
		$this->load->model('artikel_model');
	
	}
	// Main page - Homepage
	public function index()
	{
		$konfigurasi = $this->konfigurasi_model->listing();
		$artikel=$this->artikel_model->home();
		$data=array('title' => 'Kontak '.$konfigurasi->Nama_Web ,
			
			'konfigurasi'=>$konfigurasi,
					'isi'	=> 'about/list'
				);
		$this->load->view('layout/wrapper_layout',$data,FALSE);
	}
}
