<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Oops extends CI_Controller {
	// Main page - Homepage
	public function __construct()
	{
		parent::__construct();
	
		$this->load->model('konfigurasi_model');
	
	}
	public function index()
	{

		$konfigurasi=$this->konfigurasi_model->listing();
		$data=array('title' => $konfigurasi->Nama_Web ,
					'isi'	=> 'oops/list'
				);
		$this->load->view('layout/wrapper_layout',$data,FALSE);
	}
}
